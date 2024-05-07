<x-guestLayout>
    <div class="my-8">
        <div class="grid grid-cols-4 gap-8 m-10 content-center text-lg">
            <div class="col-span-3 flex flex-col justify-center space-y-4">
                <div class="text-justify space-y-5">
                    <div>
                        <a class="text-justify mt-3 font-bold text-2xl hover:cursor-pointer hover:underline" href="{{ route('history.index') }}"> <-- Voltar atrás</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-8">
        <div class="grid grid-cols-2 gap-8 m-10 content-center text-lg">
            <div class="col-span-3 flex flex-col justify-center space-y-4">
                <a class="mb-2 font-bold text-5xl">Figuras notavéis para o crescimento do crioulo guineense</a>
                <div class="text-justify space-y-5">
                    <p class="">A <a class="font-bold">identidade</a> da <a class="font-bold">língua crioula guineense</a> é moldada por uma <a class="font-bold">variedade de influências</a>, tanto <a class="font-bold">históricas</a> quanto <a class="font-bold">temporâneas</a>.</p>
                    <p></p>
                    <a class="italic text-xl underline">Algumas das figuras mais importantes que contribuíram para a identidade da língua crioula guineense incluem:</a>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-4 gap-8 m-10 content-center text-lg">
            <div class="col-span-3 flex flex-col justify-center">
                <div class="text-justify space-y-5">
                    <a class="font-bold text-4xl  hover:underline" href="{{ route('history-people-amilcar') }}">Amílcar Cabral</a>
                    <p class=""><a class="font-bold">Amílcar Cabral</a> foi uma <a class="font-bold">figura-chave</a> na <a class="font-bold">luta</a> pela <a class="font-bold">independência</a> da <a class="font-bold">Guiné-Bissau</a> e <a class="font-bold">Cabo-Verde</a>. Ele desempenhou um papel relevante na <a class="font-bold">promoção</a> do <a class="font-bold">crioulo guineense</a> como uma <a class="font-bold">língua nacional</a> e <a class="font-bold">símbolo de identidade cultural</a>.</p>

                    <a class="font-bold text-4xl mt-5 flex hover:underline" href="{{ route('history-people-luis') }}">Luís Romano</a>
                    <p class="">Conhecido como um dos <a class="font-bold">pioneiros</a> na <a class="font-bold">pesquisa</a> e <a class="font-bold">desenvolvimento</a> da <a class="font-bold">língua crioula guineense</a>, <a class="font-bold">Luís Romano</a> foi um <a class="font-bold">linguista</a> e <a class="font-bold">professor</a> que trabalhou para estabelecer o <a class="font-bold">crioulo</a> como uma <a class="font-bold">língua de instrução</a> e <a class="font-bold">cultura</a> na <a class="font-bold">Guiné-Bissau</a>.</p>
                </div>
            </div>
        </div>
        <div class="flex justify-end">
            <div class="mt-3 mr-9">
                <a class="font-bold text-2xl hover:cursor-pointer hover:underline" href="">Próximo artigo --></a>
            </div>
        </div>
</x-guestLayout>