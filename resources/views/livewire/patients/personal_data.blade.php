<div class="box">
    <form wire:submit.prevent="update">
        <h3 class="text-info">My Personal Data</h3>
        
        <div class="form-group">
            <label for="status">Name</label>
            <input type="text" name="name" wire:model.lazy="name" value="{{ $patient->name }}" class="form-control" />
            @error('name')
                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" name="gender" wire:model.lazy="gender" value="{{ $patient->gender }}" class="form-control" />
            @error('gender')
                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" wire:model.lazy="age" value="{{ $patient->age }}" class="form-control" />
            @error('age')
                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" wire:model.lazy="address" value="{{ $patient->address }}" class="form-control" />
            @error('address')
                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" wire:model.lazy="email" value="{{ $patient->email }}" class="form-control"></input>
            @error('email')
                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" name="phone" wire:model.lazy="phone" value="{{ $patient->phone }}" class="form-control" />
            @error('phone')
                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" wire:model.lazy="photo" value="{{ $patient->photo }}" class="form-control" />
            @error('photo')
                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"><a href="{{ route('patient_home') }}">{{ $button_update }}</a></button>
            <button class="btn btn-primary"><a href="{{ route('patient_home') }}">Go back</a></button>
        </div>
    </form>
</div>
<style>
    .box{
        margin-bottom: 15%;
    }
</style>
