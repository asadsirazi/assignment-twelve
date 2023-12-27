@extends('backend.app')
@section('title', 'Edit Route' . ' | ' . getenv('APP_NAME'))
@section('crumb-text', 'Edit Route')

@section('content')
    <!-- horizontal form -->
    <div class="mx-auto max-w-xl">
        <x-custom.form-messages/>
        <!-- form controls -->
        <form action="{{ route('routes.update', $route->id) }}" class="space-y-5 border p-6 rounded" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <label for="name">Name <span class="text-danger">required</span></label>
                <input id="name" name="name" type="text" value="{{ old('name', $route->name) }}" class="form-input" />
            </div>
            <div>
                <label for="departure_location_id">Departure Location <span class="text-danger">required</span></label>
                <select name="departure_location_id" id="departure_location_id" class="form-select text-white-dark">
                    <option>Select Departure Location</option>
                    @foreach($locations as $location)
                        <option value="{{ $location->id }}" {{ old('departure_location_id', $route->departure_location_id) == $location->id ? "selected" : "" }}>{{ $location->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="destination_location_id">Destination Location <span class="text-danger">required</span></label>
                <select name="destination_location_id" id="destination_location_id" class="form-select text-white-dark">
                    <option>Select Destination Location</option>
                    @foreach($locations as $location)
                        <option value="{{ $location->id }}" {{ old('destination_location_id', $route->destination_location_id) == $location->id ? "selected" : "" }}>{{ $location->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="status">Status</label>
                <select name="status" id="status" class="form-select text-white-dark">
                    @foreach(\App\Enums\Status::cases() as $status)
                        <option value="{{ $status->value }}" {{ old('status', $route->status) == $status->value ? "selected" : "" }}>{{ $status->status() }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    Edit Route
                </x-primary-button>
            </div>
        </form>
    </div>

@endsection
