@props(['name' => 'Sessions', 'links' => [
    [
        'href' => 'https://google.com',
        'label' => 'Google',
    ],
    [
        'href' => 'https://google.com',
        'label' => 'Google',
    ],
    [
        'href' => 'https://google.com',
        'label' => 'Google',
    ],
]])
<div class="panel bg-gradient-to-r from-violet-500 to-violet-400">
    <div class="flex justify-between">
        <div class="text-md font-semibold ltr:mr-1 rtl:ml-1">{{ $name }}</div>
        <div x-data="dropdown" @click.outside="open = false" class="dropdown">
            <a href="javascript:;" @click="toggle">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                     class="h-5 w-5 opacity-70 hover:opacity-80">
                    <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                    <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                    <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                </svg>
            </a>
            <ul x-show="open" x-transition="" x-transition.duration.300ms=""
                class="text-black ltr:right-0 rtl:left-0 dark:text-white-dark" style="display: none;">
                @foreach($links as $link)
                    <li><a href="{{ $link['href'] }}" @click="toggle">{{ $link['label'] }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="mt-5 flex items-center">
        <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">74,137</div>
        <div class="badge bg-white/30">- 2.35%</div>
    </div>
    <div class="mt-5 flex items-center font-semibold">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
             class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2">
            <path opacity="0.5"
                  d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                  stroke="currentColor" stroke-width="1.5"></path>
            <path
                d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                stroke="currentColor" stroke-width="1.5"></path>
        </svg>
        Last Week 84,709
    </div>
</div>
