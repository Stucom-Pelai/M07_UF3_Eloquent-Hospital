<div class="wrapper">
    <div id="body" class="active">
        <div class="content">
            <div class="container">
                <div class="page-title">
                    <h2 class="p-3 shadow text-info bg-light">My Clinic Data</h2>
                </div>
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="text-info" wire:loading>Loading..</div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="update()">

                                    <div class="col-md-8 m-2">
                                        <p class="text-muted">Clinic data such as, status, bloodgroup or desease.</p>

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
                                        
                                        <div class="form-group text-right">
                                            <button class="btn btn-success" type="submit"><i class="fas fa-check"></i>
                                                {{ $btn_text }}</button>
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
</div>