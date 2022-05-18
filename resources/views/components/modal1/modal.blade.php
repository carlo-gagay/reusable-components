<div x-data="{open: false}" x-on:closemodal.window="open=false;">
    <div @click="open=true">
        {{$trigger}}
    </div>

    <div x-show="open" style="display: none;" x-transition tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">

        <div class="fixed inset-0 bg-gray-500 bg-opacity-60 transition-opacity"></div>

        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end sm:items-center justify-center min-h-full p-4 sm:p-0">

                <div>
                    <div @click.self="open=false" tabindex="-1" aria-hidden="false" class="transition-opacity duration-500 ease-out opacity-100 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                        <div @click.self="open=false" class="relative p-4 m-auto w-full h-full md:h-auto max-w-xl">
                            <!-- Modal content -->
                            <div class="border relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div>
                                    {{$header}}
                                </div>
                                <div>
                                    {{$slot}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>