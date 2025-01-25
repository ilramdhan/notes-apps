<?php

namespace Modules\Auth\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Modules\Auth\Models\NaUsers;

class NaRegist extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';

    public function register()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:na_users,nau_email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = NaUsers::create([
            'nau_name' => $this->name,
            'nau_email' => $this->email,
            'nau_password' => Hash::make($this->password),
        ]);

        Auth::login($user);

        return redirect()->route('/'); // Sesuaikan route
    }

    public function render()
    {
        return view('auth::livewire.na-regist')->layout('auth::layouts.master');
    }
}
