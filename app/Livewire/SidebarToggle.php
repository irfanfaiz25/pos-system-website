<?php

namespace App\Livewire;

use Livewire\Component;

class SidebarToggle extends Component
{
    public $isSidebarVisible = false;
    public $sidebarMenu = [
        [
            'name' => 'dashboard',
            'route' => 'dashboard.index',
            'icon' => 'fa-solid fa-house',
            'request' => 'dashboard*'
        ],
        [
            'name' => 'products',
            'route' => 'products.index',
            'icon' => 'fa-solid fa-layer-group',
            'request' => 'products*'
        ],
        [
            'name' => 'transactions',
            'route' => 'transactions.index',
            'icon' => 'fa-solid fa-truck-fast',
            'request' => 'transactions*'
        ],
    ];

    public function toggleSidebar()
    {
        $this->isSidebarVisible = !$this->isSidebarVisible;
    }

    public function render()
    {
        return view('livewire.components.sidebar-toggle');
    }
}
