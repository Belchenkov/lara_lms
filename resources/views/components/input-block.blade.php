<div class="mb-3">
    <label class="form-label text-capitalize" for="{{ $name }}">{{ $label ?? $name }}</label>
    <input
        type="{{ $type }}"
        class="form-control"
        name="{{ $name }}"
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        value="{{ $value }}"
    >
    <x-input-error :messages="$errors->get($name)" class="mt-2" />
</div>
