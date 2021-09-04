<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de sorteio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div>
                        Configure aqui as informações de contato que aparecera em todos os seus sorteios :)
                        <form action="{{ route('saveContact') }}" method="post" class="flex flex-col">
                            <input hidden type="text" name="_token" value="{{ csrf_token()  }}">

                            <label for="">Nome para contato</label>
                            <input name="name" type="text" placeholder="Nome para contato" value="">
                            <label for="">Telefone</label>
                            <input name="phone" type="text" placeholder="(31) 99124-9623" value="">
                            <button type="submit" class="bg-blue-200 hover:bg-gray-100 text-black font-bold py-2 px-4 rounded-full">Salvar</button>
                        </form>
                    </div>
                    <div class="p-6">
                        <p>coluna 2</p>
                        <h2>{{($data)}}</h2>
                    </div>



                </div>

            </div>
        </div>
    </div>
</x-app-layout>

