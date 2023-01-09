<div class="mb-3 text-2xl font-bold">{{ $blog->title }}</div>
<x-tags :tags="$blog->tags" />
<div class="mt-3 text-gray-500">{{ $blog->created_at }}</div>
<div class="border-b border-gray-300"></div>
@if ($blog->image)
    <img src="{{ $blog->image }}" class="m-auto h-80" />
@endif
<div class="markdown my-4">{!! $blog->content !!}</div>
