<div class="panel h-full xl:col-span-2">
    <div class="mb-5 flex items-center dark:text-white-light">
        <h5 class="text-lg font-semibold">Revenue</h5>
        <div x-data="dropdown" @click.outside="open = false" class="dropdown ltr:ml-auto rtl:mr-auto">
            <a href="javascript:;" @click="toggle">
                <svg
                    class="h-5 w-5 text-black/70 hover:!text-primary dark:text-white/70"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                    <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                    <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                </svg>
            </a>
            <ul x-cloak x-show="open" x-transition x-transition.duration.300ms class="ltr:right-0 rtl:left-0">
                <li><a href="javascript:;" @click="toggle">Weekly</a></li>
                <li><a href="javascript:;" @click="toggle">Monthly</a></li>
                <li><a href="javascript:;" @click="toggle">Yearly</a></li>
            </ul>
        </div>
    </div>
    <p class="text-lg dark:text-white-light/90">Total Profit <span class="ml-2 text-primary">$10,840</span></p>
    <div class="relative overflow-hidden">
        <div x-ref="revenueChart" class="rounded-lg bg-white dark:bg-black">
            <!-- loader -->
            <div class="grid min-h-[325px] place-content-center bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08]">
                                                <span
                                                    class="inline-flex h-5 w-5 animate-spin rounded-full border-2 border-black !border-l-transparent dark:border-white"
                                                ></span>
            </div>
        </div>
    </div>
</div>
