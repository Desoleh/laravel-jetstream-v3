<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserResource extends Component
{
    public function render()
    {
        return view('livewire.user.user-resource')->with([
            'users' => User::all(),
        ]);
    }
}
