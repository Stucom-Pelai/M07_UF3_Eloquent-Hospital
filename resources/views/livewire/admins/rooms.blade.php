<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }} Rooms</h3>
            </div>
            <div>
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <div class="text-info" wire:loading>Loading..</div>
                    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_room()">
                        <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
                            {{ __('Add New room') }}
                        </div>
                        <div class="form-group">
                            <label for="department">Department</label>
                            <select name="department" wire:model.lazy="department" class="form-control" required>
                                <option selected>Choose Department</option>
                                @forelse ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @empty
                                <option value="">Null</option>
                                @endforelse
                            </select>

                            @error('department')
                            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="roomtype">Room Type</label>
                            <select name="roomtype"  class="form-control" required>
                                <option selected disabled>Enter Room Type</option>
                                <option value="general">general</option>
                                <option value="private">private</option>
                                <option value="semi-private">semi-private</option>
                                <option value="ward">ward</option>
                            @error('roomtype')
                            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Room Status</label>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-outline-primary">
                                    <input type="radio" id="available" name="status" value="available"
                                        wire:model="status" autocomplete="off">
                                    Available
                                </label>
                                <label class="btn btn-outline-warning">
                                    <input type="radio" id="occupied" name="status" value="occupied"
                                        wire:model="status" autocomplete="off">
                                    Occupied
                                </label>
                                <label class="btn btn-outline-danger">
                                    <input type="radio" id="maintenance" name="status" value="maintenance"
                                        wire:model="status" autocomplete="off">
                                    Maintenance
                                </label>
                            </div>
                            @error('status')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="{{ $button_text }}">
                        </div>
                    </form><br>
                    <hr>

                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
                        {{ __('All  rooms') }}
                    </div>
                    <table class="table table-hover" style="" id="">
                        <thead>
                            <tr>
                                <th>Room No</th>
                                <th>Room Type</th>
                                <th>Department</th>
                                <th>Status</th>
                                <th>Dated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($rooms as $room)
                                <tr>
                                    <td>{{ $room->id }}</td>
                                    <td>{{ $room->type }}</td>
                                    <td>{{ $room->department->name }}</td>
                                    <td>{{ $room->status }}</td>
                                    <td>{{ $room->created_at }}</td>
                                    <td class="text-right">
                                        <button wire:click="edit({{ $room->id }})"
                                            class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                        <button wire:click="delete({{ $room->id }})"
                                            onclick="return confirm('{{ __('Are You Sure?') }}')" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            @empty
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $rooms->links() }}
                </div>
            </div>
        </div>
