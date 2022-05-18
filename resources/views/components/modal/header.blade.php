@props(['class' => ''])

<div>
    <h3 {{$attributes->merge([
            'class' => 'mb-4 text-2xl font-medium text-gray-900 dark:text-white ' . $class
        ])}}>
        {{$slot}}
    </h3>
</div>