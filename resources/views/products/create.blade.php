<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastrar Produto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf

                        <!-- Campo para nome do produto -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium ">Nome do Produto</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm text-black" required>

                            @error('name')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>


                        <!-- Campo para quantidade -->
                        <div class="mb-4">
                            <label for="qts" class="block text-sm font-medium ">Quantidade</label>
                            <input type="number" id="qts" name="qts" value="{{ old('qts') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm text-black" required>
                            @error('qts')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Botão de enviar -->
                        <div class="mt-6">
                            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">
                                Cadastrar Produto
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>