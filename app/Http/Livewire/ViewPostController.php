<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ViewPostController extends Component
{
    public $post;
    public $view;

    public function mount($post)
    {
        $this->post = $post;
        $this->view = $post->view;
    }

    public function incrementView() 
    {
        sleep(5);
        $this->post->update([
            'view' => ++$this->view
        ]);
    }

    public function render()
    {
        return view('livewire.view-post-controller');
    }
}
