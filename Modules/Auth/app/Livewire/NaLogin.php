<?php

namespace Modules\Auth\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NaLogin extends Component
{
    public $email = '';
    public $password = '';

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('message', 'Login successful!');
            \Log::info('Login successful!');
            return redirect()->route('/register');
        }

        session()->flash('error', 'Invalid email or password!');
        \Log::info('Login error!');

    }
    public function render()
    {
            return view('auth::livewire.na-login')->layout('auth::layouts.master');
    }
}
