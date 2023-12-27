@extends('backend.app')
@section('title', 'Add Route' . ' | ' . getenv('APP_NAME'))
@section('crumb-text', 'Add Route')

@section('content')
    <!-- horizontal form -->
    <div class="mx-auto max-w-xl">
       <x-custom.form-messages/>
        <!-- form controls -->
        <form action="{{ route('routes.store') }}" class="space-y-5 border p-6 rounded" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="name">Name <span class="text-danger">required</span></label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" class="form-input" />
            </div>
            <div>
                <label for="departure_location_id">Departure Location <span class="text-danger">required</span></label>
                <select name="departure_location_id" id="departure_location_id" class="form-select text-white-dark">
                    <option>Select Departure Location</option>
                    @foreach($locations as $location)
                        <option value="{{ $location->id }}" {{ old('departure_location_id') == $location->id ? "selected" : "" }}>{{ $location->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="destination_location_id">Destination Location <span class="text-danger">required</span></label>
                <select name="destination_location_id" id="destination_location_id" class="form-select text-white-dark">
                    <option>Select Destination Location</option>
                    @foreach($locations as $location)
                        <option value="{{ $location->id }}" {{ old('destination_location_id') == $location->id ? "selected" : "" }}>{{ $location->name }}</option>
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
                    Add Route
                </x-primary-button>
            </div>
        </form>
    </div>

@endsection
