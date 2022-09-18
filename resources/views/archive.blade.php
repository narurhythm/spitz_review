<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>スピッツ楽曲一覧</title>
    <link href="/css/base.css" rel="stylesheet">
    <link href="/css/archive.css" rel="stylesheet">
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
    <div class="title">楽曲一覧</div>

    <div class="music_all">
      <div class="flex">
        <div class="infoall">
          <div class="albuminfo">スピッツ</div>
          <div class="albuminfo">1st:1991/03/25</div>
        </div>
        <ol class="song_title">
          <li>ニノウデの世界</li>
          <li>海とピンク</li>
          <li>ビー玉</li>
          <li>五千光年の夢</li>
          <li>月に帰る</li>
          <li>テレビ</li>
          <li>タンポポ</li>
          <li>死神の岬へ</li>
          <li>トンビ飛べなかった</li>
          <li>夏の魔物</li>
          <li>うめぼし</li>
          <li>ヒバリのこころ</li>
        </ol>
      </div>
    </div>

    <div class="music_all">
      <div class="flex">
        <div class="infoall">
          <div class="albuminfo">名前をつけてやる</div>
          <div class="albuminfo">2nd:1991/11/25</div>
        </div>
        <ol class="song_title">
          <li>ウサギのバイク</li>
          <li>日曜日</li>
          <li>名前をつけてやる</li>
          <li>鈴虫を飼う</li>
          <li>ミーコとギター</li>
          <li>プール</li>
          <li>胸に咲いた黄色い花</li>
          <li>待ち合わせ</li>
          <li>あわ</li>
          <li>恋のうた</li>
          <li>魔女旅に出る</li>
        </ol>
      </div>
    </div>

    <div class="music_all">
      <div class="flex">
        <div class="infoall">
          <div class="albuminfo">惑星のかけら</div>
          <div class="albuminfo">3rd:1992/09/26</div>
        </div>
        <ol class="song_title">
          <li>惑星のかけら</li>
          <li>ハニーハニー</li>
          <li>僕の天使マリ</li>
          <li>オーバードライブ</li>
          <li>アパート</li>
          <li>シュラフ</li>
          <li>白い炎</li>
          <li>波のり</li>
          <li>日なたの窓に憧れて</li>
          <li>ローランダー、空へ</li>
          <li>リコシェ号</li>
        </ol>
      </div>
    </div>

    <div class="music_all">
      <div class="flex">
        <div class="infoall">
          <div class="albuminfo">Crispy!</div>
          <div class="albuminfo">4th:1993/09/26</div>
        </div>
        <ol class="song_title">
          <li>クリスピー</li>
          <li>夏が終わる</li>
          <li>裸のままで</li>
          <li>君が思い出になる前に</li>
          <li>ドルフィン・ラヴ</li>
          <li>夢じゃない</li>
          <li>君だけを</li>
          <li>タイムトラベラー</li>
          <li>多摩川</li>
          <li>黒い翼</li>
        </ol>
      </div>
    </div>

    <div class="music_all">
      <div class="flex">
        <div class="infoall">
          <div class="albuminfo">空の飛び方</div>
          <div class="albuminfo">5th:1994/09/21</div>
        </div>
        <ol class="song_title">
          <li>たまご</li>
          <li>スパイダー</li>
          <li>空も飛べるはず</li>
          <li>迷子の兵隊</li>
          <li>恋は夕暮れ</li>
          <li>不死身のビーナス</li>
          <li>ラズベリー</li>
          <li>ヘチマの花</li>
          <li>ベビーフェイス</li>
          <li>青い車</li>
          <li>サンシャイン</li>
        </ol>
      </div>
    </div>

    <div class="music_all">
      <div class="flex">
        <div class="infoall">
          <div class="albuminfo">ハチミツ</div>
          <div class="albuminfo">6th:1995/09/20</div>
        </div>
        <ol class="song_title">
          <li>ハチミツ</li>
          <li>涙がキラリ☆</li>
          <li>歩き出せ、クローバー</li>
          <li>ルナルナ</li>
          <li>愛のことば</li>
          <li>トンガリ'95</li>
          <li>あじさい通り</li>
          <li>ロビンソン</li>
          <li>Y</li>
          <li>グラスホッパー</li>
          <li>君と暮らせたら</li>
        </ol>
      </div>
    </div>

    <div class="music_all">
      <div class="flex">
        <div class="infoall">
          <div class="albuminfo">インディゴ地平線</div>
          <div class="albuminfo">7th:1996/10/23</div>
        </div>
        <ol class="song_title">
          <li>花泥棒</li>
          <li>初恋クレイジー</li>
          <li>インディゴ地平線</li>
          <li>渚</li>
          <li>ハヤテ</li>
          <li>ナナへの気持ち</li>
          <li>虹を越えて</li>
          <li>バニーガール</li>
          <li>ほうき星</li>
          <li>マフラーマン</li>
          <li>夕陽が笑う、君も笑う</li>
          <li>チェリー</li>
        </ol>
      </div>
    </div>

    <div class="music_all">
      <div class="flex">
        <div class="infoall">
          <div class="albuminfo">フェイクファー</div>
          <div class="albuminfo">8th:1998/03/25</div>
        </div>
        <ol class="song_title">
          <li>エトランゼ</li>
          <li>センチメンタル</li>
          <li>冷たい頬</li>
          <li>運命の人</li>
          <li>仲良し</li>
          <li>楓</li>
          <li>スーパーノヴァ</li>
          <li>ただ春を待つ</li>
          <li>謝謝!</li>
          <li>ウィリー</li>
          <li>スカーレット</li>
          <li>フェイクファー</li>
        </ol>
      </div>
    </div>

    <div class="music_all">
      <div class="flex">
        <div class="infoall">
          <div class="albuminfo">ハヤブサ</div>
          <div class="albuminfo">9th:2000/07/26</div>
        </div>
        <ol class="song_title">
          <li>今</li>
          <li>放浪カモメはどこまでも</li>
          <li>いろは</li>
          <li>さらばユニヴァース</li>
          <li>甘い手</li>
          <li>HOLIDAY</li>
          <li>8823</li>
          <li>宇宙虫</li>
          <li>ハートが帰らない</li>
          <li>ホタル</li>
          <li>メモリーズ・カスタム</li>
          <li>俺の赤い星</li>
          <li>ジュテーム？</li>
          <li>アカネ</li>
        </ol>
      </div>
    </div>

    <div class="music_all">
      <div class="flex">
        <div class="infoall">
          <div class="albuminfo">三日月ロック</div>
          <div class="albuminfo">10th:2002/09/11</div>
        </div>
        <ol class="song_title">
          <li>夜を駆ける</li>
          <li>水色の街</li>
          <li>さわって・変わって</li>
          <li>ミカンズのテーマ</li>
          <li>ババロア</li>
          <li>ローテク・ロマンティカ</li>
          <li>ハネモノ</li>
          <li>海を見に行こう</li>
          <li>エスカルゴ</li>
          <li>遥か</li>
          <li>ガーベラ</li>
          <li>旅の途中</li>
          <li>けもの道</li>
        </ol>
      </div>
    </div>

    <div class="music_all">
      <div class="flex">
        <div class="infoall">
          <div class="albuminfo">スーベニア</div>
          <div class="albuminfo">11th:2005/01/12</div>
        </div>
        <ol class="song_title">
          <li>春の歌</li>
          <li>ありふれた人生</li>
          <li>甘ったれクリーチャー</li>
          <li>優しくなりたいな</li>
          <li>ナンプラー日和</li>
          <li>正夢</li>
          <li>ほのほ</li>
          <li>ワタリ</li>
          <li>恋のはじまり</li>
          <li>自転車</li>
          <li>テイタム・オニール</li>
          <li>会いに行くよ</li>
          <li>みそか</li>
        </ol>
      </div>
    </div>

    <div class="music_all">
      <div class="flex">
        <div class="infoall">
          <div class="albuminfo">さざなみCD</div>
          <div class="albuminfo">12th:2007/10/10</div>
        </div>
        <ol class="song_title">
          <li>僕のギター</li>
          <li>桃</li>
          <li>群青</li>
          <li>Na・de・Na・deボーイ</li>
          <li>ルキンフォー</li>
          <li>不思議</li>
          <li>点と点</li>
          <li>P</li>
          <li>魔法のコトバ</li>
          <li>トビウオ</li>
          <li>ネズミの進化</li>
          <li>漣</li>
          <li>砂漠の花</li>
        </ol>
      </div>
    </div>

    <div class="music_all">
      <div class="flex">
        <div class="infoall">
          <div class="albuminfo">とげまる</div>
          <div class="albuminfo">13th:2010/10/27</div>
        </div>
        <ol class="song_title">
          <li>ビギナー</li>
          <li>探検隊</li>
          <li>シロクマ</li>
          <li>恋する凡人</li>
          <li>つぐみ</li>
          <li>新月</li>
          <li>花の写真</li>
          <li>幻のドラゴン</li>
          <li>TRABANT</li>
          <li>聞かせてよ</li>
          <li>えにし</li>
          <li>若葉</li>
          <li>どんどどん</li>
          <li>君は太陽</li>
        </ol>
      </div>
    </div>

    <div class="music_all">
      <div class="flex">
        <div class="infoall">
          <div class="albuminfo">小さな生き物</div>
          <div class="albuminfo">14th:2013/09/11</div>
        </div>
        <ol class="song_title">
          <li>未来コオロギ</li>
          <li>小さな生き物</li>
          <li>りありてぃ</li>
          <li>ランプ</li>
          <li>オパビニア</li>
          <li>さらさら</li>
          <li>野生のポルカ</li>
          <li>scat</li>
          <li>エンドロールには早すぎる</li>
          <li>遠吠えシャッフル</li>
          <li>スワン</li>
          <li>潮騒ちゃん</li>
          <li>僕はきっと旅に出る</li>
          <li>エスペランサ</li>
        </ol>
      </div>
    </div>

    <div class="music_all">
      <div class="flex">
        <div class="infoall">
          <div class="albuminfo">醒めない</div>
          <div class="albuminfo">15th:2016/07/27</div>
        </div>
        <ol class="song_title">
          <li>醒めない</li>
          <li>みなと</li>
          <li>子グマ！子グマ！</li>
          <li>コメット</li>
          <li>ナサケモノ</li>
          <li>グリーン</li>
          <li>SJ</li>
          <li>ハチの針</li>
          <li>モニャモニャ</li>
          <li>ガラクタ</li>
          <li>ヒビスクス</li>
          <li>ブチ</li>
          <li>雪風</li>
          <li>こんにちは</li>
        </ol>
      </div>
    </div>

    <div class="music_all">
      <div class="flex">
        <div class="infoall">
          <div class="albuminfo">見っけ</div>
          <div class="albuminfo">16th:2019/10/09</div>
        </div>
        <ol class="song_title">
          <li>見っけ</li>
          <li>優しいあの子</li>
          <li>ありがとさん</li>
          <li>ラジオデイズ</li>
          <li>花と虫</li>
          <li>ブービー</li>
          <li>快速</li>
          <li>YM71D</li>
          <li>はぐれ狼</li>
          <li>まがった僕のしっぽ</li>
          <li>初夏の日</li>
          <li>ヤマブキ</li>
          <li>ブランケット</li>
        </ol>
      </div>
    </div>
    
    <div class="return"><a href="index">戻る</a></div>
    <div class="dummy"></div>
    </div>
  </body>
</html>