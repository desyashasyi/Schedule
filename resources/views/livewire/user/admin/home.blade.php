<div>
    @livewire('user.admin.add-role')
    <div class="table-responsive users-table">
        <table class="table table-striped table-sm data-table">
            <thead class="thead">
                <tr>

                    <th class="text-center" width="5%">No</th>
                    <th width="20%">Username</th>
                    <th width="30%">Identity</th>
                    <th width="15%">Roles</th>

                    <th class="text-right" width="30%">Action</th>
                </tr>
            </thead>
            <tbody id="users-table">
                @forelse ($users as $number => $user)
                    <tr>
                        <td class="text-center">
                            {{++$number}}
                        </td>
                        <td>
                            {{$user->name}}
                            <br>
                            {{$user->email}}
                        </td>
                        <td>
                            Identity
                        </td>
                        <td>
                            @foreach ($user->roles as $role)
                                {{$role->display_name}}
                                <button wire:click="$emit('unAssignRole_Admin',{{$role->id}}, {{$user->id}})"class="btn btn-xs">
                                    <i class="fa fa-xs fa-user-minus" style="color: red"></i>
                                </button>
                                <br>
                            @endforeach
                        </td>
                        <td class="text-right">
                            <button wire:click="$emit('addRole_Admin', {{$user->id}})" class="btn btn-xs btn-warning">
                                <i class="fa fa-xs fa-user-plus"></i>
                                Add role
                            </button>
                            <button wire:click="login({{$user->id}})" class="btn btn-xs btn-info">
                                <i class="fa fa-xs"></i>
                                Login
                            </button>

                        </td>
                    </tr>
                @empty
                    No data
                @endforelse
            </tbody>
        </table>
    </div>
</div>
