<label class="m-2 inline-block">
    <p class="font-bold">
        <span>{{ $slot }}</span>

        @if ($required)
            <span class="px-0.5 rounded bg-red-500 text-white font-bold align-top text-[0.5rem]">必須</span>
        @endif
    </p>
    @if ($multiline)
        <textarea
            class="py-1 px-2 w-full border border-slate-300 rounded focus:outline-none focus:border-sky-500 focus:shadow"
            type="text"
            name="{{ $name }}"
            value="{{ $value }}"
            rows="4"
            @required($required)
        ></textarea>
    @else
        <input
            class="py-1 px-2 w-full border border-slate-300 rounded focus:outline-none focus:border-sky-500 focus:shadow"
            type="text"
            name="{{ $name }}"
            value="{{ $value }}"
            @required($required)
        />
    @endif
</label>
