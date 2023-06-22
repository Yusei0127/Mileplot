<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Mileplot</title>
    </head>
    <body>
        <h1>プロフィールを編集</h1>
        <form action="/profiles" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="username">
             <h2>名前</h2>
                <input type="text" name="profile[username]" placeholder="ここに名前を入力"/>
            <button type="submit" neme="保存" value="store">保存</button>
            </div>
            <div class="image">
        　   <div class="aicon">
        　       <h2>アイコン画像</h2>
        　       <input type="file" name="aicon">
        　   </div>
        　   <div class="head">
        　       <h2>ヘッダー画像</h2>
                <input type="file" name="head">  
             </div>
            </div>
            <div class="introduction">
                <h2>自己紹介文</h2>
                <textarea name="profile[introduction]" placeholder="ここに自己紹介文を入力"></textarea>
            </div>
            <button type="submit" neme="保存" value="store">保存</button>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>