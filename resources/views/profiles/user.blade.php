<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Mileplot</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class='profile'>
            <h5 class='username'>{{ $user->username }}</h5>
            <a href="/profiles/{{ $profile->profile }}">プロフィール</a>
        </div>
    </body>
</html>