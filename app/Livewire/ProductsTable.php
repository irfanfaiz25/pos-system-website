<?php

namespace App\Livewire;

use Livewire\Component;

class ProductsTable extends Component
{
    public $filters = '';
    public $showAddModal = false;
    protected $listeners = ['openAddModal' => 'handleOpenAddModal'];


    public function handleOpenAddModal()
    {
        $this->showAddModal = true;
    }

    public function closeAddModal()
    {
        $this->showAddModal = false;
    }

    public function render()
    {
        return view('livewire.contents.products-table');
    }
}
