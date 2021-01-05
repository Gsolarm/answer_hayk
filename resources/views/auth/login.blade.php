<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        grid-template-rows: 50px 50px 50px 50px;
    }
</style>
<body>
    <form action="loginPost" method="POST">
        <h2>Login</h2>
        <div>
            <label>Email Address:</label>
            <input name="email" type="text">
            <!-- show errors -->
            @if($errors->has('email'))
                <span>{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div>
            <label>Password:</label>
            <input name="password" type="password">
            <!-- show errors -->
            @if($errors->has('password'))
                <span>{{ $errors->first('password') }}</span>
            @endif
        </div>

        <input type="hidden" name="_token" value="{{ Session::token() }}" />
        <p>{{Session::get('info')}}</p>
        <button>Login</button>
    </form>
</body>
</html>