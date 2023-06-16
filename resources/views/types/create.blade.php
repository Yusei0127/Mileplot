<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Mileplot</title>
    </head>
    <body>
        <form action="/posts" method="POST">
            @csrf
            <div class="type_goal">
                <h2>目標</h2>
                <input type="text" name="type[title]" placeholder="目標"/>
            </div>
            <div class="type_current">
             <form action="/posts" method="POST">
                 <h2>現状</h2>
                 <textarea name="current[body]" placeholder="現状"></textarea>
            　<div class="tutorial">
            　　 <a href="/tutorials">チュートリアル</a>
        　　　</div>
        　　　  </form>
            </div>
            <input type="submit" value="作成"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>