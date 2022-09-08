<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('store.position') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- name --}}
                        <div class="mb-4">
                            <x-label for="name" :value="__('Name')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus />
                        </div>
                        <x-button type="submit" formnovalidate="formnovalidate">
                            {{ __('CREATE POSITION') }}
                        </x-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</x-app-layout>
