<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Mileplot</title>
    </head>
    <body>
        <form action="/todos" method="POST">
            @csrf
            <div class="content">
                 <h2>Todoリスト追加</h2>
                 <textarea name="todo[content]" placeholder="ここにTodoを入力する"></textarea>>
            </div>
            <input type="submit" value="作成"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>