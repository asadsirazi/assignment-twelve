@extends('front.app')


@section('content')

    <div class="mx-auto max-w-xl">
        <x-custom.form-messages/>
        <!-- form controls -->
        <form action="{{ route('search') }}" class="space-y-5 border p-6 rounded" method="POST">
            @csrf
            <div>
                <label for="name">Your Name <span class="required">required</span></label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" class="form-input" />
            </div>
            <div>
                <label for="name">Email <span class="required">required</span></label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" class="form-input" />
            </div>

            <div class="grid grid-cols-4" x-data="{
                    price: {{ $trip->price }}
                    count: 0
            }">
                @for($i = 1; $i <= (int) $trip->bus->seat_capacity; $i++)
                    <x-custom.form.checkbox :label="$i" :name="'seat_number[' . $i . ']'" :id="'seat_number_'.$i" />
                @endfor
            </div>

            <div>
                <label for="date">Date:</label>
                <input id="date" name="date" type="date" value="{{ old('date') }}" class="form-input" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    Buy
                </x-primary-button>
            </div>
        </form>
    </div>
@endsection
