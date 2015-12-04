<script>
    var Asgard = {
        backendUrl: '{{ config('asgard.core.core.admin-prefix') }}',
        mediaGridCkEditor : '{{ route('media.grid.ckeditor') }}',
        dropzonePostUrl: '{{ route('api.media.store') }}'
    };
</script>
