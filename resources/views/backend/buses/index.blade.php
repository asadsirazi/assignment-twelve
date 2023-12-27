@extends('backend.app')
@section('title', 'Buses' . ' | ' . getenv('APP_NAME'))
@section('crumb-text', 'Buses')

@section('content')

    <x-message-success />

    <div class="panel mt-6">


        <div class="panel-header flex items-center mb-5 md:mb-5 md:top-[25px]">
            <h5 class="text-lg font-semibold dark:text-white-light ">Buses</h5>

            <x-custom.link :url="route('buses.create')">Add New</x-custom.link>
        </div>
        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
            <div class="dataTable-container">
                <table id="products-table" class="whitespace-nowrap">
                    <thead>
                    <tr>
                        <th style="width: 20%;"><a href="#">Sl.</a></th>
                        <th style="width: 30%;"><a href="#">Name</a></th>
                        <th style="width: 30%;"><a href="#">Type</a></th>
                        <th style="width: 30%;"><a href="#">Capacity</a></th>
                        <th style="width: 30%;"><a href="#">Status</a></th>
                        <th style="width: 20%;"><a href="#">Actions</a></th>
                    </tr>
                    </thead>
                    <tbody>
                   @foreach($buses as $bus)
                       <tr>
                           <td>{{ $loop->iteration }}</td>
                           <td>{{ $bus->name }}</td>
                           <td><span class="{{\App\Enums\BusType::tryFrom($bus->type)->typeClass()}}">{{ \App\Enums\BusType::tryFrom($bus->type)->type() }}</span></td>
                           <td>{{ $bus->seat_capacity }}</td>
                           <td><span class="{{\App\Enums\Status::tryFrom($bus->status)->statusClass()}}">{{ \App\Enums\Status::tryFrom($bus->status)->status() }}</span></td>
                           <td class="border-b border-[#ebedf2] p-3 text-center dark:border-[#191e3a]">
                               <a  href="{{ route('buses.edit', $bus->id) }}" type="button" x-tooltip="Edit">
                                   <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 ltr:mr-2 rtl:ml-2">
                                       <path d="M15.2869 3.15178L14.3601 4.07866L5.83882 12.5999L5.83881 12.5999C5.26166 13.1771 4.97308 13.4656 4.7249 13.7838C4.43213 14.1592 4.18114 14.5653 3.97634 14.995C3.80273 15.3593 3.67368 15.7465 3.41556 16.5208L2.32181 19.8021L2.05445 20.6042C1.92743 20.9852 2.0266 21.4053 2.31063 21.6894C2.59466 21.9734 3.01478 22.0726 3.39584 21.9456L4.19792 21.6782L7.47918 20.5844L7.47919 20.5844C8.25353 20.3263 8.6407 20.1973 9.00498 20.0237C9.43469 19.8189 9.84082 19.5679 10.2162 19.2751C10.5344 19.0269 10.8229 18.7383 11.4001 18.1612L11.4001 18.1612L19.9213 9.63993L20.8482 8.71306C22.3839 7.17735 22.3839 4.68748 20.8482 3.15178C19.3125 1.61607 16.8226 1.61607 15.2869 3.15178Z" stroke="currentColor" stroke-width="1.5"></path>
                                       <path opacity="0.5" d="M14.36 4.07812C14.36 4.07812 14.4759 6.04774 16.2138 7.78564C17.9517 9.52354 19.9213 9.6394 19.9213 9.6394M4.19789 21.6777L2.32178 19.8015" stroke="currentColor" stroke-width="1.5"></path>
                                   </svg>
                               </a>
                               <x-custom.button-destroy route="buses.destroy" :id="$bus->id" />

                           </td>
                       </tr>
                   @endforeach
                    </tbody>
                </table>
            </div>
            <div class="pagination">
                {{ $buses->links() }}
            </div>
        </div>
    </div>

@endsection


