@extends('layouts.setting')

@section('title', 'ブログ設定')

@section('content')
    <x-link link="/setting">一覧に戻る</x-link>
    <x-link link="{{ $blog->id }}/edit">設定変更</x-link>

    <x-button method="put">
        {{ $blog->published_at ? '非公開' : '公開' }}
    </x-button>
    <x-button color="danger" method="delete">削除</x-button>
    <x-blogs.detail :$blog />
@endsection
