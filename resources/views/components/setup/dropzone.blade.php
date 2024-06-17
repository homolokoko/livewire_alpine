@props(['relatedId','model','multiple'=>true])
{{-- @vite(['resources/css/dropzone/dropzone.css']) --}}
<div x-data="{
    init(){
        FilePond.registerPlugin(
            FilePondPluginImagePreview,
            FilePondPluginImageExifOrientation,
            FilePondPluginFileValidateSize,
            FilePondPluginImageEdit
        );
        new FilePond.create(document.querySelector('input[type=file]'));
    }
}" class="">
    <input
    type="file" 
    class="filepond"
    name="filepond" 
    multiple 
    data-allow-reorder="true"
    data-max-file-size="3MB"
    data-max-files="3"/>
</div>

{{-- @vite(['resources/css/dropzone/dropzone.js']) --}}
