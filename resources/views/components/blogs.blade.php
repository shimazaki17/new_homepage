<div class="mt-8">
    @if ($title)
        <div class="font-bold">{{ $title }}</div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-4 gap-x-2">
        @foreach ($blogs as $blog)
            <x-blogs.item :blog="$blog" :$base />
        @endforeach
    </div>

    <div class="mt-4">
        {{ $blogs->links() }}
    </div>
</div>
