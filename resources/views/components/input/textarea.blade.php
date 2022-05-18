@props([
'id'=>'',
'name'=>'',
'placeholder'=>'',
'required'=>false,
'cols' => '',
'rows' => ''
])

<div>
    <textarea {{
            $attributes->merge([
                'wire:model.lazy' => $name,
                'name' => $name,
                'id' => $id,
                'placeholder' => $placeholder,
                'required' => $required,
                'cols' => $cols,
                'rows' => $rows
            ]);
        }} class="@error($name) border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
        {{$placeholder ?? 'Type your message here...'}}
    </textarea>
    @error($name)
    <p class="text-red-500 text-xs italic">{{$message}}</p>
    @enderror
</div>