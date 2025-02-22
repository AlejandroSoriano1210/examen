<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            XXXXXXs
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        XXX
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        XXXX
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        XXXXX
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($xxxxxxs as $xxxxxx)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $xxxxxx->xxx }}
                                        </th>
                                        <td class="px-6 py-4">
                                            <a href="{{route('xxxxxxs.show', $xxxxxx)}}">
                                                {{ $xxxxxx->xxx }}
                                            </a>
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $xxxxxx->xxxx }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $xxxxxx->xxxxx }}
                                        </td>
                                        <td class="px-6 py-4 flex items-center">
                                            <a href="{{ route('xxxxxxs.edit', $xxxxxx) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                            <form method="POST" action="{{ route('xxxxxxs.destroy', $xxxxxx) }}">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('xxxxxxs.destroy', $xxxxxx) }}"
                                                    class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3"
                                                    onclick="event.preventDefault(); if (confirm('¿Está seguro?')) this.closest('form').submit();">
                                                    Eliminar
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-6 text-center">
                        <a href="{{ route('XXXXXXs.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Crear un nuevo XXXXXX
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
