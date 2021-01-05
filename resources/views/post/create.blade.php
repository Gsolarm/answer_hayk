    @include('post.header')
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