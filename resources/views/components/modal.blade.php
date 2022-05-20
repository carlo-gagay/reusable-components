@props(['id', 'size' => false])

@php
$id = md5($attributes->wire('model'));
@endphp

@switch($size)
    @case('sm') 
        $size = 'md:max-w-sm'
        @break
    @case('md')
        $size = 'md:max-w-md'
        @break
@endswitch

<div x-data="{show: @entangle($attributes->wire('model'))}" x-transition>

    <div x-show="show" style="display: none;" tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden py-8 fixed top-0 right-0 left-0 z-50 w-full inset-0 md:inset-0 h-modal md:h-full">

        <div x-on:click.self="show=false" class="fixed inset-0 bg-gray-500 bg-opacity-60 transition-opacity"></div>

        <div 
        x-transition      
        class="border relative overflow-y-hidden bg-white w-11/12 md:max-w-xl m-auto md:mt-3 rounded-lg shadow dark:bg-gray-700">
            {{$slot}}
        </div>


    </div>
</div>