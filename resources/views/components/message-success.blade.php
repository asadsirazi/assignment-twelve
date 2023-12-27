@if(session()->has('success'))
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" class="flex items-center p-3.5 rounded text-success bg-success-light dark:bg-success-dark-light">
        <span class="ltr:pr-2 rtl:pl-2"><strong class="ltr:mr-1 rtl:ml-1">Success!</strong> {{ session('success') }}</span>
    </div>
@endif
