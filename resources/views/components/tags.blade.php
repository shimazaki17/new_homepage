<div>
    @foreach ($tags as $tag)
        <x-tag :tag="$tag->tag" link="{{ $base }}/tags/{{ $tag->tag }}" />
    @endforeach
</div>
