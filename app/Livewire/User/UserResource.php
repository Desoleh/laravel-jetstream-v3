<?php

namespace App\Livewire\User;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use WireUi\Traits\Actions;

class UserResource extends Component
{
    Use Actions;

            //name
            #[Rule('required', message: 'Nama wajib diisi')]
            #[Rule('min:3', message: 'Isi Nama Minimal 3 Karakter')]
            public $name = '';

            //email
            #[Rule('required', message: 'Email wajib diisi')]
            #[Rule('unique:users', message: 'Email sudah terdaftar')]
            #[Rule('email', message: 'Email Format')]
            public $email  = '';

            //password
            // #[Rule('required', message: 'Password wajib diisi')]
            // public $password  = '';

            //roles
            #[Rule('required', message: 'Roles wajib diisi')]
            public $role  = '';

    public function save()
    {
        $this->validate();

        $user = User::create([
            'name'  => $this->name,
            'email' => $this->email,
            'password'  => Hash::make('password'),
        ]);
        $user->assignRole($this->role);

        $this->notification()->success(
            $title = 'User saved',
            $description = 'Your User was successfully saved'
        );

        $this->role = null;

        $this->reset();

        return redirect()->route('user-resource');
    }

    public function render()
    {
        return view('livewire.user.user-resource')->with([
            // 'users' =>  User::all(),
            'roles' =>  Role::all(),
        ]);
    }

}
