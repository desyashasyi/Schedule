<div>
    <div class="row bg-info">
        <div class="col-sm-12 offset-sm-0">
            <b>Name</b>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 offset-sm-1">
            <!--<div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>Salutation :</b>
                </div>
                <div class="col-sm-9 offset-sm-0 text-left">
                    
                </div>
            </div>
        -->
            <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>First name (please spell out, i.e., Jane instead of J.)</b>
                </div>
                <div class="col-sm-5 offset-sm-0 text-left">
                    <div class="form-group">
                        <input rows="2" wire:model = "title" class="form-control"></textarea>
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <!--
            <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>Middle initial, if any</b>
                </div>
                <div class="col-sm-4 offset-sm-0 text-left">
                    <div class="form-group">
                        <input rows="2" wire:model = "title" class="form-control"></textarea>
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
        -->
            <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>*Last name (mixed case, i.e., Smith instead of SMITH)</b>
                </div>
                <div class="col-sm-6 offset-sm-0 text-left">
                    <div class="form-group">
                        <input rows="2" wire:model = "title" class="form-control"></textarea>
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    <div class="row bg-info">
        <div class="col-sm-12 offset-sm-0">
            <b>Affiliation</b>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 offset-sm-1">
            <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>*Current affiliation (e.g., University of Testing) or none - do NOT include school, department, street address or country</b>
                </div>
                <div class="col-sm-6 offset-sm-0 text-left">
                    <div class="form-group">
                        <input rows="2" wire:model = "title" class="form-control"></textarea>
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>Additional affiliation (e.g., XYZ Company)</b>
                </div>
                <div class="col-sm-6 offset-sm-0 text-left">
                    <div class="form-group">
                        <input rows="2" wire:model = "title" class="form-control"></textarea>
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>Country of second affiliation, if different (rarely used)</b>
                </div>
                <div class="col-sm-6 offset-sm-0 text-left">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>Job title (e.g., Associate Professor, Senior Wizard, Research assistant)</b>
                </div>
                <div class="col-sm-4 offset-sm-0 text-left">
                    <div class="form-group">
                        <input rows="2" wire:model = "title" class="form-control"></textarea>
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 offset-sm-0 text-right">
                    <b>Department</b>
                </div>
                <div class="col-sm-5 offset-sm-0 text-left">
                    <div class="form-group">
                        <input rows="2" wire:model = "title" class="form-control"></textarea>
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row bg-info">
        <div class="col-sm-12 offset-sm-0">
            <b>Affiliation</b>
        </div>
    </div>
    -->
    <hr>
    <div class="row">
        <div class="col-sm-12 offset-sm-0">
            <button class="btn btn-success"><i class="fa fa-save"></i> Submit</button>
        </div>
    </div>

    
</div>
