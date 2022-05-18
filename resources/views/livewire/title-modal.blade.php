<div>
    <x-modal.modal width="max-w-2xl">

        <form wire:submit.prevent="save">
            <x-modal.header>
                Create Comic Title
            </x-modal.header>
            <x-modal.body>

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
            </x-modal.body>
            <x-modal.footer class="justify-end">
                <x-input.submit type="submit">Create Title</x-input.submit>
                <x-input.submit type="button" @click="$dispatch('closemodal')" class="bg-orange-500 hover:bg-orange-600">Cancel</x-input.submit>
            </x-modal.footer>
        </form>
    </x-modal.modal>
</div>

@push('scripts')
<script>
    // const image = document.getElementById('image');

    // const viewer = new Viewer(image, {
    //     title: [4, (image, imageData) => `${image.alt} (${imageData.naturalWidth} × ${imageData.naturalHeight})`]
    // });
</script>
@endpush