<label class="mx-2">
    {{ $slot }}
    <input
        class="p-1 border-2 rounded"
        type="text"
        name="{{ $name }}"
        value="{{ $value }}"
        @required($required)
    />
</label>
