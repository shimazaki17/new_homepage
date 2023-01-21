@extends('layouts.app')

@section('title', '訴訟、法律相談は島﨑法律事務所へ')

@section('gtag', 'UA-124630896-3')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-y-12 gap-x-8">
        <div class="max-w-xs border-8 border-white">
            <p class="p-6 border-b border-black border-dashed text-lg text-center font-bold">企業関連の業務</p>
            <div class="px-4 py-6 text-xs">
                ・会社紛争のアドバイス、訴訟代理<br />
                ・規程作成<br />
                ・法令調査<br />
                ・意見書作成<br />
            </div>
        </div>
       
        <div class="max-w-xs border-8 border-white">
            <p class="p-6 border-b border-black border-dashed text-lg text-center font-bold">法律顧問、アウトソース</p>
            <div class="px-4 py-6 text-xs">
                日々の法的な疑問やトラブル、改正法対応などに対応します。<br />
                これまで複数の外資・内資の企業において経営者や法務部に寄り添った法務サポートを提供してきました。<br />
                一時的に法務人員が足りない場合など、法務機能のアウトソース先としてご支援させてください。
            </div>
        </div>     
                
        <div class="max-w-xs border-8 border-white">
            <p class="p-6 mb-6 border-b border-black border-dashed text-lg text-center font-bold">個人関連の業務</p>
            <div class="px-4 py-6 text-xs">
                ・家族関係<br />
                ・刑事事件<br />
                ・債権回収<br />
                ・SNS被害
            </div>
        </div>

    </div>
@endsection
