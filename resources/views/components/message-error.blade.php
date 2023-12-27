@if(session()->has('error'))
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" class="flex items-center p-3.5 rounded text-danger bg-danger-light dark:bg-danger-dark-light">
        <span class="ltr:pr-2 rtl:pl-2"><strong class="ltr:mr-1 rtl:ml-1">Error!</strong> {{ session('error') }}</span>
    </div>
@endif
