<x-guestLayout>
    <h1 class="text-3xl text-center font-bold m-6">Línguas</h1>
    <div class="grid grid-cols-4 gap-4 m-6">
        @foreach ($language_codes as $language_code)
        <div class="bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-xl font-semibold mb-4 leading-6 text-gray-900">{{ $language_code->name }}</h3>
                <p class="text-md font-medium leading-6 text-gray-900">{{ $language_code->description }}</p>
            </div>
        </div>
        @endforeach
    </div>
</x-guestLayout>