<div>
    @foreach ($items as $item)
        <label class="p-2 my-2 inline-block">
            <input
                class="w-4 h-4 align-middle border-2 rounded appearance-none checked:bg-emerald-300 checked:border-emerald-600"
                type="checkbox"
                name="{{ $name }}[{{ $item['key'] }}]"
                value="{{ $item['key'] }}"
                @checked($item['selected'])
            />
            {{ $item['text'] }}
        </label>
    @endforeach
</div>
