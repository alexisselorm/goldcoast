<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-orange-200">
                    <!-- component -->
                    <div class="overflow-x-auto">
                        <div class="flex justify-center min-h-screen overflow-hidden font-sans bg-gray-100 min-w-screen">
                            <div class="w-full lg:w-6/6">
                                <div class="bg-white rounded shadow-md">
                                    <div class="bg-white rounded shadow-md">
                                        <a href="{{ route('create.news') }}">

                                            <x-button>
                                                WRITE A NEW BLOG POST
                                            </x-button>
                                        </a>
                                    <table class="w-full table-auto min-w-max">
                                        <thead>
                                            <tr class="text-sm leading-normal text-gray-600 uppercase bg-gray-200">
                                                <th class="px-6 py-3 text-left">Title</th>
                                                <th class="px-6 py-3 text-left">Author</th>
                                                <th class="px-6 py-3 text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm font-light text-gray-600">
                                            @foreach ($news as $single_news)
                                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                    <td class="px-6 py-3 text-left whitespace-nowrap">
                                                        <div class="flex items-center flex-grow">
                                                            <span class="font-semibold">{{ $single_news->title }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-3 text-left">
                                                        <div class="flex items-center">
                                                            <div class="mr-2">
                                                                <img class="w-6 h-6 rounded-full"
                                                                    src="https://randomuser.me/api/portraits/men/{{ $single_news->author->id }}.jpg" />
                                                            </div>
                                                            <span>{{ $single_news->author->name }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-3 text-center">
                                                        <div class="flex justify-center item-center">
                                                            <div
                                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                {{-- Preview news item --}}
                                                                <a href="{{ route('single_news', $single_news->slug) }}"
                                                                    target='_blank'>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                <a href="{{ route('edit.news', $single_news->id) }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke="currentColor">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                <form
                                                                            action="{{ route('delete.news', $single_news->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit">
                                                                                <i class="fa fa-trash"
                                                                                    aria-hidden="true"></i>
                                                                            </button>

                                                                        </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                </div>
                            </div>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>



</x-app-layout>
