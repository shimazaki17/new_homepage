<div class="m-2 inline-block">
    <p class="font-bold">
        <span>{{ $slot }}</span>

        @if (!$multiple && $required)
            <span class="px-0.5 rounded bg-red-500 text-white font-bold align-top text-[0.5rem]">必須</span>
        @endif
    </p>
    @foreach ($items as $item)
        <label class="inline-block cursor-pointer">
            @if ($multiple)
                <input
                    class="hidden peer"
                    type="checkbox"
                    name="{{ $name }}[{{ $item['key'] }}]"
                    value="{{ $item['key'] }}"
                    @checked($item['selected'])
                />
            @else
                <input
                    class="hidden peer"
                    type="radio"
                    name="{{ $name }}"
                    value="{{ $item['key'] }}"
                    @checked($item['selected'])
                    @required($required)
                />
            @endif
            <p class="py-1 px-2 mb-1 border border-slate-300 rounded bg-white peer-checked:bg-sky-500 peer-checked:text-white">
                {{ $item['text'] }}
            </p>
        </label>
    @endforeach
</div>
