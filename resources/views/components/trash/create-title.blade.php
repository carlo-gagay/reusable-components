<x-modal1.modal>
    <x-slot name="trigger">
        <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="defaultModal">
            Add Title
        </button>
    </x-slot>
    <x-slot name="header">
        <x-modal1.header>
            Create Title
        </x-modal1.header>
    </x-slot>
    <form wire:submit.prevent="save">
        <x-modal1.body>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <div>
                        <x-input.label>Title</x-input.label>
                        <x-input.input type="text" name="title" id="title" wire:key="title" placeholder="Insert title here..." />
                    </div>
                    <div>
                        <x-input.label>Short description</x-input.label>
                        <x-input.input type="text" wire:key="short_description" name="title" name="short_description" id="short_description" placeholder="Give your title a brief description..." />
                    </div>
                    <div>
                        <x-input.label>Description</x-input.label>
                        <x-input.textarea wire:key="description" rows="5" name="description" id="description" placeholder="Give your title a long description..." />
                    </div>
                </div>
                <div>
                    <div>
                        <x-input.label>
                            <span>Featured Image</span>
                            <div class="text-green-600" wire:loading wire:target="featured_image">
                                <i class="fa fa-solid text-xl fa-spinner fa-spin-pulse"></i>
                            </div>
                        </x-input.label>

                        <x-input.input wire:key="featured_image" name="featured_image" type="file" id="featured_image" placeholder="Set featured image for you comic..." />

                    </div>
                    @if($featured_image)
                    <div x-data="{el:'', viewer:''}" x-init="
                            el = document.getElementById('image');
                            viewer = new Viewer(image, {
                                title: [4, (image, imageData) => `${image.alt} (${imageData.naturalWidth} × ${imageData.naturalHeight})`]
                            });
                        " class="z-[1000]">
                        <x-input.label>Image Preview:</x-input.label>
                        <img id="image" class="cursor-pointer h-60 object-cover object-center w-full border rounded" src="{{$featured_image->temporaryUrl()}}" alt="$title">
                    </div>
                    @endif
                </div>
            </div>
        </x-modal1.body>
        <x-modal1.footer>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create New Title</button>
            <button @click="open=false" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
        </x-modal1.footer>
    </form>
</x-modal1.modal>