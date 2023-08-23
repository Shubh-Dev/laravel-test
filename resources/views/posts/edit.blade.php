 <div class="container">

    <h2>Edit Post</h2>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
       
            <div class="form-group">
                <label for="title">Title:</label>
                <br>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
            </div>
            <br>
            <div class="form-group">
                <label for="content">Content:</label>
                <br>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{ $post->content }}</textarea>
            </div>
            <br>
            
            <button type="submit" class="btn btn-primary">Update</button>
       
    </form>
</div>

