<div class="my-10 bg-white p-4 shadow-md rounded-md">
    <h1 class="text-2xl text-center font-bold my-2">Tradutor</h1>
    <div class="flex flex-col sm:flex-row items-center justify-center mb-2 gap-4">
        <div class="">
            <x-label for="text" class="font-bold mb-2 text-center">Palavra a traduzir</x-label>
            <x-input type="text" id="text" wire:model="text" wire:change="translate" placeholder="Introduzir palavra" class="text-center text-lg font-medium" />
        </div>

        @if ($translations)
        @foreach ($translations as $translation)
        <div>
            <x-label for="text" class="font-bold mb-2 text-center">Tradução</x-label>
            <x-input type="text" value="{{ $translation->target->text }}" disabled class="text-center text-amber-700 shadow text-lg font-medium" />
        </div>
        @endforeach
        @else
        <div>
            <x-label for="text" class="font-bold mb-2 text-center">Tradução</x-label>
            <x-input type="text" value="" placeholder="Tradução" disabled class="text-center text-amber-700 placeholder:text-amber-700 shadow text-lg font-medium" />
        </div>
        @endif
    </div>

    @if ($sentences)
    <div class="mt-4 mb-2">
        <h3 class="text-lg font-bold text-center my-2">Exemplos</h3>
        <div class="grid grid-cols-1 bg-gray-100 bg-opacity-50 divide-y divide-gray-300 border border-gray-300 shadow rounded-xl">
            @foreach ($sentences as $sentence)
            <p class="px-2 py-4">{!! $sentence->text !!}</p>
            @endforeach
        </div>
    </div>
    @endif
</div>