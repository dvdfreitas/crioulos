<div class="max-w-4xl mx-auto my-10 bg-white p-4 shadow-md rounded-md">
    <h1 class="text-2xl text-center font-bold my-2">Tradutor</h1>
    <div class="flex justify-center mb-2 gap-4">
        <div class="">
            <x-label for="text" class="font-bold mb-2 text-center">Palavra a traduzir</x-label>
            <x-input type="text" id="text" wire:model="text" wire:change="translate" placeholder="Introduzir palavra" class="text-center text-lg font-medium"/>
        </div>

        @if ($translations)
            @foreach ($translations as $translation)
                <div>
                    <x-label for="text" class="font-bold mb-2 text-center">Tradução</x-label>
                    <x-input type="text" value="{{ $translation->target->text }}" disabled class="text-center text-amber-700 border-0 shadow text-lg font-medium"/>
                </div>
            @endforeach
        @else
            <div>
                <x-label for="text" class="font-bold mb-2 text-center">Tradução</x-label>
                <x-input type="text" value="" placeholder="Tradução" disabled class="text-center text-amber-700 border-0 shadow text-lg font-medium"/>
            </div>
        @endif    
    </div>

    @if ($sentences)
        <div class="mt-4 mb-2">
            <h3 class="text-lg font-bold text-center my-2">Exemplos</h3>
            <div class="grid grid-cols-1 bg-amber-800/5 divide-y divide-amber-700 border border-amber-700 rounded">
                @foreach ($sentences as $sentence)
                    <?php
                        
                    ?>
                    <p class="px-2 py-4">{{ $sentence->text }}</p>
                @endforeach
            </div>    
        </div>
    @endif

</div>
