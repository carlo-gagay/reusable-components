<!-- <div class="text-center mt-4 border">
    <p>
        <small class="text-slate-300">
            {{$slot}}
        </small>
    </p>
</div> -->

@props(['class' => ''])

<div {{$attributes->merge(['class' => 'mt-6 flex items-center py-3 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600 '.$class])}}>
    {{$slot}}
</div>