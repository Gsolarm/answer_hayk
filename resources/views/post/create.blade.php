<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<style>
    form{
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        display: grid;
        justify-content: center;
        align-items: center;
        height: 300px;
        grid-template-rows: 50px 50px 50px 50px 50px;
    }
</style>
<body>
    <form action="createPost" method="POST">
        <h2>Create Post</h2>
        <div>
            <label>Title:</label>
            <input name="title" type="text">
            <!-- show errors -->
            @if($errors->has('title'))
                <span>{{ $errors->first('title') }}</span>
            @endif
        </div>
            
        <div>
            <label>Content:</label>
            <textarea name="content" type="text"></textarea>
            <!-- show errors -->
            @if($errors->has('content'))
                <span>{{ $errors->first('content') }}</span>
            @endif
        </div>

        <input type="hidden" name="_token" value="{{ Session::token() }}" />

        <button>Create</button>
    </form>
</body>
</html>