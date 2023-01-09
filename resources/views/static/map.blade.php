@extends('layouts.app')

@section('title', '訴訟、法律相談は島﨑法律事務所へ')

@section('gtag', 'G-3LLZ42MC42')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-12 items-center justify-items-center">
        <div class="w-full">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51877.32829158184!2d139.68075907910156!3d35.644166000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b146c66e8f1%3A0xfe8e449d70ab9fc3!2z5pel5LuP5Lya6aSo!5e0!3m2!1sja!2sjp!4v1640673900692!5m2!1sja!2sjp"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <img src="/static/img/IMG_1449.jpg" class="shrink h-auto max-h-[450px]" />

    </div>
    <div class ="py-2 text-center">
        <p class="py-2">〒150-0013 東京都渋谷区恵比寿三丁目9番25号<br>日仏会館6階602号室</p>
        <p class="py-2">JR「恵比寿駅」徒歩8分</p>
        <p class="py-2">営業時間 9:00-18:00</p>
        <p class="py-2">事務所にお越しいただく際は、事前にご連絡ください。</p>
    </div>
@endsection
