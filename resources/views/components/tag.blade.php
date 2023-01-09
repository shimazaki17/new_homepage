<a
    href="{{ $link }}"
    {{ $attributes->merge([
        'class' => 'inline-block border border-indigo-500 rounded-full bg-indigo-500/10 my-1'
    ]) }}
>
    <div class="px-2 text-indigo-500">
        {{ $tag }}
    </div>
</a>
