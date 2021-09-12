<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VCApp - Language</title>
</head>
<body>
    <ul>
        @foreach ($languages as $lang) 
        <li>
            {{ $lang }}
        </li>
        @endforeach
    </ul>
</body>
</html>