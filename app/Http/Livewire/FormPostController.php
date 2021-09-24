<?php

namespace App\Http\Livewire;

use App\Commet;
use Livewire\Component;

class FormPostController extends Component
{
    public $post, $title, $message;

    public function mount($post)
    {
        $this->post = $post;
    }

    protected $rules = [
        'title' => 'required|min:5',
        'message' => 'required|min:10',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function saveComment()
    {
        $this->validate();

        // sleep(600);

        Commet::create([
            'title' => $this->title,
            'message' => $this->message,
            'post_id' => $this->post->id
        ]);

        session()->flash('success', 'Комментарий успешно сохранен');
    }
}
