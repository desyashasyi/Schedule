<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;

class Index extends Component
{
    public function render()
    {
        return view('livewire.index')->layout('adminlte::page');
    }
    public function mount(){
        if(!auth()->check()){
            return redirect()->route('sso');
        }
    }
}
