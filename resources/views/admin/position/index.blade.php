<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Positions') }}
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
                                    <a href="{{ route('create.position') }}">

                                        <x-button>
                                            CREATE NEW POSITION
                                        </x-button>
                                    </a>
                                    <table class="w-full table-auto min-w-max">
                                        <thead>
                                            <tr class="text-sm leading-normal text-gray-600 uppercase bg-gray-200">
                                                <th class="px-6 py-3 text-left">Name</th>
                                                <th class="px-6 py-3 text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm font-light text-gray-600">
                                            {{-- positions --}}
                                            @foreach ($positions as $position)
                                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                    <td class="px-6 py-3 text-left whitespace-nowrap">
                                                        <div class="flex items-center flex-grow">
                                                            <span class="font-semibold">{{ $position->name }}</span>
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-3 text-center">
                                                        <div class="flex justify-center item-center">
                                                            <div
                                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                <a href="{{ route('edit.position', $position->id) }}">
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
                                                                    action="{{ route('delete.position', $position->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit">
                                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                                    </button>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                {{-- @endforeach --}}
                                </div>
                                @endforeach
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
