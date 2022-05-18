
@props([
    'error'
])
<div class="md:w-11/12 md:flex-grow">
    <input class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 @if($error) border-red-500 @endif rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" {{$attributes}}>
    @if($error) <p class="text-red-500 text-xs italic">{{$error}}</p> @endif
</div>





