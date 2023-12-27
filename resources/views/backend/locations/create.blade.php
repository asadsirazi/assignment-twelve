@extends('backend.app')
@section('title', 'Add Location' . ' | ' . getenv('APP_NAME'))
@section('crumb-text', 'Add Location')

@section('content')
    <!-- horizontal form -->
    <div class="mx-auto max-w-xl">
       <x-custom.form-messages/>
        <!-- form controls -->
        <form action="{{ route('locations.store') }}" class="space-y-5 border p-6 rounded" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="name">Name <span class="text-danger">required</span></label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" class="form-input" />
            </div>
            <div>
                <label for="slug">Slug</label>
                <input id="slug" type="text" value="{{ old('slug') }}" placeholder="Leave empty to generate slug based on location name" class="form-input" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    Add Location
                </x-primary-button>
            </div>
        </form>
    </div>

@endsection
