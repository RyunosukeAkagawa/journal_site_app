<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>memo edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <a href="{{ route('articles.show', $article) }}">戻る</a>
    <h1>更新</h1>
    <!-- 更新先はmemosのidにしないと増える sail artisan rote:listで確認① -->
    <form action="{{ route('articles.update', $article) }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ $article->title }}">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body" id="body">{{ $article->body }}</textarea>
        </p>

        <input type="submit" value="更新">
    </form>
</body>
</html>
