@extends('layouts.setting')

@section('title', 'ブログ設定')

@section('content')
    <x-link link="/setting/blog/new/edit">新しいブログを追加</x-link>
    <x-blogs :$blogs title="ブログ一覧" base="/setting" />
@endsection
