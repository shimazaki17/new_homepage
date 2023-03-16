@extends('layouts.common')

@section('layout-title', 'ブログ設定')

@section('body')
    <div class="bg-indigo-500 text-indigo-100 text-2xl p-3">
        島﨑法律事務所
    </div>
    <div class="h-screen flex text-sm">
        <ul class="shrink-0 bg-indigo-100 shadow-md p-4">
            <li>
                <x-link link="/setting/tags">タグ設定</x-link>
            </li>
            <li>
                <x-link link="/setting">ブログ設定</x-link>
            </li>
        </ul>
        <div class="grow px-2 overflow-auto">
            @yield('content')
        </div>
    </div>
@endsection
