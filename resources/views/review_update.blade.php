<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>レビュー更新</title>
    <link href="/css/base.css" rel="stylesheet">
    <link href="/css/reviewup.css" rel="stylesheet">
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
    <div class="title">レビュー編集</div>
    <form method="post">
      @csrf
    <div class="review_all">
      <div class="flex">
        <input type="text" name="review_title" class="reviews" required value="{{$reviews->review_title}}" autocomplete="off">
        <input type="text" name="song_title" class="reviews" required value="{{$reviews->review_song}}" autocomplete="off">
      </div>
      <div class="review"><textarea name="review" required>{{$reviews->review_text}}</textarea></div>
      <input type="hidden" name="id" value="{{$reviews->id}}">
      <div class="send"><input type="submit" value="編集"></div>
    </div>
    </form>
      <div class="return"><a href="review_top">戻る</a></div>
    <div class="dummy"></div>
    </div>
  </body>
</html>