<nav class="bg-white shadow-sm rounded-b-xl p-4">
    <div class="flex gap-2">
        <x-nav-link href="{{ route('welcome') }}"><div>Homepage</div></x-nav-link>
        <x-nav-link href="{{ route('language_codes.index') }}"><div>Línguas</div></x-nav-link>
        <x-nav-link href="{{ route('references.index') }}"><div>Referências</div></x-nav-link>
        <x-nav-link href="{{ route('people.index') }}"><div>Pessoas</div></x-nav-link>
    </div>
</nav>
