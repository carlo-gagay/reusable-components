<div>
    <div>
        <x-button.primary type="button" wire:click="$toggle('showModal')">Open Modal</x-button.primary>
    </div>

    <div>
        <form wire:submit.prevent="save">
            <x-modal-test.dialog id="{{now()}}" wire:model="showModal">
                <x-slot name="title">
                    <h1>Create Title</h1>
                </x-slot>

                <x-slot name="content">
                    <div class="space-y-3">
                        <x-input-test.group label="Title:" for="title">
                            <x-input-test.text :error="$errors->first('title')" type="text" id="title" wire:model="title" placeholder="Create Title Name" />
                        </x-input-test.group>
                        <x-input-test.group label="Description:" for="description">
                            <x-input-test.textarea rows="4" :error="$errors->first('description')" id="description" wire:model="description" placeholder="Add Description" />
                        </x-input-test.group>
                        <x-input-test.group label="Link" for="link">
                            <x-input-test.text :error="$errors->first('link')" type="text" id="link" wire:model="link" placeholder="https://" />
                        </x-input-test.group>

                        @if($featured_image)
                        <x-input-test.group label="Cover Image:" for="">
                            <div class="md:w-11/12 md:flex-grow" x-data="{el:'', viewer:''}"
                            x-init="
                                el = document.getElementById('image');
                                viewer = new Viewer(image, {
                                    title: [4, (image, imageData) => `${image.alt} (${imageData.naturalWidth} × ${imageData.naturalHeight})`]
                                });
                            " class="z-[1000]"
                            >
                                <img id="image" class="w-full md:w-auto border h-80 object-cover object-center rounded p-3" src="{{$featured_image->temporaryUrl()}}" alt="{{$title}}" />
                            </div>
                        </x-input-test.group>
                        @endif

                        <x-input-test.group label="" for="featured_image">
                            <x-input-test.file :error="$errors->first('featured_image')" wire:model="featured_image" id="featured_image" class="filestyle w-96" data-input="false" data-classIcon="icon-plus" data-buttonText="Add Image" />
                        </x-input-test.group>
                    </div>
                </x-slot>

                <x-slot name="footer">
                    <x-button.primary type="submit">Create Title</x-button.primary>
                    <x-button.secondary type="button" wire:click="$set('showModal', false)">Cancel</x-button.secondary>
                </x-slot>
            </x-modal-test.dialog>
        </form>
    </div>
</div>