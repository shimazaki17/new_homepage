<div class="relative shadow cursor-pointer hover:shadow-lg" onclick="location.href='{{ $base }}/blog/{{ $blog->id }}'">
    <img src="{{ $blog->image }}" class="m-auto h-40" />
    <div class="p-2">
        @if (empty($blog->published_at))
            <div class="p-1 absolute top-0 right-0 bg-red-200 text-red-700">
                未公開
            </div>
        @endif
        <div class="text-gray-500">{{ $blog->updated_at->format('Y年n月j日') }}</div>
        <x-tags :tags="$blog->tags" :$base />
        <div class="mt-1 font-bold">{{ $blog->title }}</div>
        <div class="mt-1 truncate text-gray-400">{{ $blog->content }}</div>
    </div>
</div>
