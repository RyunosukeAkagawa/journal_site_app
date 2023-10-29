<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <a href="{{ route('articles.index') }}">戻る</a>
    <h1>新規論文登録</h1>
    <form action="{{ route('articles.store') }}" method="post">
        @csrf
        <p>
            <label for="title">
            <b>論文タイトル</b>
            </label><br>
            <input type="text" name="title" id="title">
        </p>
        <p>
            <label for="body">
            <b>本文</b>
            </label><br>
            <textarea name="body" class="body" id="body"></textarea>
        </p>

        <input type="submit" value="投稿">
    </form>
</body>

</html>
