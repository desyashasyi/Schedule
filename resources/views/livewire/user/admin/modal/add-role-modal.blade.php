<div wire:ignore.self class="modal fade" id="addRoleModal_Admin" tabindex="-1" role="dialog" aria-labelledby="addRoleModal_Admin" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addRoleModal_Admin">Assign role to user</h5>
                <button wire:click = "close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <x-flashmessages-container />
                @if($user)
                    <div class="row">
                        <div class="col-md-12 offset-md-0">
                            <b>Username:</b>
                            <br>
                            {{$user->name}} - {{$user->email}}
                            <br>
                            <br>
                            @if($user->roles->isNotEmpty())
                                <b>Roles:</b>
                                <br>
                                @foreach ($user->roles as $role)
                                    {{$role->display_name}}
                                    <button wire:click="unAssignRole({{$role->id}},{{$user->id}})"class="btn btn-xs">
                                        <i class="fa fa-xs fa-user-minus" style="color: red"></i>
                                    </button>
                                    <br>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    
                    <br>
                    <div class="table-responsive users-table">
                        <table class="table table-striped table-sm data-table">
                            <thead class="thead">
                                <tr>
                                    <th width="30%">Roles</th>
                                    <th width="45%">Description</th>
                                    <th class="text-right" width="25%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="users-table">
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>
                                            {{$role->display_name}}
                                        </td>
                                        <td>
                                            {{$role->description}}
                                        </td>
                                        <td class="text-right">
                                            <button wire:click="assignRole({{$role->id}})"class="btn btn-xs">
                                                <i class="fa fa-xs fa-user-plus" style="color: green"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12 offset-md-0">
                            @if (!$addRoleItemEnable)
                                <button wire:click="addRoleItem"class="btn btn-xs">
                                    <i class="fa fa-xs fa-plus-circle" style="color: blue"></i>
                                    Add Role 
                                </button>
                            @else
                            <hr>
                            <div class="card">
                                <div class="card-header">
                                    <b>Add role</b> 
                                    
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 offset-md-0">
                                            <div class="form-group">
                                                <label for="roleName">Name</label>
                                                <br>
                                                <input wire:model = "roleName" class="form-control">
                                                @error('roleName') <span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="roleDisplay">Display name</label>
                                                <br>
                                                <input wire:model = "roleDisplay" class="form-control">
                                                @error('roleDisplay') <span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="roleDisplay">Display name</label>
                                                <br>
                                                <input wire:model = "roleDesc" class="form-control">
                                                @error('roleDisplay') <span class="text-danger">{{ $message }}</span>@enderror
                                            </div>
                                            <div class="form-group">
                                                <button wire:click="saveRoleItem" class="btn btn-sm btn-primary">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
            <div class="modal-footer">
                <i>Sympozia(2021)</i>
            </div>
       </div>
    </div>
</div>