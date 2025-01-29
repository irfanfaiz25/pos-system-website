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

    public $filters = '';
    public $showAddModal = false;
    protected $listeners = ['openAddModal' => 'handleOpenAddModal'];

    public $image;
    public $name = '';
    public $description = '';
    public $categoryId = '';
    public $price = '';


    public function handleOpenAddModal()
    {
        $this->showAddModal = true;
    }

    public function closeAddModal()
    {
        $this->showAddModal = false;
    }

    public function handleAddProduct()
    {
        $validated = $this->validate([
            'name' => 'required|max:100|string|unique:products,name',
            'description' => 'nullable|string|max:255',
            'categoryId' => 'required|exists:categories,id',
            'price' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png'
        ]);

        if ($this->image) {
            $extension = $this->image->getClientOriginalExtension();
            $newImageName = time() . '_' . uniqid() . '.' . $extension;
            $imagePath = $this->image->storeAs('img', $newImageName, 'public');
        }

        Product::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'category_id' => $validated['categoryId'],
            'price' => $validated['price'],
            'image_path' => $imagePath ? 'storage/' . $imagePath : null,
        ]);

        $this->closeAddModal();
    }

    public function render()
    {
        $products = Product::latest()->paginate(5);
        $categories = Category::all();
        return view('livewire.contents.products-table', [
            'products' => $products,
            'categories' => $categories
        ]);
    }
}
