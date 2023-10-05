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
            <div @click="open = !open" class="flex items-center justify-between bg-gray-400 border p-4">
                <p>SPPT</p>
                <span :class="open ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas"></span>
            </div>
            <div x-show.transition.in.duration.800ms="open" class="border">
                <a href="{{ route('permohonan') }}" class="w-full flex p-4 bg-slate-100">
                        Permohonan
                 </a>
                {{-- <x-menu.dropdown-menu route="permohonan" title="Permohonan" /> --}}
            </div>
            <div x-show.transition.in.duration.800ms="open" class="border p-4">
                Inbox
            </div>
        </div>
        <div x-data="{ open: false }">
          <div @click="open = !open" class="flex items-center justify-between bg-gray-200 border p-4">
            <p>Container 2</p>
            <span :class="open ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas"></span>
          </div>
            <div x-show.transition.in.duration.800ms="open" class="border p-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius vel magna lacinia mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula neque, imperdiet nec est laoreet, pulvinar commodo odio. Vivamus eget eleifend libero. Fusce dolor nibh, porta eu gravida ut, maximus non erat.
          </div>
        </div>
        <div x-data="{ open: false }">
          <div @click="open = !open" class="flex items-center justify-between bg-gray-200 border p-4">
            <p>Container 3</p>
            <span :class="open ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas"></span>
          </div>
          <div x-show.transition.in.duration.800ms="open" class="border p-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius vel magna lacinia mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula neque, imperdiet nec est laoreet, pulvinar commodo odio. Vivamus eget eleifend libero. Fusce dolor nibh, porta eu gravida ut, maximus non erat.
          </div>
        </div>
        <a href="https://davidgrzyb.com/accordion-with-alpine-js-tailwind" class="mt-12 underline">How to Build an Alpine js Accordion</a>
      </div>
    {{-- Because she competes with no one, no one can compete with her. --}}
</div>
