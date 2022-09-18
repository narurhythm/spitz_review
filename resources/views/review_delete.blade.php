<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>レビュー削除完了</title>
    <link href="/css/base.css" rel="stylesheet">
    <link href="/css/delete.css" rel="stylesheet">
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
    <div class="title">レビュー削除完了</div>
    <div class="complete">削除が完了しました。</div>
      <div class="return"><a href="review_top">戻る</a></div>
    <div class="dummy"></div>
    </div>
  </body>
</html>