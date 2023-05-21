@extends('layouts.app')

@section('title', '訴訟、法律相談は島﨑法律事務所へ')

@section('gtag', 'G-3LLZ42MC42')

@section('content')
    <div class="mb-12 px-2 md:px-24">
        <div class="markdown">
* お問合せ方法（ご相談の流れ）：
  * １　問い合わせフォームをご記入のうえ、送信してください（ご相談内容は具体的にお願いいたします）
  * ２　当事務所から、取扱いの可否、報酬額等について返信いたします（２までは無料です）
  * ３　お客様と日程を調整し、面談を実施いたします（Zoom会議も可能です）
        </div>
    </div>
    <div class="p-6 bg-zinc-100">
        @include('static.common.contact', [
            'title' => 'お問い合わせ',
            'data' => [
                '氏名' => ['required' => true],
                '会社名' => [],
                '従業員数' => [
                    'type' => 'select',
                    'values' => [
                        ['text' => '1 ～ 30名'],
                        ['text' => '31 ～ 100名'],
                        ['text' => '101 ～ 300名'],
                        ['text' => '301 ～ 500名'],
                        ['text' => '501 ～ 1000名'],
                        ['text' => '1001名以上'],
                    ]
                ],
                'メールアドレス' => ['required' => true],
                '電話番号' => [],
                'お問い合わせ内容' => ['multiline' => true, 'required' => true],
            ]
        ])
    </div>
@endsection
