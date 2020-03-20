<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchPosts extends Component
{
    public $search = '';

    public function mount()
    {
        $this->search = session('search');
    }

    public function updatedSearch($search)
    {
        $this->search = $search;
        session()->put('search', $search);
        session()->save();
        $this->emit('searchingPosts');
    }

    public function render()
    {
        return view('livewire.search-posts');
    }
}
