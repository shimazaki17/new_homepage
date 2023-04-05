@extends('layouts.app')

@section('title', '訴訟、法律相談は島﨑法律事務所へ')

@section('gtag', 'UA-124630896-3')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-y-12 gap-x-8">
        <div class="max-w-xs border-8 border-white">
            <p class="p-6 border-b border-black border-dashed text-lg text-center font-bold">企業関連の業務</p>
            <div class="px-4 py-6 text-xs">
                ・会社紛争のアドバイス<br />
                ・訴訟代理<br />
                ・規程作成<br />
                ・法令調査<br />
                ・意見書作成<br />
            </div>
        </div>
       
        <div class="max-w-xs border-8 border-white">
            <p class="p-6 border-b border-black border-dashed text-lg text-center font-bold">法律顧問</p>
            <div class="px-4 py-6 text-xs">
                日々の法的な疑問やトラブル、改正法対応などに対応します。<br />
                複数の日系・外資系企業へ法務サポートを提供してきました。<br />
                <br />
                ・顧問先は優先対応とし、24時間以内に対応します。<br />
                ・一定時間内のご相談を、顧問料の範囲で対応します。<br />
                ・顧問料の範囲を超える場合、ディスカウントしたタイムチャージで対応します。
            </div>
        </div> 
        
        <div class="max-w-xs border-8 border-white">
            <p class="p-6 border-b border-black border-dashed text-lg text-center font-bold">内部通報の外部窓口</p>
            <div class="px-4 py-6 text-xs">
                弊所では内部通報の外部窓口を受託しています。<br />
                弁護士が、通報の受付から月次報告まで全て対応します（月額2万円〜）。<br />
                貴社の内部通報規程に合わせて、柔軟に対応します。<br />
                <a href= "https://www.s-law.tokyo/whistleblowing-contact" >詳細</a>

                <br />
                内部通報規程の作成、社内研修の実施も可能です。
            </div>
        </div>
        
   
                
        <div class="max-w-xs border-8 border-white">
            <p class="p-6 mb-6 border-b border-black border-dashed text-lg text-center font-bold">個人関連／公益活動</p>
            <div class="px-4 py-6 text-xs">
                ・相続、男女問題<br />
                ・債権回収<br />
                ・国選弁護／少年付添人
            </div>
        </div>

    </div>
@endsection
