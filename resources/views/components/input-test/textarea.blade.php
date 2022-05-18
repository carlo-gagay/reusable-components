@props([
    'error',
])
<div class="md:w-11/12 md:flex-grow">
    <textarea {{$attributes}} class="w-full py-3 px-3 @if($error) border-red-500 @endif text-base placeholder-gray-600 border-gray-300 rounded-lg focus:shadow-outline">{{$attributes['placeholder']}}</textarea>
    @if($error) <p class="text-red-500 text-xs italic">{{$error}}</p> @endif
</div>