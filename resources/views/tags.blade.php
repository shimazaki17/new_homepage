@extends('layouts.app')

@section('title', $tag)

@section('gtag', 'G-3LLZ42MC42')

@section('content')
    <x-link link="/blogs">← すべての記事</x-link>
    <x-tags :$tags />

    <x-blogs :$blogs title="{{ $tag }}の記事" />
@endsection
