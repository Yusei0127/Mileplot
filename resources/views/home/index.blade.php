<?php
$week = [
  '日', //0
  '月', //1
  '火', //2
  '水', //3
  '木', //4
  '金', //5
  '土', //6
];

$yobi = $week[date('w')];
$date = date('Y/m/d');
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mileplot</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class="date">
             <h2>{{$date}}({{$yobi}})</h2>
             <div style="padding: 50px; margin-bottom: 20px; border: 1px solid #333333;">
              ここに文字を入力する。
　　　　     </div>  
        </div>
        <div class="todo">
        <h1>Todo</h1>
            <div style="padding: 50px; margin-bottom: 20px; border: 1px solid #333333;">
    　　　    　<p>{{ $todo->content }}</p>
　　　　    </div>
　　　　</div>
    </body>
</html>