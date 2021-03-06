<div class="row">

    <div class="col-lg-9">
        @include('common.input-text', ['id' => 'title', 'label' => 'Article title', 'value' => old('title') ?: $article->title])

        @if (isset($edit))
            @include('common.input-text', ['id' => 'slug', 'label' => 'Article slug', 'value' => old('slug') ?: $article->slug])
        @endif

        @include('common.redactor', ['id' => 'content', 'value' => old('content') ?: $article->content, 'placeholder' => 'Write your article content here...'])
    </div>

    <div class="col-lg-3">
        @include('common.select', [
            'id' => 'category_id',
            'label' => 'Category',
            'value' => old('category_id') ?: $article->category_id,
            'default' => 'Select category',
            'hint' => 'Category name.',
            'options' => $categories->map(function($category) {
                return [
                    'value' => $category->id,
                     'label' => $category->name,
                ];
            })
        ])

        @include('common.select', [
            'id' => 'image_id',
            'label' => 'Image',
            'value' => old('image_id') ?: $article->image_id,
            'default' => 'Select image',
            'hint' => 'Feature image for article.',
            'options' => $images->map(function($image) {
                return [
                    'value' => $image->id,
                    'label' => $image->full_name,
                ];
            })
        ])
    </div>
</div>
