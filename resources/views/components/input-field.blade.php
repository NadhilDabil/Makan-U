<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{ ucwords(str_replace('_', ' ', $label)) }}</label>
    <input type="{{ $type }}" class="form-control w-100 input__form" id="{{ $id }}"
        name="{{ $name }}" placeholder="{{ $placeholder }}">
</div>
