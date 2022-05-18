@extends('layouts.app')
@section('content')
<div>
    <div class="w-full">

        <x-page-title size="text-3xl justify-center md:justify-start">Dashboard</x-page-title>

        <div class="py-8 w-full">

            <div class="flex">
                <livewire:create-title wire:key="{{now()}}" />
            </div>
            <div class="h-full w-full mt-4">

                @if(count($titles))

                <div>
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
                                <x-table.td></x-table.td>
                                <x-table.td>{{$title->title}}</x-table.td>
                                <x-table.td>{{$title->description}}</x-table.td>
                                <x-table.td>{{$title->created_at}}</x-table.td>
                                <x-table.td>
                                    <div>
                                        <a class="cursor-pointer text-sm">
                                            <i class="fa fa-edit text-orange-400"></i>
                                        </a>
                                        <a class="cursor-pointer">
                                            <livewire:delete :model_id="$title->id" class_name="TempTitle" :wire:key="'delete_id'.$title->id" />
                                        </a>
                                    </div>
                                </x-table.td>
                            </tr>
                            @endforeach
                        </x-slot>
                    </x-table.table>

                    <div class="flex justify-start border-4 mt-8 w-full">
                        {{$titles->links()}}
                    </div>

                </div>

                @endif

            </div>
        </div>
    </div>
</div>
@endsection