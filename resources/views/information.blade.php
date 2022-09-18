<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>スピッツ基礎情報</title>
    <link href="/css/base.css" rel="stylesheet">
    <link href="/css/info.css" rel="stylesheet">
  </head>
  <body>
    <div class="mask">
            @if (Route::has('login'))
                <div class="header">
                  <div class="header">
                    @auth
                        <div class="menu"><a href="{{ url('mypage') }}">マイページ</a></div>
                    @else
                        <div class="menu"><a href="{{ route('login') }}">ログイン</a></div>

                        @if (Route::has('register'))
                            <div class="menu"><a href="{{ route('register') }}">新規登録</a></div>
                        @endif
                    @endauth
                    </div>
                </div>
            @endif
    <div class="title">スピッツ/基礎情報</div>
    <div class="member_all">
      <div class="flex">
        <div class="membername">草野マサムネ</div>
        <div class="memberbirth">1967/12/21生まれ<br>福岡県福岡市出身</div>
      </div>
      <div class="memberinfo">
        ボーカル・ギター担当。<br>
        東京造形大学で田村と意気投合し前身となるバンドを結成。スピッツでは殆どの曲の作詞・作曲を手掛けている。<br>
        ハイトーンボイスを活かした叙情性溢れる歌声が特徴。
      </div>
    </div>

    <div class="member_all">
      <div class="flex">
        <div class="membername">三輪テツヤ</div>
        <div class="memberbirth">1967/05/17生まれ<br>静岡県静岡市出身</div>
      </div>
      <div class="memberinfo">
        ギター担当。<br>
        田村とは幼なじみで、中学生の頃からバンドを組むなどの交流を持っていた。<br>
        アルペジオを得意とし、曲中でも多様な形で表現している。また、バンドメンバー内で一番容姿が派手かつ頻繁に変わる。
      </div>
    </div>

    <div class="member_all">
      <div class="flex">
        <div class="membername">田村明浩</div>
        <div class="memberbirth">1967/05/31生まれ<br>静岡県藤枝市出身</div>
      </div>
      <div class="memberinfo">
        ベース担当。<br>
        三輪とは小学校からの幼なじみで、スピッツ結成の際もその縁から勧誘した。<br>
        複雑なベースラインの構築を特徴とするほか、ライブでの激しいパフォーマンスはツアーの鉄板となっている。
      </div>
    </div>

    <div class="member_all">
      <div class="flex">
        <div class="membername">崎山龍男</div>
        <div class="memberbirth">1967/10/25生まれ<br>栃木県佐野市出身</div>
      </div>
      <div class="memberinfo">
        ドラム担当。<br>
        スピッツには当初ヘルプとして入っており、その後レギュラーメンバーとして定着した経緯を持つ。<br>
        安定したリズムと緩急の付いた演奏が得意。難易度の高い奏法であるモーラー奏法を扱う。
      </div>
    </div>
    
    <div class="member_all">
      <div class="membername">バンド経歴</div>
      <div class="memberinfo">
        1987年に草野が田村に働きかける形で、田村の幼なじみの三輪、三輪と同じ学校の崎山を加えた四人でバンド「スピッツ」を結成。<br>
        1991年にメジャーデビューを果たしたのち、95年にシングル『ロビンソン』がオリコンチャートTOP10入り。以後数々のシングル・アルバムでヒットを獲得。日本のロックシーンで大きな存在感を示し、その後のJ-ROCKシーンに多くのフォロワーを生んだ。<br>
        2021年に30周年を迎えてなお、精力的に音楽活動を続けている。
      </div>

      <div class="return"><a href="index">戻る</a></div>
    </div>
    <div class="dummy"></div>
    </div>
  </body>
</html>