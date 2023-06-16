<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Mileplot</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Type Name</h1>
        <h2 class='title'>
            <a href="/types/{{ $types->id }}">目標モデル「{{ $types->title }}」</a>
        </h2>
        <div class='types'>
            @foreach ($types as $types)
            <div class='type'>
                    <h2 class='step'>
                        {{ $steps->content }}
                        {{ $steps->scheduled_date }}
                        {{ $steps->achievement_date }}
                    </h2>
            </div>
            @endforeach
        </div>
        <a href='/types/create'>作成</a>
        <div class='paginate'>
            {{ $types->links() }}
        </div>
    </body>
</html>