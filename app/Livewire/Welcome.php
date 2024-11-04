<?php

namespace App\Livewire;

use App\Models\Staff;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Welcome extends Component
{
    #[Validate('required', message: 'This field is required')]
    #[Validate('max:15', message: 'Cannot be more than 15 characters')]
    #[Validate('unique:users,username', message: 'User account already exist')]
    public $userID;

    #[Validate('required')]
    public $user_type;

    public $user_account;

    public function create()
    {
        $data = $this->validate();

        if ($data["user_type"] == 'student') {
            $user = Student::select('*')->where('matric_number', $data['userID'])->first();
            if (!$user) {
                return back()->with('Credential', 'User credentials do not exist.');
            }
            $user_account = [
                'username'     => $user['matric_number'],
                'student_id'   => $user['id'],
                'password'     => 'library#2024',
                'recovery_pin' => '0123456789',
                'role'         => 'student',
            ];

            if ($user = User::create($user_account)) {
                Auth::login($user);
                $this->redirectRoute('homepage');
            }
        }

        if ($data["user_type"] == 'staff') {
            $user = Staff::select('*')->where('staff_id', $data['userID'])->first();
            if (!$user) {
                return back()->with('Credential', 'User credentials do not exist.');
            }
            $user_account = [
                'username'     => $user['staff_id'],
                'staff_id'     => $user['id'],
                'password'     => 'staff#2024',
                'recovery_pin' => '00001111',
                'role'         => 'staff',
            ];
            if ($user = User::create($user_account)) {
                Auth::login($user);
                $this->redirectRoute('admin-dashboard');
            }

        }
    }

    public function render()
    {
        return view('livewire.welcome');
    }

}
