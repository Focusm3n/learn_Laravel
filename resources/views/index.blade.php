<!doctype html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Привет веб-страницы</title>
</head>
<body>
@foreach($users as $key => $user)
    <ul><a href="#"> {{$user->name}}</a>
        @foreach($user->books as $book)
            <li>{{$book->name}}</li>
        @endforeach
    </ul>
@endforeach

</body>
</html>
