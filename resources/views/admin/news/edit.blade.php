<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/admin/news/{{ $single_news->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        {{-- Title --}}
                        <div class="mb-4">
                            <x-label for="title" :value="__('Title')" />
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title"
                                value="{{ $single_news->title }}" required autofocus />
                        </div>

                        {{-- Body --}}
                        <div class="mb-4">
                            <x-label for="body" :value="__('body')" />
                            <textarea id="body" class="block mt-1 w-full" type="text" name="body" required required autofocus rows="6">
                                {{ $single_news->body }}
                            </textarea>
                        </div>

                        {{-- Image --}}
                        <div class="mb-4">
                            <x-label for="thumbnail" :value="__('Thumbnail')" />
                            <x-input id="thumbnail" class="block mt-1 w-full" type="file" name="thumbnail"
                                :value="old('thumbnail')" autofocus />
                        </div>
                        <x-button class="">
                            {{ __("EDIT POST") }}
                        </x-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <x-ckeditor/>

</x-app-layout>
