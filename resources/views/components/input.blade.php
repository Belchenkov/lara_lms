<div class="mb-3">
    <label class="form-label" for="name">Name</label>
    <input
        type="text"
        class="form-control"
        name="name"
        id="name"
        placeholder="Enter language name"
    >
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>
