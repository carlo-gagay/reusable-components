@props(['id' => null, 'maxWidth' => null])


<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4">
        <div class="pb-5 flex justify-between items-start rounded-t border-b dark:border-gray-600">
            {{$title}}
        </div>

        <div class="mt-4">
            {{ $content }}
        </div>
    </div>

    <div class="px-6 py-4 bg-gray-100 text-right">
        {{ $footer }}
    </div>
</x-modal>