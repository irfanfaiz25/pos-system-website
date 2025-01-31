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
    public $isEditMode = false;
    public $productId = null;

    public $newImage = null;
    public $existingImagePath = null;
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
        $this->isEditMode = false;
        $this->productId = null;
        $this->reset(['name', 'description', 'categoryId', 'price', 'newImage', 'existingImagePath']);

        $this->showModal = false;
    }

    public function testToast()
    {
        toastr()->success('test');
    }

    public function editProduct($productId)
    {
        $this->isEditMode = true;
        $this->productId = $productId;

        $product = Product::find($productId);

        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = (int) $product->price;
        $this->categoryId = $product->category_id;
        $this->existingImagePath = $product->image_path;

        $this->handleOpenModal();
    }

    public function handleSaveProduct()
    {
        $validated = $this->validate([
            'name' => 'required|max:100|string|unique:products,name,' . $this->productId,
            'description' => 'nullable|string|max:255',
            'categoryId' => 'required|exists:categories,id',
            'price' => 'required',
            'newImage' => 'nullable|mimes:jpg,jpeg,png|max:2048'
        ], [
            'categoryId.required' => 'category field is required',
            'newImage.mimes' => 'The image must be a file of type: jpg, jpeg, png.',
            'newImage.max' => 'The image may not be greater than 2MB.',
        ]);

        $imagePath = $this->existingImagePath;
        if ($this->newImage) {
            $imagePath = 'storage/' . $this->newImage->store('img', 'public');
        }

        if ($this->isEditMode) {
            $product = Product::find($this->productId);
            $product->update([
                'name' => $validated['name'],
                'description' => $validated['description'],
                'category_id' => $validated['categoryId'],
                'price' => $validated['price'],
                'image_path' => $imagePath ?? null,
            ]);
        } else {
            Product::create([
                'name' => $validated['name'],
                'description' => $validated['description'],
                'category_id' => $validated['categoryId'],
                'price' => $validated['price'],
                'image_path' => $imagePath ?? null,
            ]);
        }

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
