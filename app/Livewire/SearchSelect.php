<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contributor;

class SearchSelect extends Component
{

    public $search = '';
    public $options = [];

    public function updatedSearch()
    {
        $this->options = Contributor::where('name', 'like', '%' . $this->search . '%')
            ->get();
    }

    public function render()
    {
        return view('livewire.search-select');
    }
}
