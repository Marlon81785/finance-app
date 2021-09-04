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
                        Configure aqui todo o seu sorteio :)
                        <form action="" class="flex flex-col">
                            <label for="titulo">Titulo do sorteio</label>
                            <input name="titulo" type="text" placeholder="Titulo">
                            <label for="numeros">Números para sorteio</label>
                            <select name="numeros" id="">
                                <option value="1000">1000 números (0 - 999)</option>
                                <option value="100">100 números (0 - 99)</option>
                                <option value="255">250 números (0 - 254)</option>
                                <option value="500">500 números (0 - 499)</option>
                            </select>
                            <label for="dataSorteio">Data prevista para sorteio</label>
                            <input name="dataSorteio" type="date" placeholder="Titulo">
                            
                            <!-- File Input -->
                            <label for="imagemDaCapa">Imagem da capa</label>
                            <input name="imagemDaCapa" type="file" wire:model="photo">

                            <label for="imagemCarrossel">Imagem do carrossel (obrigatorio)</label>
                            <input name="imagemCarrossel" type="file" wire:model="photo">

                            <label for="imagemOpcional1">Imagem do carrossel (opcional)</label>
                            <input name="imagemOpcional1" type="file" wire:model="photo">

                            <label for="imagemOpcional2">Imagem do carrossel (opcional)</label>
                            <input name="imagemOpcional2" type="file" wire:model="photo">

                            <label for="imagemOpcional3">Imagem do carrossel (opcional)</label>
                            <input name="imagemOpcional3" type="file" wire:model="photo">

                            <label for="descricao">Descrição do sorteio</label>
                            <textarea name="descricao" id="" rows="10">

                            </textarea>

                            
                            
                            
                            
                            <button type="submit" class="bg-blue-200 hover:bg-gray-100 text-black font-bold py-2 px-4 rounded-full">Salvar</button>
                        </form>

                    </div>

                    <div>
                        preview page

                    </div>
                    

                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>

