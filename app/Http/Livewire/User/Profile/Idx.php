<?php

namespace App\Http\Livewire\User\Profile;

use Livewire\Component;

use App\Models\Faculty_Schedule;
use Auth;

class Idx extends Component
{
    public $profileMenu;
    public function render()
    {

        return view('livewire.user.profile.idx')->layout('adminlte::page');
    }

    public function mount(){
        if(Auth::user()->hasRole('faculty')){
            $profile = Faculty_Schedule::where('user_id', Auth::user()->id)->first();
            if(!$profile){
                $this->profileMenu='create';
            }else{
                $this->profileMenu = null;
            }
        }else{
            $profile = Student_Schedule::where('user_id', Auth::user()->id)->first();
            if(!$profile){
                $this->profileMenu='create';
            }
        }
       
    }
}
