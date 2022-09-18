<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>{{$reviews->review_title}}/『{{$reviews->review_song}}』</title>
    <link href="/css/base.css" rel="stylesheet">
    <link href="/css/reviews.css" rel="stylesheet">
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
    <div class="title">{{$reviews->review_title}}</div>
    <div class="reviews_all">
      <div class="song">{{$reviews->review_song}}</div>
      <div class="review">{!!nl2br(e($reviews->review_text))!!}</div>
    </div>
<div class="commentview">コメント欄</div>
      @foreach($comments as $comment)
      <div class="comment_all">
        <div class="flex">
          <div class="comments">{{$comment->user->name}}</div>
          <div class="comments">{{$comment->created_at}}</div>
        </div>
        <div class="commentcom">{!!nl2br(e($comment->com_text))!!}</div>
      </div>
      @endforeach
      @Auth
      @if (auth()->user()->role ===0)
      <div class="writecomment">
        <div class="commentfield">
          <form method="POST">
            @csrf
          <div class="commentuser">Name:{{$user->name}}</div>
          <input type="hidden" name="user_id" value="{{$user->id}}" autocomplete="off">
          <input type="hidden" name="review_id" value="{{$id}}" autocomplete="off">
          <textarea name="comment" required placeholder="コメント"></textarea>
          <input type="submit" class="send" value="送信">
          </form>
        </div>
      </div>
      @endif
      @endauth

      <div class="return"><a href="review_top">戻る</a></div>
    <div class="dummy"></div>
  </div>
  </body>
</html>