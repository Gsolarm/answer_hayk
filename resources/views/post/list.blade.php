@if ($isLogin = Auth::user())
    @include('post.header')
@else
    @include('auth.header')
@endif
    <div class="post_list" user-id="{{$userId = Auth::id()}}">
        <h2>Posts List</h2>
        @foreach ($posts as $post)
            <div class="post_item" data-id="{{$post->id}}">
                <h3>{{$post->title}}</h3>
                <p>{{$post->content}}</p>
                @if ($isLogin)
                    <div class="post_like_dislike">
                        Like/Dislike: 
                        <div class="{{$post->liked?'post_dislike':'post_like'}}">
                            <i class="icon-thumbs-up" style="color:{{$post->liked?'black':'lightgrey'}} ;"></i>
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</body>
</html>