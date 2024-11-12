<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
        <br>
        <button class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a class="ms-3" href="{{ route('products.create') }}">
                {{ __('Cadastrar produto') }}
            </a>
        </button>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __("Lista de Produtos") }}
            </h2>
            <br>
            @foreach($posts as $post)
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <ul>
                        <li>{{ $post->name }}</li>
                        <li>{{ $post->qts }}</li>
                    </ul>
                </div>
            </div>
            <br>
            @endforeach
        </div>
    </div>
</x-app-layout>