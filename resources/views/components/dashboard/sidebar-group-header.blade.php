@props(['title'])
<h2 class="-mx-4 mb-1 flex items-center bg-white-light/30 px-7 py-3 font-extrabold uppercase dark:bg-dark dark:bg-opacity-[0.08]">
    <svg
        class="hidden h-5 w-4 flex-none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        stroke-width="1.5"
        fill="none"
        stroke-linecap="round"
        stroke-linejoin="round"
    >
        <line x1="5" y1="12" x2="19" y2="12"></line>
    </svg>
    <span>{{ $title }}</span>
</h2>
