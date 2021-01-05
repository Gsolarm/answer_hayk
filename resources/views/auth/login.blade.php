    @include('auth.header')
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