@if ($method)
    <form class="inline-block" method="POST">
    @csrf
    @method($method)
@endif

<button
    {{ $attributes->class([
        'transition ease-in-out m-1 py-2 px-4 border rounded hover:scale-110',
        'border-teal-600 bg-teal-500 text-teal-100' => $color === 'default',
        'border-red-600 bg-red-500 text-red-100' => $color === 'danger',
    ]) }}
>
    {{ $slot }}
</button>

@if ($method)
    </form>
@endif
