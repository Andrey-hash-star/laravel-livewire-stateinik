<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LikePostController extends Component
{
    public $post;
    public $counter;

    public function mount($post)
    {
        $this->post = $post;
        $this->counter = $post->posts_likes;
    }

    public function incrementLike()
    {
        $this->post->update([
            'posts_likes' => ++$this->counter
        ]);
    }    
        
    public function render()
    {
        
        return view('livewire.like-post-controller');
    }
}
