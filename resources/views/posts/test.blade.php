
<div class="post">
    <div class="post-header">
        <img src="{{ $post->user->avatar }}" alt="User Avatar">
        <span class="username">{{ $post->user->name }}</span>
        <span class="timestamp">{{ $post->created_at->diffForHumans() }}</span>
    </div>

    <div class="post-content">
        {{ $post->content }}
    </div>
    <div class="post-footer">
        <a href="#" class="like-button">Like</a>
        <a href="#" class="comment-button">Comment</a>
        <span class="like-count">{{ $post->likes->count() }} Likes</span>
    </div>
    <div class="comments">
        @foreach ($post->comments as $comment)
            <div class="comment">
                <img src="{{ $comment->user->avatar }}" alt="User Avatar">
                <span class="username">{{ $comment->user->name }}</span>
                <span class="timestamp">{{ $comment->created_at->diffForHumans() }}</span>
                <p class="comment-content">{{ $comment->content }}</p>
            </div>
        @endforeach
    </div>
    <div class="add-comment">
        <form action="{{ route('comments.store', $post->id) }}" method="post">
            @csrf
            <textarea name="content" placeholder="Add a comment..."></textarea>
            <button type="submit">Post</button>
        </form>
    </div>
</div>



