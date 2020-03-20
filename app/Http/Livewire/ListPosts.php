<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Post;

class ListPosts extends Component
{
    use WithPagination;

    protected $posts;
    protected $perPage = 5;
    protected $fired   = false;

    protected $listeners = ['searchingPosts' => 'filteredPosts'];

    public function filteredPosts()
    {
        $this->getPosts();
        $this->fired = true;
    }

    protected function getPosts()
    {
        $this->posts = Post::where('title', 'LIKE', '%' . session('search') . '%')
            ->paginate($this->perPage);
    }

    public function render()
    {
        if (!$this->fired) $this->getPosts();

        return view('livewire.list-posts', [
            'posts' => $this->posts
        ]);
    }
}
