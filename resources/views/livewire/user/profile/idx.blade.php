<div>
    @section('content')
        <div class="row">
            <div class="col-sm-12 offset-sm-0">
                <div class="card">
                    <div class="card-header">
                        <b>User</b> | User profile
                    </div>
                    <div class="card-body">
                       
                        <div class="row">
                            <div class="col-sm-12 offset-sm-0">
                                @if($profileMenu == 'create')
                                    @livewire('user.profile.create')
                                @else
                                    @livewire('user.profile.data')
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <i>sympozia(c)2021</i>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
