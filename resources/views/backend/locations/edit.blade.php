@extends('backend.app')
@section('title', 'Edit Location' . ' | ' . getenv('APP_NAME'))
@section('crumb-text', 'Edit Location')

@section('content')
    <!-- horizontal form -->
    <div class="mx-auto max-w-xl">
        <x-custom.form-messages />

        <!-- form controls -->
        <form action="{{ route('locations.update', $location->id) }}" class="space-y-5 border p-6 rounded" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="location_id" value="{{ $location->id }}" />

            <div>
                <label for="name">Location <span class="text-danger">required</span></label>
                <input id="name" name="name" type="text" value="{{ old('name', $location->name) }}" class="form-input" />
            </div>
            <div>
                <label for="slug">Slug</label>
                <input id="slug" name="slug" type="text" value="{{ old('slug', $location->slug) }}" class="form-input" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    Update Location
                </x-primary-button>
            </div>
        </form>
    </div>

@endsection
