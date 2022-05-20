<div>
    <div>
        <x-button.primary type="button" wire:click="$toggle('showModal')">Open Modal</x-button.primary>
    </div>

    <div>
        <form wire:submit.prevent="save">
            <x-modal.dialog id="{{now()}}" size="lg" wire:model="showModal">
                <x-slot name="title">
                    <h1 class="text-3xl">Create Title</h1>
                    <x-modal.close wire:click="$set('showModal', false)}}" />
                </x-slot>

                <x-slot name="content">
                    <div class="space-y-3">
                        <x-input.group label="Title:" for="title">
                            <x-input.text :error="$errors->first('title')" type="text" id="title" wire:model="title" placeholder="Create Title Name" />
                        </x-input.group>
                        <x-input.group label="Description:" for="description">
                            <x-input.textarea rows="4" :error="$errors->first('description')" id="description" wire:model="description" placeholder="Add Description" />
                        </x-input.group>
                        <x-input.group label="Link" for="link">
                            <x-input.text :error="$errors->first('link')" type="text" id="link" wire:model="link" placeholder="https://" />
                        </x-input.group>

                        @if($featured_image)
                        <x-input.file-preview src="{{$featured_image->temporaryUrl()}}" alt="{{$title}}" id="image" />
                        @endif

                        <x-input.group label="" for="featured_image">
                            <x-input.file :error="$errors->first('featured_image')" wire:model="featured_image" id="featured_image" class="filestyle w-96" data-input="false" data-classIcon="icon-plus" data-buttonText="Add Image" />
                        </x-input.group>
                    </div>
                </x-slot>

                <x-slot name="footer">
                    <x-button.primary type="submit">Create Title</x-button.primary>
                    <x-button.secondary type="button" wire:click="$set('showModal', false)">Cancel</x-button.secondary>
                </x-slot>
            </x-modal.dialog>
        </form>
    </div>
</div>