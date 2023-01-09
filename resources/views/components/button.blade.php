@if ($method)
    <form class="inline-block" method="POST">
    @csrf
    @method($method)
@endif

<button
    {{ $attributes->class([
        'm-1 p-2 border rounded hover:shadow-md',
        'border-teal-600 bg-teal-500 text-teal-100' => $color === 'default',
        'border-red-600 bg-red-500 text-red-100' => $color === 'danger',
    ]) }}
>
    {{ $slot }}
</button>

@if ($method)
    </form>
@endif
