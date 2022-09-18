<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>マイページ</title>
    <link href="/css/base.css" rel="stylesheet">
    <link href="/css/mypage.css" rel="stylesheet">
  </head>
  <body>
    <div class="title">マイページ</div>
    <div class="mypage_all">
      <div class="tourokuname">{{$user->name}}</div>
      <div class="tourokuname"><a href="mypage_update">登録情報変更</a></div>
      <div class="tourokuname"><a href="logout">ログアウト</a></div>
    </div>
      <div class="return"><a href="index">トップへ戻る</a></div>
    <div class="dummy"></div>
  </body>
</html>