<div>
  <x-jet-button wire:click="showModal">Create New Page</x-jet-button>


  <x-jet-confirmation-modal wire:model="openFormModal">
    <x-slot name="title">
        Delete Account
    </x-slot>

    <x-slot name="content">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="">
                <div class="px-4 py-5 bg-white sm:p-6 shadow ">
                    <div class="grid grid-cols-6 gap-6">
                        <x-jet-label class = 'block font-medium text-sm text-gray-700'>
                           Title
                        </x-jet-label>
                        <input class = 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm'>
                       
                    </div>
                </div>
    
               
            </form>
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
          Close
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-2" wire:click="deleteU" wire:loading.attr="disabled">
            Delete Account
        </x-jet-danger-button>
    </x-slot>
</x-jet-confirmation-modal>

</div>