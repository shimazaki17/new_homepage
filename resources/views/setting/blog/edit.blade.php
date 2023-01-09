@extends('layouts.setting')

@section('title', 'ブログ設定')

@section('content')
    <x-link link="{{ url()->previous() }}">戻る</x-link>

    <form method="POST">
        @csrf
        <x-forms.text name="title" value="{{ $blog->title }}" :required="true">タイトル</x-forms.text>
        <x-forms.select name="tags" :select="$tags" :values="$blog->tags" key="id" value="tag" />
        <x-forms.text name="image" value="{{ $blog->image }}">画像URL</x-forms.text>
        @if ($blog->id)
            <x-button>変更</x-button>
        @else
            <x-button>追加</x-button>
        @endif
    </form>
@endsection
