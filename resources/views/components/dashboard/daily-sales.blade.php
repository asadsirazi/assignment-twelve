<div class="panel h-full sm:col-span-2 xl:col-span-1">
    <div class="mb-5 flex items-center">
        <h5 class="text-lg font-semibold dark:text-white-light">
            Daily Sales <span class="block text-sm font-normal text-white-dark">Go to columns for details.</span>
        </h5>
        <div class="relative ltr:ml-auto rtl:mr-auto">
            <div
                class="grid h-11 w-11 place-content-center rounded-full bg-[#ffeccb] text-warning dark:bg-warning dark:text-[#ffeccb]"
            >
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 6V18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path
                        d="M15 9.5C15 8.11929 13.6569 7 12 7C10.3431 7 9 8.11929 9 9.5C9 10.8807 10.3431 12 12 12C13.6569 12 15 13.1193 15 14.5C15 15.8807 13.6569 17 12 17C10.3431 17 9 15.8807 9 14.5"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                    />
                </svg>
            </div>
        </div>
    </div>
    <div class="overflow-hidden">
        <div x-ref="dailySales" class="rounded-lg bg-white dark:bg-black">
            <!-- loader -->
            <div class="grid min-h-[175px] place-content-center bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08]">
                                                <span
                                                    class="inline-flex h-5 w-5 animate-spin rounded-full border-2 border-black !border-l-transparent dark:border-white"
                                                ></span>
            </div>
        </div>
    </div>
</div>
