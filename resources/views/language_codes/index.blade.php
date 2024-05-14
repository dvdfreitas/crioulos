<x-guestLayout>
    <div>
        <x-container>
            <h1 class="text-3xl text-center font-bold">Línguas</h1>
            <div class="grid md:grid-cols-2 grid-cols-1 gap-3 my-4">
                @foreach ($language_codes as $language_code)
                <div class="bg-white shadow-md overflow-hidden rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-xl font-semibold mb-4 leading-6 text-gray-900">{{ $language_code->name }}</h3>
                        <p class="text-md font-medium leading-6 text-gray-900">{{ $language_code->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </x-container>
    </div>
</x-guestLayout>