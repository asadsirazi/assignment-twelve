@extends('backend.app')
@section('title', 'Edit Bus' . ' | ' . getenv('APP_NAME'))
@section('crumb-text', 'Edit Bus')

@section('content')
    <!-- horizontal form -->
    <div class="mx-auto max-w-xl">
        <x-custom.form-messages/>
        <!-- form controls -->
        <form action="{{ route('buses.update', $bus->id) }}" class="space-y-5 border p-6 rounded" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <label for="name">Name <span class="text-danger">required</span></label>
                <input id="name" name="name" type="text" value="{{ old('name', $bus->name) }}" class="form-input" />
            </div>
            <div>
                <label for="seat_capacity">Seat Capacity <span class="text-danger">required</span></label>
                <input id="seat_capacity" name="seat_capacity" type="number" value="{{ old('seat_capacity', $bus->seat_capacity) }}" class="form-input" />
            </div>
            <div>
                <label for="bus_type">Type</label>
                <select name="type" id="bus_type" class="form-select text-white-dark">
                    @foreach(\App\Enums\BusType::cases() as $case)
                        <option value="{{ $case->value }}" {{ old('type', $bus->type) == $case->value ? "selected" : "" }}>{{ $case->type() }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="status">Status</label>
                <select name="status" id="status" class="form-select text-white-dark">
                    @foreach(\App\Enums\Status::cases() as $status)
                        <option value="{{ $status->value }}" {{ old('status', $bus->status) == $status->value ? "selected" : "" }}>{{ $status->status() }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    Update Bus
                </x-primary-button>
            </div>
        </form>
    </div>

@endsection
