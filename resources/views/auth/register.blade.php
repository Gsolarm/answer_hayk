    @include('auth.header')
    <form action="registerPost" method="POST">
        <h2>Registration</h2>
        <div>
            <label>Name:</label>
            <input name="name" type="text">
            <!-- show errors -->
            @if($errors->has('name'))
                <span>{{ $errors->first('name') }}</span>
            @endif
        </div>
            
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

        <button>Register</button>
    </form>
</body>
</html>