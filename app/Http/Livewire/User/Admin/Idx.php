<?php

namespace App\Http\Livewire\User\Admin;

use Livewire\Component;
use Auth;

class Idx extends Component
{
    public function render()
    {
        return view('livewire.user.admin.idx')->layout('adminlte::page');
    }

    public function mount(){
        if(!auth()->check()){
            return redirect()->route('login');
        }
        if(!Auth::user()->hasRole('admin')){
            return redirect()->route('home');
        }
    }
}
