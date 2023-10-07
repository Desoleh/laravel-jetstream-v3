<div>
    {{-- <a href="https://davidgrzyb.com/accordion-with-alpine-js-tailwind" class="mt-12 underline">How to Build an Alpine js Accordion</a> --}}

    <div class="flex flex-col">
        <div>
            <a href="{{ route('dashboard') }}"
            class="{{ request()->routeIs('dashboard') ? 'text-gray-950 font-bold dark:text-red-100 border-l-8 border-indigo-800'  : ' text-gray-950 dark:text-gray-100' }}  w-full flex items-baseline px-4 py-3 bg-gray-100 dark:bg-gray-800   hover:bg-indigo-800 hover:text-gray-100">

            <i class="ri-home-2-line mr-3 text-lg hover:text-gray-100"></i>
            <span class="text-md ml-2">Dashboard</span>
        </a>

        </div>
        <div x-data="{ open: true }">
            <div @click="open = !open" class="flex items-center justify-between bg-gray-100 dark:bg-gray-800  p-4">
                <p class=" font-bold">Inbox</p>
                <span :class="open ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas"></span>
            </div>
            <div x-show.transition.in.duration.800ms="open" class="">
                <a href="{{ route('permohonan') }}"
                    class="{{ request()->routeIs('permohonan') ? 'text-gray-950 font-bold dark:text-red-100 border-l-8 border-indigo-800'  : ' text-gray-950 dark:text-gray-100' }}  w-full flex items-baseline px-4 py-3 bg-gray-100 dark:bg-gray-800   hover:bg-indigo-800 hover:text-gray-100">

                    <i class=" fa-regular fa-file-lines fa-lg "></i>
                    <span class="text-md ml-2">Permohonan</span>
                </a>


            </div>
        </div>
        @role('super-admin')
            <div x-data="{ open: true }">
                <div @click="open = !open" class="flex items-center justify-between bg-gray-100 dark:bg-gray-800  p-4">
                    <p class=" font-bold">Employee Administration</p>
                    <span :class="open ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas"></span>
                </div>
                <div x-show.transition.in.duration.800ms="open" class="">
                    <a href="{{ route('user-resource') }}"
                        class="{{ request()->routeIs('user-resource') ? 'text-gray-950 font-bold dark:text-red-100 border-l-8 border-indigo-800'  : ' text-gray-950 dark:text-gray-100' }}  w-full flex items-baseline px-4 py-3 bg-gray-100 dark:bg-gray-800   hover:bg-indigo-800 hover:text-gray-100">

                        <i class="fa-regular fa-file-lines fa-lg"></i>
                        <span class="text-md ml-2">Users</span>
                    </a>
                </div>
            </div>
        @endrole
    </div>



</div>
