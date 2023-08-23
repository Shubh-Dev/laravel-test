<h3>Create a new Post</h3>
<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <div>
    <label for="title">Title</label>
    <br>
    <input type="text" name="title">
    </div>
    <br>
    <div>
    <label for="content">Content</label>
    <br>
    <textarea name="content"></textarea>
    </div>
    <br>
    <button type="submit">Create Post</button>
</form>
