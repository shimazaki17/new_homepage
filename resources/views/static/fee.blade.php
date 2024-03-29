@extends('layouts.app')

@section('title', '訴訟、法律相談は島﨑法律事務所へ')

@section('gtag', 'G-3LLZ42MC42')

@section('content')
    <div class="px-2 lg:px-36">
        <div class="markdown">
        
* 法律顧問    
  * 月額5万円（税抜）よりご相談
  
<br />

* 法律相談料
  * 法人：30分 10,000円（税抜）
  * 個人：30分 5,500円（税込）

<br />

* 契約書等の作成
  * タイムチャージ：25,000円（税抜）

<br />

* 民事事件
  * （民事事件の着手金及び報酬金）
    * 訴訟事件（手形・小切手訴訟事件を除く。）、非訟事件、家事審判事件、行政審判等事件及び仲裁事件 の着手金及び報酬金は、 特に定めのない限り、 <u>経済的利益の額</u>を基準として、それぞれ次表のとおり算定します。

    | 経済的利益の額                   | 着　手　金   | 報　酬　金   |
    | :------------------------------: | :----------: | :----------: |
    | 300万円以下の場合                | 8％          | 16％         |
    | 300万円を超え3,000万円以下の場合 | 5％＋9万円   | 10％＋18万円 |
    | 3,000万円を超え3億円以下の場合   | 3％＋69万円  | 6％＋138万円 |
    | 3億円を超える場合                | 2％＋369万円 | 4％＋738万円 |

    * 着手金及び報酬金は、事件の内容により、30％の範囲内で増減額することができます。
    * 同一弁護士が引き続き上訴事件を受任するときは、着手金を適正妥当な範囲内で減額することができます。
    * 着手金は20万円を最低額とします。

  * ※経済的利益の額は、 次のとおり算定します。
    * 金銭債権は、債権総額（利息及び遅延損害金を含みます）。
    * 将来の債権は、債権総額から中間利息を控除した額。
    * 継続的給付債権は、債権総額の10分の7の額。ただし、期間不定のものは、7年分の額。
    * 賃料増減額請求事件は、増減額分の7年分の額。
    * 所有権は、対象たる物の時価相当額。
    * 占有権、地上権、永小作権、賃借権及び使用借権は、対象たる物の時価の2分の1の額。ただし、その権利の時価が対象たる物の時価の２分の１の額を超えるときは、その権利の時価相当額。
    * 建物についての所有権に関する事件は、建物の時価相当額に、その敷地の時価の3分の1の額を加算した額。建物についての占有権、賃借権及び使用借権に関する事件は、前号の額に、その敷地の時価の３分の１の額を加算した額。
    * 地役権は、承役地の時価の2分の1の額。
    * 担保権は、被担保債権額。ただし、担保物の時価が債権額に達しないときは、担保物の時価相当額。
    * 不動産についての所有権、地上権、永小作権、地役権、賃借権及び担保権等の登記手続請求事件は、第5号、第6号、第8号及び前号に準じた額。
    * 詐害行為取消請求事件は、取消請求債権額。ただし、取消される法律行為の目的の価額が債権額に達しないときは、法律行為の目的の価額。
    * 共有物分割請求事件は、対象となる持分の時価。
    * 遺産分割請求事件は、対象となる相続分の時価相当額。
    * 遺留分減殺請求事件は、対象となる遺留分の時価相当額。
    * 金銭債権についての民事執行事件は、請求債権額。ただし、執行の目的物の時価が債権額に達しないときは、第１号の規定にかかわらず、執行対象物件の時価相当額（担保権設定、仮差押等の負担があるときは、その負担を考慮した時価相当額）。
  * ※ 経済的利益の額を算定することができないときは、その額を800万円とします。

<br />

<!-- * 離婚事件
  * （着手金及び報酬金）

    | 離婚事件の内容               | 着手金及び報酬金           |
    | :--------------------------: | :------------------------: |
    | 離婚交渉、離婚調停、離婚仲裁 | 着手金・報酬金各15万円以上 |
    | 離婚訴訟事件                 | 着手金・報酬金各20万円以上 |

    * 財産分与、慰謝料など財産給付を伴うときは、 財産給付の実質的な経済的利益の額を基準として、 適正妥当な額を加算して請求することができるものとします。
    * 依頼者と協議のうえ、離婚事件の着手金及び報酬金の額を、依頼者の経済的資力、事案の複雑さ及び事件処理に要する手数の繁簡等を考慮し、適正妥当な範囲内で増減額することができるものとします。

<br />

* 刑事事件
  * （着手金）

    | 刑事事件の内容                             | 着　手　金           |
    | :----------------------------------------: | :------------------: |
    | 起訴前及び起訴後（第一審及び上訴審）の事件 | 20万円以上40万円以下 |

  * （報酬金）

    <table>
        <tr class="text-center"><th colspan="2">刑事事件の内容</th>                                   <th>結　　　果</th>                  <th>報　酬　金</th></tr>
        <tr><td rowspan="5">起訴前及び起訴後（第一審及び上訴審）の事件</td><td rowspan="2">起訴前</td><td>不起訴</td>                      <td>20万円以上30万円以下</td></tr>
        <tr>                                                                                          <td>求略式命令</td>                  <td>10万円以上20万円以下</td></tr>
        <tr>                                                               <td rowspan="3">起訴後</td><td>刑の執行猶予</td>                <td>10万円以上20万円以下</td></tr>
        <tr>                                                                                          <td>求刑された刑が軽減された場合</td><td>10万円以上20万円以下</td></tr>
        <tr>                                                                                          <td>無罪</td>                        <td>50万円以上</td></tr>
    </table>

<br />

* 商標
  * （調査・出願・登録）

    | 区分数 | 調査・出願報酬金 | 登録出願料（実費） | 登録報酬金 | 登録料（実費） | 合計額 (税別) |
    | :----: | :--------------: | :----------------: | :--------: | :------------: | :-----------: |
    | 1      | 4万円            | 12,000円           | 2万円      | 16,400円       | 88,400円      |
    | 2      | 6万円            | 20,600円           | 2万円      | 32,800円       | 133,400円     |
    | 3      | 8万円            | 29,200円           | 2万円      | 49,200円       | 178,400円     |
    | 4      | 10万円           | 37,800円           | 2万円      | 65,600円       | 223,400円     | -->

        </div>
    </div>
@endsection
