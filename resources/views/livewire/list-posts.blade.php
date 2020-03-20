<div wire:init="filteredPosts" class="mt-4">
    <h2 class="text-muted text-center">List of found posts</h2>

    @if (count($posts))
        <ul class="list-group">
            @foreach ($posts as $post)
                <li class="list-group-item" wire:key="{{ $post->id }}">
                    {{ $post->id }}: {{ $post->title }}
                </li>
            @endforeach
        </ul>

        <div class="mt-3 float-right">
            {{ $posts->links() }}
        </div>
    @else
        <div class="alert alert-danger">
            No posts available
        </div>
    @endif
</div>
