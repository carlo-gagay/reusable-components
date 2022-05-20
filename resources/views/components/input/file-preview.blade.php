<x-input.group label="Cover Image:" for="">
    <div class="md:w-11/12 md:flex-grow" x-data="{el:'', viewer:''}" x-init="
        el = document.getElementById('image');
        viewer = new Viewer(image, {
            title: [4, (image, imageData) => `${image.alt} (${imageData.naturalWidth} × ${imageData.naturalHeight})`]
        });
    " class="z-[1000]">
        <img {{$attributes}} class="w-full md:w-auto border h-80 object-cover object-center rounded p-3"  />
    </div>
</x-input.group>


