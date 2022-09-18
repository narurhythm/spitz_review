<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>スピッツ楽曲レビュー</title>
    <link href="/css/base.css" rel="stylesheet">
    <link href="/css/top.css" rel="stylesheet">
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
    <div class="title_all">
      <div class="title_top">スピッツ楽曲レビュー</div>
      <div class="top_string">スピッツの基本情報や楽曲情報を掲載しているWebサイトです。<br>管理人による楽曲レビューも掲載。</div>
    </div>
    <div class="access">
      <a href="information">スピッツ基礎情報</a>
      <a href="archive">スピッツの楽曲一覧</a>
      <a href="review_top">楽曲レビュー</a>
    </div>
    </div>
  </body>
</html>