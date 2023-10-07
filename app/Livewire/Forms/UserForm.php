<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Form;

class UserForm extends Form
{

        //name
        #[Rule('required', message: 'Nama wajib diisi')]
        #[Rule('min:3', message: 'Isi Nama Minimal 3 Karakter')]
        public $name = '';

        //email
        #[Rule('required', message: 'Email wajib diisi')]
        #[Rule('unique:users', message: 'Email sudah terdaftar')]
        public $email  = '';

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
        }
}
