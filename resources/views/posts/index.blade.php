{{--<!-- resources/views/posts/index.blade.php -->--}}


{{--<h1 class="text-center my-5">All Posts</h1>--}}

{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        @foreach($posts as $post)--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="card mb-3">--}}
{{--                    <img src="{{ $post->image }}" class="card-img-top" alt="Post Image">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="postTitle">{{ $post->title }}</h5>--}}
{{--                        <p class="postBody">{{ $post->body }}" style="display:none;"</p>--}}
{{--                        <p class="text-muted">Post ID: {{ $post->id }}</p>--}}
{{--                        <a href="#" class="btn btn-primary">View Comments</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- Blade template -->--}}

<div id="postContainer">
    @foreach ($posts as $post)
        <h3 class="postTitle" data-id="{{ $post->id }}">{{ $post->title }}</h3>
        <div class="postBody" id="postBody{{ $post->id }}" style="display:none;">
            {{ $post->body }}
        </div>
        <div class="comments" id="comments{{ $post->id }}" style="display:none;">
            <h4>Comments:</h4>
            @foreach ($post->comments as $comment)
                <p>{{ $comment->body }}</p>
            @endforeach
        </div>
    @endforeach
</div>

<!-- JavaScript -->
<script>
    const postTitles = document.querySelectorAll('.postTitle');
    postTitles.forEach(title => {
        title.addEventListener('click', function() {
            const postId = this.getAttribute('data-id');
            const postBody = document.getElementById(`postBody${postId}`);
            const comments = document.getElementById(`comments${postId}`);
            if (postBody.style.display === 'none') {
                postBody.style.display = 'block';
                comments.style.display = 'block';
            } else {
                postBody.style.display = 'none';
                comments.style.display = 'none';
            }
        });
    });
</script>

