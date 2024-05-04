<x-guestLayout>
    <div class="my-8">
        <a class="mb-2 font-bold text-5xl ml-8">Indíce</a>
        <div class="grid grid-cols-4 gap-8 m-10 content-center text-lg">
            <div class="col-span-3 flex flex-col justify-center space-y-4">
                <div class="text-justify space-y-3">
                    <a class="flex font-bold hover:underline text-2xl" href="{{ route('history.notion_origins') }}">Conceito e Origens</a>
                    <a class="flex font-bold hover:underline text-2xl" href="{{ route('history.types') }}">Tipos de Crioulo</a>
                    <a class="flex font-bold hover:underline text-2xl" href="{{ route('history.notion_origins') }}">Personalidades</a>
                </div>
            </div>
        </div>
    </div>
</x-guestLayout>