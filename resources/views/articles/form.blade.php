@include('common.input-text', ['id' => 'title', 'label' => 'Article title', 'value' => old('title') ?: $article->title])

@if (isset($edit))
    @include('common.input-text', ['id' => 'slug', 'label' => 'Article slug', 'value' => old('slug') ?: $article->slug])
@endif

@include('common.select', [
    'id' => 'category_id',
    'label' => 'Category',
    'value' => old('company_id') ?: $article->category_id,
    'default' => 'Select category',
    'hint' => 'Category name.',
    'options' => $categories->map(function($category) {
        return [
            'value' => $category->id,
             'label' => $category->name,
        ];
    })
])

@include('common.redactor', ['id' => 'content', 'value' => old('content') ?: $article->content])
