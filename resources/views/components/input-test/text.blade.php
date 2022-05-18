@props([
    'error'
])
<div class="md:w-11/12 md:flex-grow">
    <input {{$attributes}} class="w-full h-10 px-3 @if($error) border-red-500 @endif border-gray-300 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" />
    @if($error) <p class="text-red-500 text-xs italic">{{$error}}</p> @endif
</div>