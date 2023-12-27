<div class="mb-6 grid grid-cols-1 gap-6 text-white sm:grid-cols-2 xl:grid-cols-4">
    <!-- Today -->
    <div class="panel bg-gradient-to-r from-cyan-500 to-cyan-400">
        <div class="flex justify-between">
            <div class="text-md font-semibold ltr:mr-1 rtl:ml-1">Today</div>
        </div>
        <div class="my-7 flex items-center">
            <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">{{$currency}}{{ $salesToday }}</div>
        </div>
    </div>

    <!-- Yesterday -->
    <div class="panel bg-gradient-to-r from-violet-500 to-violet-400">
        <div class="flex justify-between">
            <div class="text-md font-semibold ltr:mr-1 rtl:ml-1">Yesterday</div>
        </div>
        <div class="mt-7 flex items-center">
            <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">{{$currency}}{{ $salesYesterday }}</div>
        </div>
    </div>

    <!-- This Month -->
    <div class="panel bg-gradient-to-r from-blue-500 to-blue-400">
        <div class="flex justify-between">
            <div class="text-md font-semibold ltr:mr-1 rtl:ml-1">This Month</div>

        </div>
        <div class="mt-7 flex items-center">
            <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">{{$currency}}{{ $salesCurrentMonth }}</div>
        </div>
    </div>

    <!-- Last Month -->
    <div class="panel bg-gradient-to-r from-fuchsia-500 to-fuchsia-400">
        <div class="flex justify-between">
            <div class="text-md font-semibold ltr:mr-1 rtl:ml-1">Last Month</div>
        </div>
        <div class="mt-7 flex items-center">
            <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">{{$currency}}{{ $salesLastMonth }}</div>
        </div>
    </div>
</div>
