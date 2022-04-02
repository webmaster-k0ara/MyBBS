<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <title>{{ $title }}</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('posts.index') }}">home</a></li>
                <li><a href="{{ route('member.company') }}">会社概要</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        {{ $slot }}
    </div>
</body>

</html>
