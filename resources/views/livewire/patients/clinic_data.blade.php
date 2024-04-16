<div class="box">
    <h3 class="text-info">My Clinic Data</h3>
    
    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" name="status" wire:model.lazy="status" placeholder="{{ $patient->status }}" class="form-control" />
        @error('patient.status')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="admit_date">Admit Date</label>
        <input type="date" name="admit_date" wire:model.lazy="patient.admit_date" placeholder="{{ $patient->admit_date }}" class="form-control" />
        @error('patient.admit_date')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="discharge_date">Discharge Date</label>
        <input type="date" name="discharge_date" wire:model.lazy="patient.discharge_date" placeholder="{{ $patient->discharge_date }}" class="form-control" />
        @error('patient.discharge_date')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="disease">Disease</label>
        <input type="text" name="disease" wire:model.lazy="patient.disease" placeholder="{{ $patient->disease }}" class="form-control" />
        @error('patient.disease')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" wire:model.lazy="patient.description" placeholder="{{ $patient->description }}" class="form-control"></textarea>
        @error('patient.description')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="doctor">Doctor</label>
        <input type="text" name="doctor" wire:model.lazy="patient.doctor" placeholder="{{ $patient->doctor }}" class="form-control" />
        @error('patient.doctor')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <button wire:click="update" class="btn btn-primary">Save</button>
    </div>
</div>
