<div class="mb-3">
    <div class="form-label">{{ $label }}</div>
    <label for="{{ $name }}" class="form-check form-switch">
        <input
            type="checkbox"
            class="form-check-input"
            name="{{ $name }}"
            @checked($checked)
        />
        <span class="form-check-label"></span>
    </label>
</div>
