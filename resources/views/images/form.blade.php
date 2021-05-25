@if (!isset($edit))
    @include('common.input-text', ['type' => 'file', 'id' => 'image', 'label' => 'Image', 'value' => ''])
@endif

@include('common.input-text', ['id' => 'filename', 'label' => 'Image filename', 'value' => old('filename') ?: $image->filename])


