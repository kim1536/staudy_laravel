 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="text-gray-900 mb-2">
                    TODO作成
                </div>
                <form action="{{ route('dashboard.create') }}" method="POST">
                    @csrf
                        <div class="flex items-center ">
                            <input type='text' name="todo_item" class="shadow-sm sm:rounded-lg w-full" value="{{ old('todo_item') }}"/>
                        </div>
                        <div class="mt-2 flex items-center justify-between">
                            <div>
                                @error('todo')
                                    <div class="text-red-500">
                                        <p>{{ $message}}</p>
                                    </div>
                                @enderror
                            </div>
                            <x-primary-button class="shrink-0" type="submit">
                                登録する
                            </x-primary-button>
                        </div>
                </form>
            </div>
            </div>
    </div>
</x-app-layout>
