<div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Permohonan') }}
            </h2>
        </x-slot>

                <div class="bg-gray-200 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-8">
                    <form wire:submit="create">
                        {{ $this->form }}

                        <button type="submit">
                            Submit
                        </button>
                    </form>
                </div>

                <x-filament-actions::modals />
 </div>
