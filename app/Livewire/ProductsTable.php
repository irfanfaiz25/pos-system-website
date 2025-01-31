<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ProductsTable extends Component
{
    use WithPagination, WithFileUploads;

    public $searchTerm = '';
    public $filter = '';

    public $filters = '';
    public $showModal = false;

    public $image;
    public $name = '';
    public $description = '';
    public $categoryId = '';
    public $price = '';

    protected $listeners = [
        'globalSearchUpdated' => 'updateSearch',
        'globalFilterUpdated' => 'updateFilter',
        'openAddModal' => 'handleOpenModal'
    ];


    public function updateSearch($search)
    {
        $this->resetPage();
        $this->searchTerm = $search;
    }

    public function updateFilter($filter)
    {
        $this->filter = $filter;
    }

    public function handleOpenModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function handleAddProduct()
    {
        $validated = $this->validate([
            'name' => 'required|max:100|string|unique:products,name',
            'description' => 'nullable|string|max:255',
            'categoryId' => 'required|exists:categories,id',
            'price' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png|max:2048'
        ], [
            'categoryId.required' => 'category field is required',
            'image.mimes' => 'The image must be a file of type: jpg, jpeg, png.',
            'image.max' => 'The image may not be greater than 2MB.',
        ]);

        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('img', 'public');
        }

        Product::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'category_id' => $validated['categoryId'],
            'price' => $validated['price'],
            'image_path' => $imagePath ? 'storage/' . $imagePath : null,
        ]);

        $this->closeModal();
    }

    public function render()
    {
        $products = Product::query()
            ->when($this->filter, function ($query) {
                $query->where('category_id', $this->filter); // Filter by category
            })
            ->when($this->searchTerm, function ($query) {
                $query->where('name', 'like', '%' . $this->searchTerm . '%'); // Search by name
            })->latest()->paginate(5);
        $categories = Category::all();

        return view('livewire.contents.products-table', [
            'products' => $products,
            'categories' => $categories
        ]);
    }
}
