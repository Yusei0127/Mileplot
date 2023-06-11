<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profile</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Profile</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="username">
            <div class="username__post">
                <h3>名前</h3>
                <a href='/profiles/create'>保存</a>    
            </div>
            @if($profile->icon_url)
        　  <div>
                <img src="{{ $profile->icon_url }}" alt="画像が読み込めません。"/>
            </div>
            @endif
            @if($profile->head_url)
            <div>
                <img src="{{ $profile->head_url }}" alt="画像が読み込めません。"/>
            </div>
            @endif
            <div class="introduction">
            <div class="introduction__post">
                <h3>自己紹介</h3>
                <a href='/profiles/create'>保存</a>    
            </div>
            </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>