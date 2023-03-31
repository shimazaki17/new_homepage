@extends('layouts.common')

@section('layout-title', '恵比寿の弁護士、法律事務所')

@section('body')
    <div class="relative z-10 px-4 py-6 flex md:items-center bg-[#f0fff0]">
        <a class="text-2xl" href="/">島﨑法律事務所</a>
        <div class="absolute right-0 top-0 md:top-auto">
        <div class="p-4 flex flex-col md:flex-row items-center gap-6 text-lg md:text-sm font-bold bg-[#f0fff0]">
            <img id="menu" src="/static/img/menu.png" class="md:hidden w-12 h-12 self-end" />
            <a class="hidden md:block h-6 hover:border-b border-zinc-900" href="/" class="top">弁護士紹介</a>
            <a class="hidden md:block h-6 hover:border-b border-zinc-900" href="/service" class="top">取扱領域</a>
            <a class="hidden md:block h-6 hover:border-b border-zinc-900" href="/fee" class="top">料金体系</a>
            <a class="hidden md:block h-6 hover:border-b border-zinc-900" href="/map" class="top">アクセス</a>
            <a class="hidden md:block h-6 hover:border-b border-zinc-900" href="/blogs" class="top">ブログ</a>
            <a class="hidden md:block h-6 hover:border-b border-zinc-900" href="/mail" class="top">お問合せ</a>
        </div>
        </div>
    </div>

    <div class="text-xs md:text-sm p-10 pb-20">
        @yield('content')
    </div>

    <div class="fixed left-0 right-0 bottom-0 h-10 bg-zinc-800"></div>
    <div id="backdrop" class="hidden fixed inset-0 bg-gray-800/75"></div>

    <script>
    $(function() {
        $("img#menu").click(function() {
            $(this).siblings().each(function() {
                if (this.id === 'menu') return;
                $(this).toggleClass('hidden');
            });
            $('#backdrop').toggleClass('hidden');
        });

        $('#backdrop').click(function() {
            $('img#menu').trigger('click');
        });
    });
    </script>
@endsection
