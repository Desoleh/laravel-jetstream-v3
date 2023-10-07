<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule('required|min:5')]
    public $title = '';

    #[Rule('required|min:5')]
    public $content = '';

    public function save()
    {
        $this->validate();

        Post::create(
            $this->only(['title', 'content'])
        );

    }
}
