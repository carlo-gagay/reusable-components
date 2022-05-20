<div x-data="{
        messages: [],
        remove(message) {
            this.messages = this.messages.filter(m => {return m.id != message.id});
        },
    }" 
    @notify.window="let newMsg = {id:Date.now(), status: $event.detail.status, message: $event.detail.message}; messages.push(newMsg); setTimeout(() => {remove(newMsg)}, 6000);" class="z-[100000] fixed inset-0 md:flex flex flex-col items-end md:items-center md:justify-end px-4 py-6 pointer-events-none sm:p-6 space-y-4">
    <template x-for="(message, messageIndex) in messages" :key="messageIndex" hidden>
        <div x-transition:enter="transform ease-out duration-300 transition" x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2" x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto">
            <div :class="{
                'shadow-green-300 border-green-300 border bg-green-100 shadow-lg': message.status === 'success',
                'border-orange-300 border bg-orange-100 shadow-lg': message.status === 'warning',
                'border-cyan-300 border bg-cyan-100 shadow-lg': message.status === 'info',
                'border-red-300 border bg-red-100 shadow-lg': message.status === 'danger',
                'border-slate-300 border bg-slate-100 shadow-lg': message.status === 'uknown',
            }" class="rounded-lg shadow-md overflow-hidden">
                <div class="p-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <template x-if="message.status === 'success'">
                                <x-icons.success class="h-7 w-7 text-green-600" />
                            </template>
                            <template x-if="message.status === 'info'">
                                <x-icons.info class="h-7 w-7 text-cyan-600" />
                            </template>
                            <template x-if="message.status === 'warning'">
                                <x-icons.exclamation class="h-7 w-7 text-orange-600" />
                            </template>
                            <template x-if="message.status === 'danger'">
                                <x-icons.exclamation class="h-7 w-7 text-red-600" />
                            </template>
                            <template x-if="message.status === 'unknown'">
                                <x-icons.info class="h-7 w-7 text-slate-600" />
                            </template>
                        </div>
                        <div class="ml-3 w-0 flex-1 pt-0.5">
                            <!-- <p x-text="message.message" class="align-middle text-sm leading-5 font-medium text-gray-900"></p> -->
                            <span :class="{
                                'text-green-900': message.status === 'success',
                                'text-cyan-900': message.status === 'info',
                                'text-orange-900': message.status === 'warning',
                                'text-red-900': message.status === 'danger',
                                'text-slate-900': message.status === 'uknown',
                            }" class="font-semibold capitalize" x-text="message.status + '!'"></span>
                            <span x-text="message.message" class="block text-gray-500">
                                Text will be here...
                            </span>
                        </div>
                        <div class="ml-4 flex-shrink-0 flex">
                            <button @click="remove(message)" :class="{
                                'hover:text-green-500': message.status === 'success',
                                'hover:text-orange-500': message.status === 'warning',
                                'hover:text-cyan-500': message.status === 'info',
                                'hover:text-red-500': message.status === 'danger',
                                'hover:text-slate-500': message.status === 'unknown',
                            }" class="inline-flex text-gray-400 focus:outline-none transition ease-in-out duration-150">
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
</div>