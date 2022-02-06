<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Faculty_Schedule;
use Auth;

class Sso extends Component
{
    public function render()
    {
        return view('livewire.sso')->layout('adminlte::page');
    }
    public function mount(){

        $user = User::where('sso_username', cas()->user())->first();
        if($user == null){
            if (strlen(cas()->user()) > 7){

                $user = User::create([
                    'sso_username' => cas()->user(),
                ]);
                if(cas()->user() == '197608272009121001'){
                    $user->attachRole('admin');
                    $user->attachRole('faculty');
                }else{
                    $user->attachRole('faculty');
                }
                $faculty = Faculty_Schedule::where('sso_username', cas()->user())->first();
                if($faculty != null){
                    $user->update([
                        'name' => $faculty->code,
                    ]);

                    $faculty->update([
                        'user_id' => $user->id,
                    ]);
                }else{
                    return redirect()->route('profile.faculty');
                }

            }else{
                $user = User::create([
                    'name' => 's'.cas()->user(),
                    'sso_username' => cas()->user()
                ]);
                $user->attachRole('student');
                $student = Student_Schedule::where('code', $user->name)->first();
                if($student == null){
                    return redirect()->route('profile.student');
                }else{
                    $student->update([
                        'user_id' => $user->id,
                    ]);
                }
            }
        }

        $user = User::where('sso_username', cas()->user())->firstorfail();
        Auth::login($user);
        
        return redirect()->route('home');

    }
}
