<div wire:key="{{microtime(true)}}">
    <div class="w-full">

        <x-page-title size="text-3xl justify-center md:justify-start">Titles</x-page-title>

        <div class="py-8 w-full">

            <div class="flex" wire:key="{{microtime(true)}}">
                <livewire:create-title />
            </div>
            <div class="h-full w-full mt-4">
                <x-table.table>
                    <x-slot name="thead">
                        <tr>
                            <x-table.th>
                                ID
                            </x-table.th>
                            <x-table.th>
                                Image
                            </x-table.th>
                            <x-table.th>
                                Title
                            </x-table.th>
                            <x-table.th>
                                Description
                            </x-table.th>
                            <x-table.th>
                                Date created
                            </x-table.th>
                            <x-table.th>

                            </x-table.th>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach($titles as $title)
                        <tr>
                            <x-table.td highlight="true">{{$title->id}}</x-table.td>
                            <x-table.td>
                                <!-- <img src="{{asset('storage/images/'.$title->featured_image_link)}}" alt=""> -->
                            </x-table.td>
                            <x-table.td>{{$title->title}}</x-table.td>
                            <x-table.td>{{$title->description}}</x-table.td>
                            <x-table.td>{{$title->created_at}}</x-table.td>
                            <x-table.td>
                                <div>
                                    <a class="cursor-pointer text-sm">
                                        <x-icons.edit class="h-6 w-6 text-orange-500" wire:click="edit({{$title->id}})" />
                                    </a>
                                    <a class="cursor-pointer">
                                        <x-icons.trash class="h-5 w-5 text-red-500" wire:click="$toggle('showDeleteModal')" />
                                    </a>
                                </div>
                            </x-table.td>
                        </tr>
                        @endforeach
                    </x-slot>
                </x-table.table>

                <div class="flex justify-start mt-8 w-full">
                    {{$titles->links()}}
                </div>
            </div>
        </div>
    </div>
    <div>
        <form wire:submit.prevent="save">
            <x-modal.dialog id="{{microtime(true)}}" wire:model="showUpdateModal">
                <x-slot name="title">
                    <h1 class="text-3xl">Edit Title</h1>
                    <x-modal.close wire:click="$set('showUpdateModal', false)" />
                </x-slot>
                <x-slot name="content">
                    <div class="space-y-3">
                        <x-input.group label="Title" for="title">
                            <x-input.text :error="$errors->first('editing.title')" wire:model="editing.title" id="title" placeholder="New Title" />
                        </x-input.group>
                        <x-input.group label="Description" for="description">
                            <x-input.textarea rows="4" :error="$errors->first('editing.description')" wire:model="editing.description" id="description" placeholder="New Description" />
                        </x-input.group>
                        <x-input.group label="Link" for="link">
                            <x-input.text :error="$errors->first('editing.link')" wire:model="editing.link" id="link" placeholder="New Link" />
                        </x-input.group>

                        <x-input.group label="" for="featured_image">
                            <x-input.file :error="$errors->first('editing.featured_image')" wire:model="editing.featured_image" id="featured_image" class="filestyle w-96" data-input="false" data-classIcon="icon-plus" data-buttonText="Replace Image" />
                        </x-input.group>
                    </div>
                </x-slot>
                <x-slot name="footer">
                    <x-button.primary type="submit">Save Changes</x-button.primary>
                    <x-button.secondary type="button" wire:click="$set('showUpdateModal', false)">Cancel</x-button.secondary>
                </x-slot>
            </x-modal.dialog>
        </form>
    </div>

    <div>
        <x-modal.delete wire:model="showDeleteModal" />
    </div>

</div>