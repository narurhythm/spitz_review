<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>マイページ編集</title>
    <link href="/css/base.css" rel="stylesheet">
    <link href="/css/mypage_up.css" rel="stylesheet">
  </head>
  <body>
    <div class="title">登録情報変更</div>
    <form method="POST">
      @csrf
    <div class="mypage_all">
      <div class="tourokuname"><input type="text" name="user_name" value="{{$user->name}}" required></div>
      <div class="tourokuname"><input type="text" name="email" value="{{$user->email}}" required></div>
      <div class="tourokuname"><input type="text" name="password" required></div>
      <input type="hidden" name="id" value="{{$user->id}}">
    </div>
    <input type="submit" value="編集" class="send">
    </form>
      <div class="return"><a href="index">トップへ戻る</a></div>
    <div class="dummy"></div>
  </body>
</html>