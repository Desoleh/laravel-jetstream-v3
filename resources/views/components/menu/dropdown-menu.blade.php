<li
  class="{{ request()->routeIs($route) ? 'menu-active' : 'menu-hover border-x-4 border-teal-300 flex items-center bg-gray-50 border-t dark:bg-gray-800 dark:text-white' }} relative ml-2 py-2 pl-6 pr-2 ">
  <span class="{{ request()->routeIs($route) ? 'active' : '' }}" aria-hidden="true"></span>
  <a class="inline-flex  items-center justify-center text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 "
    href="{{ route($route) }}">
    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd"
        d="M5 4.76393C5.84696 3.07001 7.57828 2 9.47214 2H14.5279C16.4217 2 18.153 3.07001 19 4.76393L21.6833 10.1305C21.8916 10.5471 22 11.0064 22 11.4721V17C22 19.7614 19.7614 22 17 22H7C4.23858 22 2 19.7614 2 17V11.4721C2 11.0064 2.10844 10.5471 2.31672 10.1305L5 4.76393ZM9.47214 4C8.33582 4 7.29703 4.64201 6.78885 5.65836L4.10557 11.0249C4.03614 11.1638 4 11.3169 4 11.4721V17C4 18.6569 5.34315 20 7 20H17C18.6569 20 20 18.6569 20 17V11.4721C20 11.3169 19.9639 11.1638 19.8944 11.0249L17.2111 5.65836C16.703 4.64201 15.6642 4 14.5279 4H9.47214Z"
        fill="#14B8A6" />
      <path fill-rule="evenodd" clip-rule="evenodd"
        d="M2 11H5.5C7.433 11 9 12.567 9 14.5C9 15.3284 9.67157 16 10.5 16H13.5C14.3284 16 15 15.3284 15 14.5C15 12.567 16.567 11 18.5 11H22V17C22 19.7614 19.7614 22 17 22H7C4.23858 22 2 19.7614 2 17V11ZM4 13V17C4 18.6569 5.34315 20 7 20H17C18.6569 20 20 18.6569 20 17V13H18.5C17.6716 13 17 13.6716 17 14.5C17 16.433 15.433 18 13.5 18H10.5C8.567 18 7 16.433 7 14.5C7 13.6716 6.32843 13 5.5 13H4Z"
        fill="#115E59" />
    </svg>
    {{-- <svg class="w-5 h-5 dark:text-gray-300 {{ request()->routeIs($route) ? 'text-white' :'' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20"></path></svg> --}}
    <div class="flex justify-between">
      <span
        class="{{ request()->routeIs($route) ? 'text-white' : '' }} ml-2 dark:text-gray-300">{{ $title }}</span>
      {{ $slot }}
    </div>
  </a>
</li>
