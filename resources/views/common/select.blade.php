<div class="form-group">
    <label for="{{ $id }}">{{ $label }}</label>
    <select class="form-control" id="{{ $id }}" name="{{ $id }}">
        @if (isset($default))
            <option value="">{{ $default }}</option>
        @endif
        @foreach($options as $option)
            <option value="{{ $option['value'] }}"
                {{ $value == $option['value'] ? 'selected' : '' }}
            >{{ $option['label'] }}</option>
        @endforeach
    </select>
    @if ($errors->has($id))
        <div class="errors">
            {{ $errors->first($id) }}
        </div>
    @endif
    @if (isset($hint))
        <small class="form-text text-muted">{{ $hint }}</small>
    @endif
</div>
