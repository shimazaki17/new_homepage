<h2 class="m-6 text-2xl md:text-4xl text-center">お問い合わせフォーム</h2>

<form method="POST" action="/contact" class="p-6 m-auto lg:w-8/12 max-w-4xl flex flex-col">
    @csrf
    <input type="hidden" name="title" value="{{ $title }}" />
    @foreach ($data as $name => $value)
        @switch($value['type'] ?? 'text')
            @case('select')
                <x-forms.select
                    :$name
                    :select="collect($value['values'])"
                    :values="collect()"
                    key="text"
                    value="text"
                    :required="$value['required'] ?? false"
                >
                    {{ $name }}
                </x-forms.text>
                @break
            @case('text')
            @default
                <x-forms.text
                    :$name
                    :required="$value['required'] ?? false"
                    :multiline="$value['multiline'] ?? false"
                >
                    {{ $name }}
                </x-forms.text>
        @endswitch
    @endforeach

    <div class="mt-4 text-center">
        <p>
            <x-link link="/privacy" :blank="true">プライバシーポリシー</x-link>に同意の上、送信ボタンを押してください
        </p>
        <x-button>送信</x-button>

        <div class="mt-6 p-4 border rounded ring-1 ring-offset-2 ring-gray-200">
            受付に失敗する場合はお手数ではございますが、<br />
            <x-link link="mailto:{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</x-link>宛に直接メールにてご連絡ください。
        </div>
    </div>
</form>
