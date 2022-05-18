@props([
'type'=>'',
'id'=>'',
'name'=>'',
'placeholder'=>'',
'required'=>false
])

<div>
    <div class="flex flex-inline align-center">
        <input {{
                $attributes->merge([
                    'wire:model.lazy' => $name,
                    'type' => $type,
                    'name' => $name,
                    'id' => $id,
                    'placeholder' => $placeholder,
                    'required' => $required
                ]);
            }} class="@error($name) border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
        <span>
            <!-- <i class="fa fa-check absolute float-right"></i> -->
        </span>
    </div>
    @error($name)
    <p class="text-red-500 text-xs italic">{{$message}}</p>
    @enderror
</div>