<!-- <div class="wrapper">
    <div id="body" class="active">
        <div class="content">
            <div class="container">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="text-info" wire:loading>Loading..</div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                <form accept-charset="utf-8" class="p-3" wire:submit.prevent="update()">

                                    <div class="col-md-8 m-2">
                                    <div class="page-title">
                    <h2 class="p-3 text-info">My Clinic Data</h2>
                </div>
                                        <p >Clinic data such as, status, bloodgroup or desease.</p>

                                        <div class="form-group">
                                            <label for="" class="form-control-label">Bloodgroup</label>
                                            <input type="text" wire:model.lazy="bloodgroup" name="bloodgroup" class="form-control" placeholder="Bloodgroup">
                                            @error('bloodgroup')
                                            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="form-control-label">Disease</label>
                                            <input type="text" wire:model.lazy="bloodgroup" name="bloodgroup" class="form-control" placeholder="Bloodgroup">
                                            @error('bloodgroup')
                                            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="form-control-label">Status</label>
                                            <input type="text" wire:model.lazy="status" name="status" class="form-control" placeholder="Status">
                                            @error('status')
                                            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="form-control-label">Admit Date</label>
                                            <input type="text" wire:model.lazy="admit_date" name="admit_date" class="form-control" placeholder="Admit date">
                                            @error('admit_date')
                                            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="form-control-label">Discharge Date</label>
                                            <input type="text" wire:model.lazy="discharge_date" name="discharge_date" class="form-control" placeholder="Discharge Date">
                                            @error('discharge_date')
                                            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="form-control-label">Description</label>
                                            <input type="text" wire:model.lazy="description" name="description" class="form-control" placeholder="Description">
                                            @error('description')
                                            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="form-control-label">Doctor</label>
                                            <input type="text" wire:model.lazy="doctor" name="doctor" class="form-control" placeholder="Doctor">
                                            @error('doctor')
                                            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                        
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="box">
    <h3 class="text-info">My Clinic Data</h3>
    
    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" name="status" wire:model.lazy="status" placeholder="Enter Status" class="form-control" />
        @error('status')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="admit_date">Admit Date</label>
        <input type="date" name="admit_date" wire:model.lazy="admit_date" placeholder="Enter Admit Date" class="form-control" />
        @error('admit_date')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="discharge_date">Discharge Date</label>
        <input type="date" name="discharge_date" wire:model.lazy="discharge_date" placeholder="Enter Discharge Date" class="form-control" />
        @error('discharge_date')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="disease">Disease</label>
        <input type="text" name="disease" wire:model.lazy="disease" placeholder="Enter Disease" class="form-control" />
        @error('disease')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" wire:model.lazy="description" placeholder="Enter Description" class="form-control"></textarea>
        @error('description')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="doctor">Doctor</label>
        <input type="text" name="doctor" wire:model.lazy="doctor" placeholder="Enter Doctor" class="form-control" />
        @error('doctor')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <button wire:click="update" class="btn btn-primary">Save</button>
    </div>
</div>
