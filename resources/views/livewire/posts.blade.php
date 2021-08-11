<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <x-jet-button wire:click="showModal">Create New Post</x-jet-button>
        </div>
    </div>
    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
          <div class="w-full overflow-x-auto">
            <table class="w-full">
              <thead>
                <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                  <th class="px-4 py-3">Title</th>
                  <th class="px-4 py-3">Author</th>
                  <th class="px-4 py-3">Status</th>
                  <th class="px-4 py-3">Date</th>
                </tr>
              </thead>
              <tbody class="bg-white">
                  @foreach($posts as $post)
                <tr class="text-gray-700">
                  <td class="px-4 py-3 border">
                    <div class="flex items-center text-sm">
                      <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                        <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                      </div>
                      <div>
                        <p class="font-semibold text-black">Sufyan</p>
                        <p class="text-xs text-gray-600">Developer</p>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-3 text-ms font-semibold border">{{ $post->title }}</td>
                  <td class="px-4 py-3 text-xs border">
                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> {{ $post->category_id }}</span>
                  </td>
                  <td class="px-4 py-3 text-sm border">{{ $post->content }}</td>
                  <td class="px-4 py-3 text-sm border" ><x-jet-button wire:click="showMessageDialog">Delete</x-jet-button></td>
                </tr>
                <x-jet-modal  wire:model="popUpMessage">
                    <div class="px-6 py-4">
                        <div class="text-lg">

                            Are You Shure To Delete This Record?
                        </div>
                        <div class="text-lg">

                        </div>
                        <div class="text-lg">

                            <x-jet-button wire:click="delete({{ $post->id }})">Yes</x-jet-button>
                            <x-jet-button wire:click="closeModal()">No</x-jet-button>
                        </div>
                    </div>

                </x-jet-modal>
                @endforeach


              </tbody>
            </table>
          </div>
        </div>
      </section>
      <x-jet-modal  wire:model="openFormModal">
        <div class="px-6 py-4">
            <div class="text-lg">

            </div>


                <div class="mt-8">
                    <form wire:submit.prevent="store" enctype="multipart/form-data">
                       @csrf
                    <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">Title</label>
                        <input type="text" class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded"  wire:model="title" placeholder="Title" />
                      </div>
                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2"  for="name">Content</label>
                        <input type="text" class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded"  wire:model="content" placeholder="Content" />
                      </div>
                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2"  for="name">Category</label>
                        <input type="text" class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded"  wire:model="category_id" placeholder="Content" />
                      </div>
                      <div class="mb-6">
                        <label class="mr-4 text-gray-700 font-bold inline-block mb-2"  for="name">Image</label>
                        <input type="file" class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-indigo-400 rounded"  placeholder="" wire:model="image"/>
                      </div>
                      <div class="mb-6">
                        <x-jet-button >Add</x-jet-button>
                      </div>
                    </form>

                </div>




        </div>

        <div class="px-6 py-4 bg-gray-100 text-right">
            <x-jet-button wire:click="closeModal">Close</x-jet-button>
        </div>
    </x-jet-modal>


</div>
