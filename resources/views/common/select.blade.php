<div class="form-group">
    <label for="{{ $id }}">{{ $label }}</label>
    <select class="form-control" id="{{ $id }}" name="{{ $id }}">
        @if (isset($default))
            <option value="">Select a company</option>
        @endif
        @foreach($companies as $company)
            <option value="{{ $company->id }}"
                    {{ $value == $company->id ? 'selected' : '' }}
            >{{ $company->name }}</option>
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
