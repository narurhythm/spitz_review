<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>レビュー一覧</title>
    <link href="/css/base.css" rel="stylesheet">
    <link href="/css/reviewtop.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
    <div class="title">レビュー一覧</div>
    <!==デフォルトでレビューは4つ追加状態に（背景透過のため）==>
    <div class="review_all">
      @Auth
      @if (auth()->user()->role ===0)
      <div class="edit_add"><a href="review_addition">追加</a></div>
      @endif
      @endauth

      <table class="review_all">
        <tr>
          <th class="review_t_top">曲名</th>
          <th class="review_t_top">レビュータイトル</th>
        </tr>
      @foreach($findAll as $review)
        <tr>
        <td class="reviews">{{$review->review_song}}</td>
        <td class="reviews"><a href="reviews?id={{$review->id}}">{{$review->review_title}}</a></td>

      @Auth
      @if (auth()->user()->role ===0)
        <td class="edit"><button type="button" onclick="location.href='review_update?id={{$review->id}}'">編集</button></td>
        <td class="edit"><button type="button" class="delete">削除</button></td>
      <div class="pop">
        <p>削除しますか？</p>
        <button type="button" class="delete_comp" data-id="{{$review->id}}">はい</button>
        <input type="button" class="closepop" value="いいえ">
      </div>
      @endif
      @endauth
        </tr>
      @endforeach
      </table>
    </div>
    <div class="return"><a href="index">戻る</a></div>
    <div class="dummy"></div>
    </div>
    <script src="/js/style.js"></script>
  </body>
</html>