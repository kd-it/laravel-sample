<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メモ</title>
</head>
<body>
    <h1>メモ一覧</h1>
    <ul>
        @foreach($memos as $memo)
        <li>{{ $memo['text']}}</li>
        @endforeach
    </ul>
</body>
</html>
