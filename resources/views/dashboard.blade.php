<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4 text-xl font-semibold">
                        {{ __("You're logged in!") }}
                    </div>

                    <div class="flex flex-col gap-4">
                        <a href="{{route('items.index')}}" class="text-blue-500 hover:text-blue-700 font-bold py-2 px-4 rounded transition ease-in-out duration-300">
                            Product Page
                        </a>
                        <a href="{{route('categories.index')}}" class="text-blue-500 hover:text-blue-700 font-bold py-2 px-4 rounded transition ease-in-out duration-300">
                            Category Page
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
