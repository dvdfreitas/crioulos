<x-guestLayout>
    @foreach ($language_codes as $language_code)
        <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-4">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $language_code->name }}</h3>
            </div>
        </div>
    @endforeach    
</x-guestLayout>