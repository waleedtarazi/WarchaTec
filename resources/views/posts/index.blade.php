<div id="postPage">
    @foreach ($posts as $post)
    <div id="postContainer">
        <div class="post-header" style="border: none !important;">
            <p class="username">أبو محمد</p>
            <p class="timestamp">{{ $post->created_at->diffForHumans() }}</p>
        </div>
        <h3 class="postTitle" data-id="{{ $post->id }}" style="margin-top: 0px; margin-bottom: 0px;">{{ $post->title }}</h3>
        <div class="postBody" id="postBody{{ $post->id }}" style="display:none;">
            {{ $post->body }}
        </div>
        <div class="comments" id="comments{{ $post->id }}" style="display:none;">
            <h4>التعليقات</h4>
            @foreach ($post->comments as $comment)
                <p>{{ $comment->body }}</p>
            @endforeach
        </div>
        <div class="post-footer">
            <p class="like-count"> 20ألف  إعجاب </p>
        </div>
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




<style>
    .post, .comments, .comment {
        padding-right: 10px;
        padding-left: 0;
    }
    .username, .timestamp, .comment-content {
        text-align: right;
    }
    .post-header, .post-footer {
        margin-right: 0;
        margin-left: 10px;
    }

    .add-comment form textarea {
        margin-right: 0;
        margin-left: 10px;
    }
    body {
        direction: rtl;
    }

    .postContainer {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        margin-bottom: 20px;
        overflow: hidden;
    }

    .post-header {
        align-items: center;
        border-bottom: 1px solid #ddd;
        display: flex;
        /*padding: 10px;*/
    }
    .username {
        font-weight: bold;
    }
    .timestamp {
        color: #999;
        font-size: 12px;
        margin-left: 10px;
    }

    .post-content {
        padding: 10px;
    }

    .post-footer {
        border-top: 1px solid #ddd;
        display: flex;
        justify-content: space-between;
        /*padding: 10px;*/
    }

    /*.like-button, .comment-button {*/
    /*    color: #4267b2;*/
    /*    cursor: pointer;*/
    /*    font-size: 14px;*/
    /*}*/

    .like-count {
        color: #999;
        font-size: 14px;
    }

    /*.comments {*/
    /*    margin-top: 20px;*/
    /*}*/

    .comment {
        align-items: center;
        border-bottom: 1px solid #ddd;
        display: flex;
    }

    /*.comment img {*/
    /*    border-radius: 50%;*/
    /*    height: 30px;*/
    /*    margin-right: 10px;*/
    /*    width: 30px;*/
    /*}*/

    .username {
        font-weight: bold;
    }

    .timestamp {
        color: #999;
        font-size: 12px;
        margin-left: 10px;
    }

    .comment-content {
        margin-left: 10px;
        width: 100%;
    }

    /*.add-comment {*/
    /*    margin-top: 20px;*/
    /*}*/

    /*.add-comment form textarea {*/
    /*    border: 1px solid #ddd;*/
    /*    border-radius: 5px;*/
    /*    box-shadow: 0 2px 4px rgba(0,0,0,0.1);*/
    /*    display: block;*/
    /*    margin-bottom: 10px;*/
    /*    padding: 10px;*/
    /*    resize: vertical;*/
    /*    width: 100%;*/
    /*}*/

    /*.add-comment form button {*/
    /*    background-color: #4267b2;*/
    /*    border: none;*/
    /*    border-radius: 5px;*/
    /*    color: #fff;*/
    /*    cursor: pointer;*/
    /*    font-size: 14px;*/
    /*    padding: 10px 20px;*/
    /*}*/
</style>
