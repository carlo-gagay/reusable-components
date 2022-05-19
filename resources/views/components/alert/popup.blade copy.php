@props(['class' => ''])

<div x-data="{open: false, type: '', message: ''}" x-on:notify.window="
    type = $event.detail.type;
    message = $event.detail.message;
    open=true;
    setTimeout(() => {open=false}, 6000);
"
{{$attributes->merge(['class' => 'fixed z-[100000] w-80 md:w-96 left-1/2 transform -translate-x-1/2 -translate-y-1/2 '.$class])}}>
    <div class="m-auto" x-show="open" x-transition:leave.duration.1000ms style="display: none;">
        <template x-if="type === 'success'">
            <div class="bg-green-100 shadow-sm rounded-lg border-green-300 border p-3 shadow-lg">
                <div class="flex flex-row">
                    <div class="px-2">
                        <i class="text-green-600 fa fa-check-circle"></i>
                    </div>
                    <div class="ml-2 mr-6">
                        <span class="font-semibold text-green-900 capitalize" x-text="type"></span>
                        <span x-text="message" class="block text-gray-500">
                            Text will be here...
                        </span>
                    </div>
                    <span x-on:click="open=false" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
            </div>
        </template>
        <template x-if="type === 'info'">
            <div class="bg-blue-200 rounded-lg border-blue-300 border p-3 shadow-lg">
                <div class="flex flex-row">
                    <div class="px-2">
                        <i class="text-blue-600 fa fa-exclamation-circle"></i>
                    </div>
                    <div class="ml-2 mr-6">
                        <span class="font-semibold text-blue-900 capitalize" x-text="type"></span>
                        <span x-text="message" class="block text-gray-500">
                            Text will be here...
                        </span>
                    </div>
                    <span x-on:click="open=false" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
            </div>
        </template>
        <template x-if="type === 'warning'">
            <div class="bg-orange-200 rounded-lg border-orange-300 border p-3 shadow-lg">
                <div class="flex flex-row">
                    <div class="px-2">
                        <i class="text-orange-600 fa fa-exclamation-circle"></i>
                    </div>
                    <div class="ml-2 mr-6">
                        <span class="font-semibold text-orange-700 capitalize" x-text="type + '!'"></span>
                        <span x-text="message" class="block text-gray-700">
                            Text will be here...
                        </span>
                    </div>
                    <span x-on:click="open=false" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
            </div>
        </template>
        <template x-if="type === 'error'">
            <div class="bg-red-200 rounded-lg border-red-300 border p-3 shadow-lg">
                <div class="flex flex-row">
                    <div class="px-2">
                        <i class="fa fa-exclamation-triangle text-red-600"></i>
                    </div>
                    <div class="ml-2 mr-6">
                        <span class="font-semibold text-red-900 capitalize" x-text="type + '!'"></span>
                        <span x-text="message" class="block text-gray-500">
                            Text will be here...
                        </span>
                    </div>
                    <span x-on:click="open=false" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
            </div>
        </template>
    </div>
</div>