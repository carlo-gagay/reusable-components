@props(['size' => 'text-xl'])
<div class="">
    <div class="flex justify-start gap-4">
        <h1 class="font-semibold {{$size}} text-gray-800 leading-tight">
            {{$slot}}
        </h1>
    </div>
</div>