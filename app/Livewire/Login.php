<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Login extends Component
{
    #[Validate('required', message: 'This field is required')]
    #[Validate('max:15', message: 'Cannot be more than 15 characters')]
    public $username;

    #[Validate('required')]
    public $password;

    public function login()
    {
        $login_data = $this->validate();

        $user = User::where('username', $login_data['username'])->first();
        if ($user && password_verify($login_data['password'], $user->password)) {
            Auth::login($user);
            if ($user->role == 'student') {
                $this->redirectRoute('homepage');
            }
            if ($user->role == 'staff') {
                $this->redirectRoute('admin-dashboard');
            }
        }
        session()->flash('Login_credentials', 'Invalid login credentials');
        $this->reset('password');
    }
    public function render()
    {
        return view('livewire.login');
    }
}
