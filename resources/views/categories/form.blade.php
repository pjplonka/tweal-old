@include('common.input-text', ['id' => 'name', 'label' => 'Category name', 'value' => old('name') ?: $category->name])

@if (isset($edit))
    @include('common.input-text', ['id' => 'slug', 'label' => 'Category slug', 'value' => old('slug') ?: $category->slug])
@endif
