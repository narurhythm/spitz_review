<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>レビュー追加</title>
    <link href="/css/base.css" rel="stylesheet">
    <link href="/css/reviewadd.css" rel="stylesheet">
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
    <div class="title">新規レビュー</div>
    <form method="post">
      @csrf
    <div class="review_all">
      <div class="flex">
        <input type="text" name="review_title" class="reviews" placeholder="レビューのタイトル" required autocomplete="off">
        <input type="text" name="song_title" class="reviews" placeholder="曲名" required autocomplete="off">
      </div>
      <div class="review"><textarea name="review" required placeholder='本文'></textarea></div>
      <div class="send"><input type="submit" value="追加"></div>
    </div>
    </form>
      <div class="return"><a href="review_top">戻る</a></div>
    <div class="dummy"></div>
    </div>
  </body>
</html>