@extends('backend.app')
@section('title', 'Add Trip' . ' | ' . getenv('APP_NAME'))
@section('crumb-text', 'Add Trip')

@push('styles')
    <link href="{{ asset('assets/css') }}/flatpickr.min.css" rel="stylesheet"/>
@endpush

@section('content')
    <!-- horizontal form -->
    <div class="mx-auto max-w-xl">
        <x-custom.form-messages/>
        <!-- form controls -->
        <form action="{{ route('trips.store') }}" class="space-y-5 border p-6 rounded" method="POST"
              enctype="multipart/form-data">
            @csrf
            <div>
                <label for="bus_id">Bus <span class="text-danger">required</span></label>
                <select name="bus_id" id="bus_id" class="form-select text-white-dark">
                    <option>Select Bus</option>
                    @foreach($buses as $bus)
                        <option
                            value="{{ $bus->id }}" {{ old('bus_id', $trip->bus_id) == $bus->id ? "selected" : "" }}>{{ $bus->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="route_id">Route <span class="text-danger">required</span></label>
                <select name="route_id" id="route_id" class="form-select text-white-dark">
                    <option>Select Route</option>
                    @foreach($routes as $route)
                        <option
                            value="{{ $route->id }}" {{ old('route_id', $trip->route_id) == $route->id ? "selected" : "" }}>{{ $route->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="departure_location_id">Departure Location <span class="text-danger">required</span></label>
                <select name="departure_location_id" id="departure_location_id" class="form-select text-white-dark">
                    <option>Select Departure Location</option>
                    @foreach($locations as $location)
                        <option
                            value="{{ $location->id }}" {{ old('departure_location_id', $trip->departure_location_id) == $location->id ? "selected" : "" }}>{{ $location->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="destination_location_id">Destination Location <span
                        class="text-danger">required</span></label>
                <select name="destination_location_id" id="destination_location_id" class="form-select text-white-dark">
                    <option>Select Destination Location</option>
                    @foreach($locations as $location)
                        <option
                            value="{{ $location->id }}" {{ old('destination_location_id', $trip->destination_location_id) == $location->id ? "selected" : "" }}>{{ $location->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="departure-time">Departure Time <span
                        class="text-danger">required</span></label>
                <input id="departure-time" name="departure_time" type="time" value="{{ old('departure_time', $trip->departure_time) }}" class="form-input has-time"/>
            </div>
            <div>
                <label for="arrival-time">Arrival Time <span
                        class="text-danger">required</span></label>
                <input id="arrival-time" name="arrival_time" type="time"  value="{{ old('arrival_time', $trip->arrival_time) }}"  class="form-input has-time"/>
            </div>

            <div>
                <label for="available_days">Availability <span
                        class="text-danger">required</span></label>
                <div>
                    <x-custom.form.checkbox label="Saturday" name="available_days[saturday]"
                                            id="available_days_saturday"/>
                    <x-custom.form.checkbox label="Sunday" name="available_days[sunday]" id="available_days_sunday"/>
                    <x-custom.form.checkbox label="Monday" name="available_days[monday]" id="available_days_monday"/>
                    <x-custom.form.checkbox label="Tuesday" name="available_days[tuesday]"
                                            id="available_days_tuesday"/>
                    <x-custom.form.checkbox label="Wednesday" name="available_days[wednesday]"
                                            id="available_days_wednesday"/>
                    <x-custom.form.checkbox label="Thursday" name="available_days[thursday]"
                                            id="available_days_thursday"/>
                    <x-custom.form.checkbox label="Friday" name="available_days[friday]" id="available_days_friday"/>
                </div>
            </div>

            <div>
                <label for="price">Price <span class="text-danger">required</span></label>
                <input id="price" name="price" type="number" step="0.01" value="{{ old('price') }}" class="form-input"/>
            </div>

            <div>
                <label for="route_id">Status <span class="text-danger">required</span></label>
                <select name="status" id="status" class="form-select text-white-dark">
                    @foreach(\App\Enums\Status::cases() as $status)
                        <option
                            value="{{ $status->value }}" {{ old('status') == $status->value ? "selected" : "" }}>{{ $status->status() }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    Update Trip
                </x-primary-button>
            </div>
        </form>
    </div>
@endsection
