<a href="{{ $story->url }}" class="group">
    <div class="border m-2 rounded-xl group-hover:shadow-2xl px-2 py-1">
        <p class="font-bold text-blue-600">{{ $story->title }}</p>
        @if ($story->subtitle) 
            <p class="leading-none font-semibold text-blue-500">{{ $story->subtitle }}</p>
        @endif
        @if ($story->image)
            <img class="mt-1" src="{{ $story->image }}" alt="{{ $story->title }}" />
        @endif
    </div>
</a>