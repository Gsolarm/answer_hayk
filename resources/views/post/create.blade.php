    @include('post.header')
    <div class="login-form">
        <form action="createPost" method="POST">
            <input type="hidden" name="_token" value="{{ Session::token() }}" />
            <h2 class="text-center">Create Post</h2>
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Title" required="required">
                @if($errors->has('title'))
                    <span class="alert alert-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-group">
                <textarea type="text" name="content" class="form-control" placeholder="Content" required="required"></textarea>
                @if($errors->has('content'))
                    <span class="alert alert-danger">{{ $errors->first('content') }}</span>
                @endif
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create Post</button>
            </div>
            @if (Session::get('info'))
                <p class="alert alert-danger">{{Session::get('info')}}</p>
            @endif
        </form>
    </div>
</body>
</html>