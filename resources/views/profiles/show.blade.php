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
            @if($profile->head_url)
            <div>
                <img src="{{ $profile->head_url }}" alt="画像が読み込めません。"/>
            </div>
            @endif
        <h1>プロフィール</h1>
            <div class="username">
                <h3>名前</h3>
                <p>{{ $profile->username }}</p>  
            </div>
            @if($profile->icon_url)
        　  <div>
                <img src="{{ $profile->icon_url }}" alt="画像が読み込めません。"/>
            </div>
            @endif
            <div class="introduction">
                <h3>自己紹介</h3>
                <p>{{ $profile->introduction }}</p>    
            </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>