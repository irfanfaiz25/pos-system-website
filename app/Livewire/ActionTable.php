<?php

namespace App\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;

class ActionTable extends Component
{
    public $search = '';
    public $searchPlaceholder = 'Search';
    public Collection $filterOptions;
    public $createButtonText = 'Add';
    public $showFilter = true;
    public $selectedFilter = '';


    // Emit a global event when the search term changes
    public function updatedSearch($value)
    {
        $this->dispatch('globalSearchUpdated', search: $value);
    }

    // Emit a global event when the filter changes
    public function updatedSelectedFilter($value)
    {
        $this->dispatch('globalFilterUpdated', filter: $value);
    }

    public function render()
    {
        return view('livewire.components.action-table');
    }
}
