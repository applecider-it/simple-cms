<div>
    <label for="name" class="app-form-label">カテゴリー名</label>
    <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" class="mt-1 app-form-input">
    @error('name')
        <p class="app-error-text">{{ $message }}</p>
    @enderror
</div>
