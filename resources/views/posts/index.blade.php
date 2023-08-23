@if ($posts->count() > 0)
    @foreach ($posts as $post)
        <p>{{ $post->title }}</p>
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endforeach
@else
    <p>No posts</p>
    
@endif

<a href="{{ route('posts.create') }}">Create</a>

