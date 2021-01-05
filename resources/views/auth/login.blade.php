    @include('auth.header')
    <div class="login-form">
        <form action="loginPost" method="POST">
            <input type="hidden" name="_token" value="{{ Session::token() }}" />
            <h2 class="text-center">Log in</h2>       
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                @if($errors->has('email'))
                    <span class="alert alert-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                @if($errors->has('password'))
                    <span class="alert alert-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
            @if (Session::get('info'))
                <p class="alert alert-danger">{{Session::get('info')}}</p>
            @endif
        </form>
        <p class="text-center"><a href="/register">Create an Account</a></p>
    </div>
</body>
</html>