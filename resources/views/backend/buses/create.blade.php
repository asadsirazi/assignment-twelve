@extends('backend.app')
@section('title', 'Add Bus' . ' | ' . getenv('APP_NAME'))
@section('crumb-text', 'Add Bus')

@section('content')
    <!-- horizontal form -->
    <div class="mx-auto max-w-xl">
       <x-custom.form-messages/>
        <!-- form controls -->
        <form action="{{ route('buses.store') }}" class="space-y-5 border p-6 rounded" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="name">Name <span class="text-danger">required</span></label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" class="form-input" />
            </div>

            <div>
                <label for="seat_capacity">Bus Capacity <span class="text-danger">required</span></label>
                <input id="seat_capacity" name="seat_capacity" type="number" value="{{ old('seat_capacity') }}" class="form-input" />
            </div>
            <div>
                <label for="bus_type">Type</label>
                <select name="type" id="bus_type" class="form-select text-white-dark">
                    @foreach(\App\Enums\BusType::cases() as $case)
                        <option value="{{ $case }}" {{ old('type') == $case ? "selected" : "" }}>{{ $case->type() }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="status">Status</label>
                <select name="status" id="status" class="form-select text-white-dark">
                    @foreach(\App\Enums\Status::cases() as $status)
                        <option value="{{ $status }}" {{ old('status') == $status ? "selected" : "" }}>{{ $status->status() }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    Add Bus
                </x-primary-button>
            </div>
        </form>
    </div>

@endsection
