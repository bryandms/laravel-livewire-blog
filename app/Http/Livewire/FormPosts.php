<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Post;

class FormPosts extends Component
{
    public $title = '';
    public $body  = '';

    public function update($field)
    {
        $this->validateOnly($field, [
            'title' => 'required|min:2|unique:posts',
            'body'  => 'required|min:2',
        ]);
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required|min:2|unique:posts',
            'body'  => 'required|min:2',
        ]);

        Post::create([
            'user_id' => auth()->id(),
            'title'   => $this->title,
            'body'    => $this->body,
        ]);

        session()->flash('message', 'The post has been created successfully');
        $this->emit('searchingPosts');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.form-posts');
    }
}
