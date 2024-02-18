<div wire:ignore>
    <div id="{{ $quillId }}"></div>
</div>

@script
<script>
   const quill = new Quill('#' + @js($quillId), {
        theme: @js($theme),
        modules: {
        toolbar: [
        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
        ['blockquote', 'code-block'],

        [{ 'header': 1 }, { 'header': 2 }], // custom button values
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'script': 'sub'}, { 'script': 'super' }], // superscript/subscript
        [{ 'indent': '-1'}, { 'indent': '+1' }], // outdent/indent
        [{ 'direction': 'rtl' }], // text direction

        [{ 'size': ['small', false, 'large', 'huge'] }], // custom dropdown
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

        [{ 'color': [] }, { 'background': [] }], // dropdown with defaults from theme
        [{ 'font': [] }],
        [{ 'align': [] }],

        ['clean'] // remove formatting button
        ]
        }
    });
    quill.root.innerHTML = $wire.get('value');
    quill.on('text-change', function () {
        let value = document.getElementsByClassName('ql-editor')[0].innerHTML;
        @this.set('value', value)
    })
</script>
@endscript
