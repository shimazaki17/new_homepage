@extends('layouts.app')

@section('title', '訴訟、法律相談は島﨑法律事務所へ')

@section('gtag', 'G-3LLZ42MC42')

@section('content')
    <div class="relative flex flex-col -m-10 space-y-8 text-zinc-600">
        <div class="sticky top-0 h-20 w-full -mb-20 bg-gradient-to-b from-white to-transparent pointer-events-none"></div>
        <div class="px-6 pb-0 text-center">
            <h2 class="m-6 text-2xl md:text-4xl">貴社の「内部通報制度」の外部窓口として</h2>

            <p class="p-6 m-auto max-w-4xl">
                弊所は、内部通報制度の外部窓口業務を受託しています。<br />
                内部通報規程作成や社内調査の経験を有する弁護士が、外部窓口として貴社をサポートします。
            </p>
        </div>
        <div class="m-auto pb-6 max-w-4xl">
            <img src="/static/img/whistleblowing.png" />
        </div>

        <div class="p-6 bg-zinc-100 text-center">
            <h2 class="m-6 text-2xl md:text-4xl">外部窓口導入の流れ</h2>

            <ul class="p-6 m-auto max-w-4xl font-bold text-lg text-white">
                @foreach ([
                    '内部通報規程を参照の上、外部窓口に係る業務委託契約書を締結',
                    '社内で外部窓口を周知していただき、業務開始',
                    '個別の内部通報について、都度連絡',
                    '月末締めで、月次報告書を提出',
                ] as $value)
                    <li class="p-2 bg-rose-600 rounded">{{ $value }}</li>
                    @empty($loop->last)
                        <li class="material-symbols-rounded select-none text-6xl leading-8 align-middle text-blue-200">arrow_drop_down</li>
                    @endif
                @endforeach
            </ul>
        </div>

        <div class="p-6">
            <h2 class="m-6 text-2xl md:text-4xl text-center">よくあるご質問</h2>

            <div class="faq p-6 m-auto max-w-4xl flex flex-col space-y-3">
                @foreach ([
                    [
                        'q' => '通報の受付方法は？',
                        'a' => implode('<br />', [
                            '原則、メールでのみ受け付けます。',
                            '通報事実のヒアリングは、通報者の希望により電話で行います。',
                        ]),
                    ],
                    [
                        'q' => '料金は？',
                        'a' => implode('<br />', [
                            '基本料金は月2万円（税抜）からです（月次報告分）。',
                            '基本料金以外は、対応時間に応じたタイムチャージ（2万円/h）です。',
                        ]),
                    ],
                    [
                        'q' => 'いつでも解約できますか？',
                        'a' => '１か月前までの通知で解約可能です。',
                    ],
                    [
                        'q' => '窓口は事務員が対応することもあるでしょうか？',
                        'a' => '全て弁護士が対応します。',
                    ],
                    [
                        'q' => '弁護士を外部窓口にするメリットは？',
                        'a' => implode('<br />', [
                            '法令や社内規則の知識があり、聞き取りにも慣れているため、社内調査へスムーズに移行できます。',
                            'また、弁護士は弁護士法による守秘義務を負っているため、不用意に通報者情報を漏らすことはありません。',
                        ]),
                    ],
                    [
                        'q' => '顧問弁護士を外部窓口とすることは可能ですか？',
                        'a' => implode('<br />', [
                            '中立性に疑義が生じるおそれのある顧問弁護士などは外部窓口として相応しくないとされています',
                            '（『公益通報者保護法を踏まえた内部通報制度の整備・運用に関する民間事業者向けガイドライン』5頁）',
                        ]),
                    ],
                    [
                        'q' => '通報者の個人情報は会社へ共有されますか？',
                        'a' => implode('<br />', [
                            '原則、通報者の氏名等は、会社へ伝えません。',
                            'なお、通報内容によっては、氏名等を伝えずとも、通報者が特定されてしまう場合があります。',
                            'その場合は、通報者に対し、そのリスクを説明した上で、通報内容を会社へ伝えることの承諾を得ます。',
                        ]),
                    ],
                    [
                        'q' => '外国人からの通報にも対応できますか？',
                        'a' => '英語での対応も可能です。',
                    ],
                    [
                        'q' => '社内調査も含まれますか？',
                        'a' => implode('<br />', [
                            '原則、社内調査は外部窓口業務の範囲外です。',
                            '社内調査について弁護士のサポートが必要な場合は、顧問弁護士へご相談ください。',
                        ]),
                    ],
                ] as $item)
                    <ul class="rounded shadow overflow-hidden font-bold">
                        <li class="flex bg-teal-50 text-lg cursor-pointer">
                            <span class="p-4 bg-teal-700 text-teal-50 text-2xl">Q</span>
                            <span class="p-4 grow">{{ $item['q'] }}</span>
                            <span class="p-4 material-symbols-rounded select-none text-4xl leading-8 transition rotate-180">arrow_drop_down</span>
                        </li>
                        <li class="flex bg-zinc-100">
                            <span class="p-4 text-red-700 text-2xl">A</span>
                            <span class="p-4 grow">{!! $item['a'] !!}</span>
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>

        <div class="p-6 bg-zinc-100">
            @include('static.common.contact', [
                'title' => '内部通報外部窓口',
                'data' => [
                    '会社名' => ['required' => true],
                    '従業員数' => [
                        'required' => true,
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
                    '担当者名' => ['required' => true],
                    'メールアドレス' => ['required' => true],
                    '電話番号' => [],
                    'お問い合わせ内容' => ['multiline' => true],
                ]
            ])
        </div>
        <div class="fixed bottom-10 h-20 w-full bg-gradient-to-t from-white to-transparent pointer-events-none"></div>
    </div>
    <div class="contact-link fixed flex items-center bottom-10 right-0 m-2 p-2 bg-sky-500 text-white rounded-full ring-2 ring-sky-500 ring-offset-2 cursor-pointer">
        お問い合わせ
        <span class="material-symbols-rounded select-none text-xl transition rotate-180">arrow_back</span>
    </div>

    <script>
    $(function() {
        $(".faq > ul > li:first-child").each(function() {
            $(this).find(".material-symbols-rounded").removeClass("rotate-180");
            $(this).next().hide();
        });
        $(".faq > ul > li:first-child").click(function() {
            $(this).find(".material-symbols-rounded").toggleClass("rotate-180");
            $(this).next().slideToggle("fast");
        });
        $('.contact-link').click(function() {
            $("html, body").animate({ scrollTop: $('form').offset().top - 100}, "fast");
        });
        $(window).scroll(function() {
            if ($(this).scrollTop() + window.innerHeight < $('form').offset().top) {
                $('.contact-link').fadeIn();
            } else {
                $('.contact-link').fadeOut();
            }
        })
    });
    </script>
@endsection
