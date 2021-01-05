<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Registration</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/post/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/post/list.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
</head>
<body>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <ul>
        <li><a href="/post/list">Posts</a></li>
        <li><a href="/post/create">Create Post</a></li>
        <li><a href="/logout">Logout</a></li>
    </ul>