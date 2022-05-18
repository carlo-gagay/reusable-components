@props([
'label',
'for'
])

<div class="text-gray-700 md:flex md:items-center">
    <div class="mb-1 md:mb-0 md:w-1/4">
        <label class="align-top" for="$for">{{$label}}</label>
    </div>
    {{$slot}}
</div>