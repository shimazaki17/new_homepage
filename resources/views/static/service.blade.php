@extends('layouts.app')

@section('title', '訴訟、法律相談は島﨑法律事務所へ')

@section('gtag', 'UA-124630896-3')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-y-12 gap-x-8">
        <div class="max-w-xs border-8 border-white">
            <p class="p-6 border-b border-black border-dashed text-lg text-center font-bold">企業法務</p>
            <div class="px-4 py-6 text-xs">
                ・訴訟代理人<br />
                ・法務相談<br />
                ・契約書作成
            </div>
        </div>
        <div class="max-w-xs border-8 border-white">
            <p class="p-6 mb-6 border-b border-black border-dashed text-lg text-center font-bold">債権回収</p>
            <div class="px-4 py-6 text-xs">
                交渉、内容証明郵便による催促、訴訟等
            </div>
        </div>
        <div class="max-w-xs border-8 border-white">
            <p class="p-6 mb-6 border-b border-black border-dashed text-lg text-center font-bold">相続</p>
            <div class="px-4 py-6 text-xs">
                遺産分割協議
            </div>
        </div>
        <div class="max-w-xs border-8 border-white">
            <p class="p-6 mb-6 border-b border-black border-dashed text-lg text-center font-bold">SNS名誉毀損</p>
            <div class="px-4 py-6 text-xs">
                ・発信者情報の開示<br />
                ・投稿の削除
            </div>
        </div>
    </div>
@endsection
