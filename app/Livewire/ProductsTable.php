<?php

namespace App\Livewire;

use Livewire\Component;

class ProductsTable extends Component
{
    public $filters = '';


    public function render()
    {
        return view('livewire.contents.products-table');
    }
}
