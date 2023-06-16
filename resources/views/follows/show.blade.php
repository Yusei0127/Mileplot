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
        <h1>Follow</h1>
            <div class="follower">
                <h3>フォロー</h3>
                <p>{{ $follows->follower }}</p>    
            </div>
            @if($profile->icon_url)
        　  <div>
                <img src="{{ $profile->icon_url }}" alt="画像が読み込めません。"/>
            </div>
            @endif
            <div class="followee">
                <h3>フォロワー</h3>
                <p>{{ $follows->followee }}</p>    
            </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>