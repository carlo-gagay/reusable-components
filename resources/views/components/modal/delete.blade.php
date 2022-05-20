
<div x-data="{open: @entangle($attributes->wire('model'))}" @notify="open=false">
    <div @click.self="open=false" x-show="open" style="display: none;" id="popup-modal" tabindex="-1" class="z-[100000] fixed overflow-y-auto overflow-x-hidden top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
        <div x-transition class="max-w-sm m-auto top-1/3 relative bg-white opacity-100 rounded-lg shadow dark:bg-gray-700">
            <button @click="open=false" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="p-6 text-center">
                <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                    Are you sure you want to delete?
                </h3>
                <div class="flex justify-center">
                    <x-button.danger type="button">Yes, delete</x-button.danger>
                    <x-button.secondary x-on:click="open=false" type="button">Cancel</x-button.secondary>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- fixed overflow-y-auto overflow-x-hidden top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full -->

<!-- fixed inset-0 bg-gray-500 bg-opacity-60 transition-opacity -->