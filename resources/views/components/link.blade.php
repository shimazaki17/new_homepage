<a
    class="inline-block py-2 text-indigo-600 hover:text-indigo-800 hover:underline underline-offset-4"
    href="{{ $link }}"
    @if ($blank) target="_blank" @endif
>
    {{ $slot }}
</a>
