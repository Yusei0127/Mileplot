<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Mileplot</title>
    </head>
    <body>
        <form action="/types" method="POST">
            @csrf
            <div class="type_goal">
                <h2>目標</h2>
                <input type="text" name="type[type_goal]" placeholder="ここに目標を入力"/>
                <button type="submit" neme="保存" value="store">保存</button>
            </div>
            <div class="type_current">
                 <h2>現状</h2>
                 <textarea name="type[type_current]" placeholder="ここに現状を入力"></textarea>
        　　 <div class="tutorial">
            　　 <a href="/tutorials">チュートリアル</a>
        　　 </div>
                 <button type="submit" neme="保存" value="store">保存</button>
            </div>
            <input type="submit" value="作成"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>