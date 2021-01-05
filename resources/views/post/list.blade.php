<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <h2>Posts List</h2>
    @foreach ($posts as $post)
        <div>
            <h3>{{$post->title}}</h3>
            <p>{{$post->content}}</p>
        </div>
    @endforeach
</body>
</html>