<div>

    <x-jet-button wire:click="showModal">Create Category</x-jet-button>
    <x-jet-modal  wire:model="openFormModal">
        <div class="px-6 py-4">
            <div class="text-lg">
             Title
            </div>

            <div class="mt-4">
              Title
            </div>
        </div>

        <div class="px-6 py-4 bg-gray-100 text-right">
           Footer
        </div>
    </x-jet-modal>



</div>
