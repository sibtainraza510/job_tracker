<div class="mb-4">

    <label class="block mb-1 font-medium">
        {{ $label }}
    </label>

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        value="{{ old($name, $value ?? '') }}"
        class="w-full border rounded p-2"
    >

    @error($name)

        <p class="text-red-500 text-sm mt-1">
            {{ $message }}
        </p>

    @enderror
<x-form.input
    label="Job Title"
    name="title"
    type="text"
/>
</div>