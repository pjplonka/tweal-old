<div class="form-group">
    <label for="{{ $id }}">{{ $label }}</label>
    <input type="{{ $type ?? 'text' }}" class="form-control" id="{{ $id }}" name="{{ $id }}" value="{{ $value }}">
    @if ($errors->has($id))
        <div class="errors">
            {{ $errors->first($id) }}
        </div>
    @endif
    @if (isset($hint))
        <small class="form-text text-muted">{{ $hint }}</small>
    @endif
</div>
