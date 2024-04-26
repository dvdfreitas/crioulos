<x-guestLayout>
    <x-container>
        <x-grid>
            @foreach ($references as $reference)
                <a href="{{ $reference->url}}">
                    <div>
                        <img src="/images/books/{{ $reference->image }}" 
                            class="w-full h-64 object-contain"
                            alt="{{ $reference->title }}">
                        <p class="text-xl font-bold">{{ $reference->title }}</p>
                        <p class="font-bold">{{ $reference->subtitle }}</p>
                        <p>{{ $reference->author }}</p>
                    </div>
                </a>
            @endforeach
        </x-grid>
    </x-container>
</x-guestLayout>