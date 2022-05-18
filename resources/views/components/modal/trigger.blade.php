@props([
    'class' => '',
    'title'
])
<div>
<button
x-data
x-on:click="$dispatch('showmodal')"
{{$attributes->merge(['class' => $class])}}> {{$title ?? $slot}}</button>
</div>

