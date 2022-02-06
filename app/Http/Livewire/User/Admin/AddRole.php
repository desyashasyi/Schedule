<?php

namespace App\Http\Livewire\User\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Role;
use App\Models\Role_Sympozia;


class AddRole extends Component
{
    protected $listeners =['addRole_Admin' => 'addRole', 'unAssignRole_Admin' => 'unAssignRole'];
    public $userId;
    public $roleName;
    public $roleDisplay;
    public $roleDesc;
    public $addRoleItemEnable=false;
    public function render()
    {

        $user = null;
        $roles = null;
        if($this->userId){
            $roles = Role::all();
            $user = User::where('id', $this->userId)->first();
        }
        return view('livewire.user.admin.add-role', compact('user', 'roles'));
    }

    public function addRole($id){
        $this->userId = $id;
        $this->emit('addRoleModal_Admin');
    }

    public function assignRole($id){
        $role = Role::where('id', $id)->first();
        $user = User::find($this->userId);

        $user->attachRole($role->name);
        $this->emit('refreshUserHome_Admin');
        
    }

    public function unAssignRole($id, $user_id){
        $role = Role::where('id', $id)->first();
        $user = User::find($user_id);

        $user->detachRole($role->name);
        $this->emit('refreshUserHome_Admin');
    }

    public function addRoleItem(){
        $this->formReset();
        $this->addRoleItemEnable = true;
    }

    public function saveRoleItem(){

        $this->validate([
            'roleName' => 'required',
            'roleDisplay' => 'required',
            'roleDesc' => 'required',
        ]);

        $roleName =strtolower($this->roleName);
        $role = Role_Schedule::where('name', $roleName)->first();
        if(!$role){
            Role_Schedule::create([
                'name' => $this->roleName,
                'display_name' => $this->roleDisplay,
                'description' => $this->roleDesc,
            ]);
        }
        $this->addRoleItemEnable = false;
        \FlashMessages::addFlashMessageNow(
            'success',
            'The role of '.$this->roleDisplay. ' has been submitted',
        );

    }

    public function close(){
        $this->addRoleItemEnable = false;
    }
    public function formReset(){
        $this->resetErrorBag();
        $this->addRoleItemEnable=false;
        $this->roleName='';
        $this->roleDisplay='';
        $this->roleDesc='';
    }
}