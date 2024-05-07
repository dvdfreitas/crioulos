<div class="my-16 bg-white border-2 p-4 rounded">
    <h1 class="text-2xl font-bold mb-4">Tradutor</h1>
    <div class="flex gap-4">
        <div>
            <x-label for="text" class="font-bold mb-2">Palavra a traduzir</x-label>
            <x-input type="text" id="text" wire:model="text" wire:change="translate" placeholder="Palavra a traduzir"/>
        </div>

        @if ($translations)
            @foreach ($translations as $translation)
                <div>
                    <x-label for="text" class="font-bold mb-2">Tradução</x-label>
                    <x-input type="text" value="{{ $translation->target->text }}" disabled class="border-green-500"/>
                </div>
            @endforeach
        @endif    
    </div>

    @if ($sentences)
        <div class="my-4">
            <div class="font-bold">Exemplos</div>
            @foreach ($sentences as $sentence)
                <p class="border px-2 py-4">{{ $sentence->text }}</p>
            @endforeach        
        </div>
    @endif

    
</div>
