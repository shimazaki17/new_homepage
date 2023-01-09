@extends('layouts.app')

@section('title', '法律記事')

@section('gtag', 'G-3LLZ42MC42')

@section('content')
    @if($blogs->isNotEmpty() && $tags->isNotEmpty())
        <div class="font-bold">キーワード</div>
        <x-tags :$tags />
    @endif

    @if($blogs->isEmpty())
        <div class="p-4 rounded text-amber-900 bg-amber-200">現在公開されている記事はありません。</div>
    @else
        <x-blogs :$blogs />
    @endif
@endsection
