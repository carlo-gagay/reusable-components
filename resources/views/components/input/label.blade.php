@props(['label', 'id' => ''])

<label for="@if($id){{$id}}@endif" class="capitalize block mt-2 mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
    {{$label ?? $slot}}
</label>