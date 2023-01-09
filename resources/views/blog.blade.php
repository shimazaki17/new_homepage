@extends('layouts.app')

@section('title', $blog['title'])

@section('gtag', 'G-3LLZ42MC42')

@section('content')
    <x-link link="/blogs">ブログトップ</x-link>

    <x-blogs.detail :$blog />
@endsection
