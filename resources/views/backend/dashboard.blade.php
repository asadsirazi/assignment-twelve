@extends('backend.app')
@section('title', getenv('APP_NAME'))
@section('crumb-text', 'Dashboard')

@section('content')
    @include('layouts.backend.parts.cards-panel-section')
@endsection


