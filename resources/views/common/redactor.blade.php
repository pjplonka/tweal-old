<div class="form-group">
    <textarea class="redactor" id="{{ $id }}" name="{{ $id }}">{{ $value }}</textarea>
    @if ($errors->has($id))
        <div class="errors">
            {{ $errors->first($id) }}
        </div>
    @endif
    @if (isset($hint))
        <small class="form-text text-muted">{{ $hint }}</small>
    @endif
</div>
