@extends('layouts.setting')

@section('title', 'タグ設定')

@section('content')

    <form method="POST">
        @csrf
        <x-forms.text name="tag" value="{{ $tag->tag }}" :required="true">タグ名</x-forms.text>
        @if ($tag->id)
            <x-button>変更</x-button>
        @else
            <x-button>追加</x-button>
        @endif
    </form>
    @if ($tag->id)
        <x-button color="danger" method="delete">削除</x-button>
    @endif
    <x-tags :$tags base="/setting" />
@endsection
