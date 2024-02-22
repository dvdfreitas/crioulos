<div class="max-w-3xl m-auto">
    <div class="grid grid-cols-4 gap-4">
        @foreach ($stories as $story)
            <x-story :story="$story" />
        @endforeach
    </div>
    {{ $stories->links() }}
</div>
