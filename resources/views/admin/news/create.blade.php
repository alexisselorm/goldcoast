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
                    <form action="{{ route('store.news') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- Title --}}
                        <div class="mb-4">
                            <x-label for="title" :value="__('Title')" />
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title"
                                :value="old('title')" required autofocus />
                        </div>

                        {{-- Categories --}}
                        <div class="mb-4">
                            <x-label for="category_id" :value="__('Category')" />
                            <x-select class="block mt-1 w-full" id="category_id" name="category_id" required autofocus>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </x-select>
                        </div>

                        {{-- Body --}}
                        <div class="mb-4">
                            <x-label for="body" :value="__('Body')" />
                            <textarea id="body" class="block mt-1 w-full" type="text" name="body" required :value="old('body')"
                                autofocus>{{ old('body') }}</textarea>
                        </div>


                        {{-- Image --}}
                        <div class="mb-4">
                            <x-label for="thumbnail" :value="__('Thumbnail')" />
                            <x-input id="thumbnail" class="block mt-1 w-full" type="file" name="thumbnail"
                                :value="old('thumbnail')" required autofocus />
                        </div>
                        <x-button type="submit" formnovalidate="formnovalidate">
                            {{ __('CREATE POST') }}
                        </x-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- CKeditor with Image Upload --}}
    <x-ckeditor />

</x-app-layout>
