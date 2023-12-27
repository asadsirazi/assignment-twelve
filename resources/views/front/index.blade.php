@extends('front.app')


@section('content')
    <div class="mx-auto max-w-xl">
            <x-custom.form-messages/>
            <!-- form controls -->
            <form action="{{ route('search') }}" class="space-y-5 border p-6 rounded" method="GET">

                <div>
                    <label for="origin">Origin</label>
                    <select name="origin" id="origin" class="form-select text-white-dark" required>
                        <option>Select Origin</option>
                        @foreach($locations as $location)
                            <option value="{{ $location->id }}" {{ old('origin') == $location->id ? "selected" : "" }}>{{ $location->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="destination">Destination</label>
                    <select name="destination" id="destination" class="form-select text-white-dark" required>
                        <option value="">Select Destination</option>
                        @foreach($locations as $location)
                            <option value="{{ $location->id }}" {{ old('destination') == $location->id ? "selected" : "" }}>{{ $location->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="date">Date</label>
                    <input id="date" name="date" type="date" value="{{ old('date') }}" class="form-input" required/>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        Search
                    </x-primary-button>
                </div>
            </form>
        </div>
@endsection
