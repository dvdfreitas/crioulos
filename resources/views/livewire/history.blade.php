<div class="overflow-hidden justify-between shadow-md">
    <div class="flex flex-row w-100 bg-white shadow-lg p-2 items-center space-x-2">
        <x-responsive-nav-link class="flex lg:max-w-32 items-center text-center justify-center hover:cursor-pointer" wire:click="showPage('concept')" active="{{ $page === 'history.concept' }}">Conceitos</x-responsive-nav-link>
        <x-responsive-nav-link class="flex lg:max-w-32 items-center text-center justify-center hover:cursor-pointer" wire:click="showPage('figure')" active="{{ $page === 'history.figure' }}">Figuras</x-responsive-nav-link>
        <x-responsive-nav-link class="flex lg:max-w-32 items-center text-center justify-center hover:cursor-pointer" wire:click="showPage('type')" active="{{ $page === 'history.type' }}">Tipos</x-responsive-nav-link>
    </div>
    <div class="bg-gray-100 flex flex-col justify-center lg:pt-0 items-center">
        <x-container>
            @if($page === 'history.concept')
                @livewire('history.concept')
            @elseif($page === 'history.figure')
                @livewire('history.figure')
            @elseif($page === 'history.type')
                @livewire('history.type')
            @endif
        </x-container>
    </div>
    <div></div>
</div>