<x-app-layout>
<h1 class="text-center text-xl text-bold">Posts</h1>

@if ($posts->count() > 0)
    @foreach ($posts as $post)
    <div>
     <div class="border border-gray-400 rounded-lg text-center w-48 mx-auto">
        <p  class="font-semibold">{{ $post->title }}</p>
        <p class="mt-3">{{ $post->content }}</p>
        <br>
        <a href="{{ route('posts.edit', $post->id) }}" class="border border-slate-600 p-2">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="border border-slate-700 px-2 py-1 mt-3 mb-3">Delete</button>
        </form>
        <br>
        </div>
        </div>
        <br>
    @endforeach
@else
<div class="text-center">
    <p>No posts yet</p>
</div>
    
@endif
<br>
<div class="text-center mt-14">
<a href="{{ route('posts.create') }}" class="border border-slate-600 p-2">Create</a>
</div>
</x-app-layout>

