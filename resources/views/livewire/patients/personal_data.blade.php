<h1>My personal data...</h1>
<div class="box">
    <h3 class="text-info">My Personal Data</h3>
    
    <div class="form-group">
        <label for="status">Name</label>
        <input type="text" name="name" wire:model.lazy="name" placeholder="{{ $patient->name }}" class="form-control" />
        @error('patient.name')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="gender">Gender</label>
        <input type="text" name="gender" wire:model.lazy="patient.gender" placeholder="{{ $patient->gender }}" class="form-control" />
        @error('patient.gender')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="discharge_date">Age</label>
        <input type="number" name="age" wire:model.lazy="patient.age" placeholder="{{ $patient->age }}" class="form-control" />
        @error('patient.age')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" wire:model.lazy="patient.address" placeholder="{{ $patient->address }}" class="form-control" />
        @error('patient.address')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" wire:model.lazy="patient.email" placeholder="{{ $patient->email }}" class="form-control"></input>
        @error('patient.description')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="number" name="phone" wire:model.lazy="patient.phone" placeholder="{{ $patient->phone }}" class="form-control" />
        @error('patient.phone')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" name="photo" wire:model.lazy="patient.photo" placeholder="{{ $patient->photo }}" class="form-control" />
        @error('patient.photo')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <button wire:click="update" class="btn btn-primary">Save</button>
    </div>
</div>
<style>
    .box{
        margin-bottom: 15%;
    }
</style>