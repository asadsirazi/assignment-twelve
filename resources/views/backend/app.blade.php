@include('layouts.backend.header')
<!-- sidebar menu overlay -->
<div x-cloak class="fixed inset-0 z-50 bg-[black]/60 lg:hidden" :class="{'hidden' : !$store.app.sidebar}" @click="$store.app.toggleSidebar()"></div>

{{--<x-loader/>--}}

<x-scroll-to-top/>


<div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
    @include('layouts.backend.sidebar')

    <div class="main-content flex min-h-screen flex-col">
        @include('layouts.backend.parts.header-horizontal')

        <div class="animate__animated p-6" :class="[$store.app.animation]">
            <!-- start main content section -->
            <div>
                <ul class="flex space-x-2 rtl:space-x-reverse">
                    <li>
                        <a href="{{ route('dashboard') }}" class="text-primary hover:underline">Dashboard</a>
                    </li>
                    <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                        <span>@yield('crumb-text', 'Home')</span>
                    </li>
                </ul>

                <div class="pt-5">
                    @yield('content')
                </div>
            </div>
            <!-- end main content section -->
        </div>

@include('layouts.backend.footer')
