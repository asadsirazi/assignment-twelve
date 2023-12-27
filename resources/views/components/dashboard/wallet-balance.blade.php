<div class="panel h-full overflow-hidden border-0 p-0">
    <div class="min-h-[190px] bg-gradient-to-r from-[#4361ee] to-[#160f6b] p-6">
        <div class="mb-6 flex items-center justify-between">
            <div class="flex items-center rounded-full bg-black/50 p-1 font-semibold text-white ltr:pr-3 rtl:pl-3">
                <img
                    class="block h-8 w-8 rounded-full border-2 border-white/50 object-cover ltr:mr-1 rtl:ml-1"
                    src="{{ asset('assets/images') }}/profile-34.jpeg"
                    alt="image"
                />
                Alan Green
            </div>
            <button
                type="button"
                class="flex h-9 w-9 items-center justify-between rounded-md bg-black text-white hover:opacity-80 ltr:ml-auto rtl:mr-auto"
            >
                <svg
                    class="m-auto h-6 w-6"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="1.5"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
            </button>
        </div>
        <div class="flex items-center justify-between text-white">
            <p class="text-xl">Wallet Balance</p>
            <h5 class="text-2xl ltr:ml-auto rtl:mr-auto"><span class="text-white-light">$</span>2953</h5>
        </div>
    </div>
    <div class="-mt-12 grid grid-cols-2 gap-2 px-8">
        <div class="rounded-md bg-white px-4 py-2.5 shadow dark:bg-[#060818]">
                                            <span class="mb-4 flex items-center justify-between dark:text-white"
                                            >Received
                                                <svg class="h-4 w-4 text-success" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19 15L12 9L5 15"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                </svg>
                                            </span>
            <div
                class="btn w-full border-0 bg-[#ebedf2] py-1 text-base text-[#515365] shadow-none dark:bg-black dark:text-[#bfc9d4]"
            >
                $97.99
            </div>
        </div>
        <div class="rounded-md bg-white px-4 py-2.5 shadow dark:bg-[#060818]">
                                            <span class="mb-4 flex items-center justify-between dark:text-white"
                                            >Spent
                                                <svg class="h-4 w-4 text-danger" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19 9L12 15L5 9"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                </svg>
                                            </span>
            <div
                class="btn w-full border-0 bg-[#ebedf2] py-1 text-base text-[#515365] shadow-none dark:bg-black dark:text-[#bfc9d4]"
            >
                $53.00
            </div>
        </div>
    </div>
    <div class="p-5">
        <div class="mb-5">
                                            <span
                                                class="rounded-full bg-[#1b2e4b] px-4 py-1.5 text-xs text-white before:inline-block before:h-1.5 before:w-1.5 before:rounded-full before:bg-white ltr:before:mr-2 rtl:before:ml-2"
                                            >Pending</span
                                            >
        </div>
        <div class="mb-5 space-y-1">
            <div class="flex items-center justify-between">
                <p class="font-semibold text-[#515365]">Netflix</p>
                <p class="text-base"><span>$</span> <span class="font-semibold">13.85</span></p>
            </div>
            <div class="flex items-center justify-between">
                <p class="font-semibold text-[#515365]">BlueHost VPN</p>
                <p class="text-base"><span>$</span> <span class="font-semibold">15.66</span></p>
            </div>
        </div>
        <div class="flex justify-around px-2 text-center">
            <button type="button" class="btn btn-secondary ltr:mr-2 rtl:ml-2">View Details</button>
            <button type="button" class="btn btn-success">Pay Now $29.51</button>
        </div>
    </div>
</div>
