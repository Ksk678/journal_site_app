<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>論文一覧</h1>
    <ul>
        @foreach ($articles as $article)
            <li><a href="{{ route('articles.show', $article) }}">{{ $article->title }}</li>
        @endforeach
    </ul>

    <button onclick='location.href="{{ route("articles.create") }}"'>新規論文投稿</button>
</body>

</html>
