<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  <x-jet-button wire:click="showModal">Create New Page</x-jet-button>
        </div>
        

<!-- component -->
<div class="table w-full p-2">
        <table class="w-full border">
            <thead>
                <tr class="bg-gray-50 border-b">
                    <th class="border-r p-2">
                        <input type="checkbox">
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            ID
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Name
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                             Action
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                 
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-50 text-center">
                    <td class="p-2 border-r">
                        
                    </td>
                    <td class="p-2 border-r">
                        <input type="text" class="border p-1">
                    </td>
                    <td class="p-2 border-r">
                        <input type="text" class="border p-1">
                    </td>
                    <td class="p-2 border-r">
                        <input type="text" class="border p-1">
                    </td>
                    <td class="p-2 border-r">
                        <input type="text" class="border p-1">
                    </td>
                    <td class="p-2">
                        <input type="text" class="border p-1">
                    </td>
                    
                    
                </tr>
                @foreach($pages as $page)
                <tr  class="bg-gray-100 text-center border-b text-sm text-gray-600">
                    <td class="p-2 border-r">
                        <input type="checkbox">
                    </td>
                    <td class="p-2 border-r">{{ $page->title }}</td>
                    <td class="p-2 border-r">{{ $page->title }}</td>
            
                    <td>
                        <button  class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin" wire:click="edit({{ $page->id }})" >Edit</button>
                        <button class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin" wire:click="delete({{ $page->id }})">Delete</button>
                    </td>
                </tr>
                @endforeach
             
               
             
              
            </tbody>
        </table>
    </div>

        <x-jet-modal  wire:model="openFormModal">
            <div class="px-6 py-4">
                <div class="text-lg">
                 Title
                </div>
        
                <div class="mt-8">
                    <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">Title</label>
                        <input type="text" class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded"  wire:model="title" placeholder="Title" />
                      </div>
                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2"  for="name">Content</label>
                        <input type="text" class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded"  wire:model="content" placeholder="Content" />
                      </div>
                      <div class="mb-6">
                        <x-jet-button wire:click="store">Add</x-jet-button>
                      </div>
               
                </div>
            </div>
        
            <div class="px-6 py-4 bg-gray-100 text-right">
                <x-jet-button wire:click="closeModal">Close</x-jet-button>
            </div>
        </x-jet-modal>
        

</div>
</div>