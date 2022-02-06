<?php

namespace App\Http\Livewire\User\Admin;

use Livewire\Component;
use App\Models\User;
use Auth;

class Home extends Component
{
    protected $listeners = ['refreshUserHome_Admin' => '$refresh'];
    public function render()
    {
        $users = User::all();
        return view('livewire.user.admin.home', compact('users'));
    }

    public function login($user_id){
        $user = User::where('id', $user_id)->firstOrfail();
        Auth::login($user);
        return redirect()->route('home');
    }

    
    
}
