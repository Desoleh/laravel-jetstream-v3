<div>
    <form wire:submit="save">
        <div class=" max-w-2xl">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <x-input label="Name" placeholder="nama" wire:model.defer="name" />
                </div>
                <div>
                    <x-input label="Email" placeholder="email" wire:model="email" />
                </div>
                <div>
                    @php
                        $roles = Spatie\Permission\Models\Role::all()->pluck('name')->toArray();
                    @endphp
                    <x-select
                        label="Select Roles"
                        placeholder="Select many roles"
                        multiselect
                        :options=$roles
                        wire:model.defer="role"
                    />
                </div>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </div>
    </form>
</div>



