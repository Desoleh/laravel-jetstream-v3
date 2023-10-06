<div>
    {{-- <div x-data="{open:true}" class=" w-70 mx-auto bg-red-50 mt-16">
        <div class="flex justify-between items-center bg-red-200">
            <p class="px-4">Accordion 1</p>
            <button @click="open=!open" x-html="open ? '-' :'+' " class="px-2 text-black hover:text-gray-500 font-bold text-3xl"></button>
        </div>
        <div x-show="open" x-cloak  class="mx-4 py-4" x-transition>
            <a href="/permohonan" wire:navigate>permohonan</a>
        </div>
        <hr class="h-[0.1rem] bg-slate-500">
    </div> --}}

    <div class="flex flex-col">
        <div x-data="{ open: true }">
            <div @click="open = !open" class="flex items-center justify-between bg-gray-100 border p-4">
                <p class=" font-bold">Inbox</p>
                <span :class="open ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas"></span>
            </div>
            <div x-show.transition.in.duration.800ms="open" class="border">
                <a href="{{ route('permohonan') }}"
                    class="{{ request()->routeIs('permohonan') ? 'text-gray-950 font-bold dark:text-red-100 border-l-8 border-indigo-800'  : 'text-gray-950 dark:text-gray-100' }}  w-full flex items-baseline px-4 py-3 bg-gray-100  hover:bg-gray-950 hover:text-gray-100">

                    <i class="{{ request()->routeIs('permohonan') ? 'text-indigo-800  dark:text-red-100 '  : 'text-gray-950 dark:text-gray-100' }} fa-regular fa-file-lines fa-lg"></i>
                    <span class="text-md ml-2 ">Permohonan</span>
                 </a>

                 <a href="{{ route('user-resource') }}"
                 class="{{ request()->routeIs('user-resource') ? 'text-gray-950 font-bold dark:text-red-100 border-l-8 border-indigo-800'  : 'text-gray-950 dark:text-gray-100' }}  w-full flex items-baseline px-4 py-3 bg-gray-100  hover:bg-gray-950 hover:text-gray-100">

                 <i class="{{ request()->routeIs('user-resource') ? 'text-indigo-800  dark:text-red-100 '  : 'text-gray-950 dark:text-gray-100 ml-2' }} fa-regular fa-file-lines fa-lg"></i>
                 <span class="text-md ml-2 ">Users</span>
                 </a>

            </div>
        </div>
        <a href="https://davidgrzyb.com/accordion-with-alpine-js-tailwind" class="mt-12 underline">How to Build an Alpine js Accordion</a>
      </div>

      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
        @else
            <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
            <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
            {{-- <li><a class="nav-link" href="{{ route('products.index') }}">Manage Product</a></li> --}}
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>


                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>

</div>
