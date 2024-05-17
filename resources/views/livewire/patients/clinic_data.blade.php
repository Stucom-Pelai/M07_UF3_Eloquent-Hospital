<div class="box" style="margin-bottom: 10%;">
    <h3 class="text-info">My Clinic Data</h3>
    
    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" name="status" wire:model.lazy="patient.status" placeholder="{{ $patient->status }}" class="form-control" disabled/>
        @error('patient.status')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="admit_date">Admit Date</label>
        <input type="text" name="admit_date" wire:model.lazy="admit_date" placeholder="{{ $patient->admit_date }}" class="form-control" disabled/>
        @error('patient.admit_date')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="discharge_date">Discharge Date</label>
        <input type="text" name="discharge_date" wire:model.lazy="discharge_date" placeholder="{{ $patient->discharge_date }}" class="form-control" disabled/>
        @error('patient.discharge_date')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="disease">Disease</label>
        <input type="text" name="disease" wire:model.lazy="patient.disease" placeholder="{{ $patient->disease }}" class="form-control" disabled/>
        @error('patient.disease')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" wire:model.lazy="patient.description" placeholder="{{ $patient->description }}" class="form-control" disabled></textarea>
        @error('patient.description')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="doctor">Doctor</label>
        <input type="text" name="doctor" wire:model.lazy="patient.doctor" placeholder="{{ $patient->doctor }}" class="form-control" disabled/>
        @error('patient.doctor')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <button class="btn btn-primary">
            <a href="{{ route('patient_home') }}"><i class="fas fa-return-alt"></i style="color: white;">Go Back</a>
        </button>
    </div>
</div>
