@extends('front.app')
@section('title', 'All results' . ' | ' . getenv('APP_NAME'))
@section('crumb-text', 'Routes')

@section('content')

    <x-message-success />

    <div class="panel mt-6">


        <div class="panel-header flex items-center mb-5 md:mb-5 md:top-[25px]">
            <h5 class="text-lg font-semibold dark:text-white-light ">Available Trips</h5>
        </div>
        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
            <div class="dataTable-container">
                @if(! count($results))
                    <p>No trips found</p>

                    <x-custom.link :url="route('search.index')">Go Back</x-custom.link>
                @else
                    <table id="products-table" class="whitespace-nowrap">
                        <thead>
                        <tr>
                            <th style="width: 5%;"><a href="#">Sl.</a></th>
                            <th style="width: 15%;"><a href="#">Origin</a></th>
                            <th style="width: 15%;"><a href="#">Destination</a></th>
                            <th style="width: 15%;"><a href="#">Departure Time</a></th>
                            <th style="width: 15%;"><a href="#">Arrival Time</a></th>
                            <th style="width: 15%;"><a href="#">Actions</a></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $trip)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $trip->departureLocation->name }}</td>
                                <td>{{ $trip->destinationLocation->name }}</td>
                                <td>{{ $trip->departure_time }}</td>
                                <td>{{ $trip->arrival_time }}</td>
                                <td class="border-b border-[#ebedf2] p-3 text-center dark:border-[#191e3a]">
                                    <x-custom.link :url="route('ticket.create', encrypt($trip->id))">
                                        Book
                                    </x-custom.link>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif

            </div>
            <div class="pagination">
               @if(! count($results))
                    {{ $results->links() }}
                @endif
            </div>
        </div>
    </div>

@endsection


