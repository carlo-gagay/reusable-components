<div x-data="{open: false, hideable: false }" 
@showmodal.window="open=true" 
@closemodal.window="open=false"
class="overflow-y-scroll">
    <div>
        <div style="display: none;" x-show="open" x-transition class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

            <div class="fixed z-10 inset-0 overflow-y-auto">
                <div class="flex items-end sm:items-center justify-center min-h-full p-4 sm:p-0">

                    <div>
                        <div tabindex="-1" aria-hidden="false" class="transition-opacity duration-500 ease-out opacity-100 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                            <div class="relative p-4 m-auto w-full h-full md:h-auto max-w-xl">
                                <div 
                                class="relative bg-white rounded-lg shadow dark:bg-gray-700"
                                x-transition.duration.1000ms>
                                    <x-modal.close>
                                    </x-modal.close>
                                    <div class="py-6 px-6 lg:px-8">

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
</div>