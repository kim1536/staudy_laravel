<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="w-full h-full flex justify-between items-center p-6">
                    <div class="text-gray-900">
                        TODO一覧
                    </div>
                    <a href='dashboard/create'>
                        TODO作成
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
