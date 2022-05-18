@props(['id', 'size'])

@php
$id = $id ?? md5($attributes->wire('model'));

@endphp

<div x-data="{show: @entangle($attributes->wire('model'))}">

    <div x-show="show" style="display: none;" tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden py-8 fixed top-0 right-0 left-0 z-50 w-full inset-0 md:inset-0 h-modal md:h-full">

        <div @click.self="show=false" class="fixed inset-0 bg-gray-500 bg-opacity-60 transition-opacity"></div>

        <div x-transition:leave="transition ease-in duration-300" x-transition.delay.100ms class="border relative overflow-y-hidden bg-white w-11/12 md:max-w-xl m-auto md:mt-3 rounded-lg shadow dark:bg-gray-700">
            {{$slot}}
        </div>


    </div>
</div>

<!-- <div class="fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-end sm:items-center min-w-full justify-center min-h-full p-4 sm:p-0">

        <div class="w-full">
            <div @click.self="show=false" tabindex="-1" aria-hidden="false" class="transition-opacity duration-500 ease-out opacity-100 overflow-y-auto overflow-x-hidden md:fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                <div @click.self="show=false" class="relative p-4 m-auto w-full h-full md:h-auto max-w-xl">
                    modal content
                    <div class="border relative bg-white rounded-lg shadow dark:bg-gray-700">
                        {{$slot}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->