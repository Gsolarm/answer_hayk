@if ($isLogin = Auth::user())
    @include('post.header')
@else
    @include('auth.header')
@endif
    <div class="container">
        <div class="col-md-12">
            <div class="post_list" user-id="{{$userId = Auth::id()}}">
                <h2>Posts List</h2>
                @foreach ($posts as $post)
                    <div class="post_item" data-id="{{$post->id}}">
                        <h1>{{$post->title}}</h1>
                        <p>{{$post->content}}</p>
                        <div>
                            <span class="badge">Posted {{$post->created_at}}</span>
                            <div class="pull-right">
                                @if ($isLogin)
                                    <div class="post_like_dislike">
                                        <div class="{{$post->liked?'post_dislike':'post_like'}}">
                                            <i class="icon-thumbs-up" style="color:{{$post->liked?'black':'lightgrey'}} ;"></i>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <hr>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
