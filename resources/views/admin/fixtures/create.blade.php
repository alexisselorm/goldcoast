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
                    <form action="{{ route('store.fixture') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- HOME --}}
                        <div class="mb-4">
                            <x-label for="home" :value="__('Home')" />
                            <x-input id="home" class="block mt-1 w-full" type="text" name="home"
                                :value="old('home')" required autofocus />
                        </div>

                        {{-- AWAY --}}
                        <div class="mb-4">
                            <x-label for="away" :value="__('Away')" />
                            <x-input id="away" class="block mt-1 w-full" type="text" name="away"
                                :value="old('away')" required autofocus />
                        </div>

                         <div class="mb-4">
                            <x-label for="competition" :value="__('HOME OR AWAY')" />
                            <x-select class="block mt-1 w-full" id="competition" name="competition" required autofocus>
                                        <option value=0>LEAGUE</option>
                                        <option value=1>CUP</option>
                                        <option value=2>FRIENDLY</option>
                            </x-select>
                        </div>

                        {{-- DATE AND TIME --}}
                        <div class="mb-4">
                            <x-label for="gametime" :value="__('MATCH DAY')" />
                            <x-input id="gametime" class="block mt-1 w-full" type="datetime-local" name="gametime"
                                :value="old('gametime')" required autofocus />
                        </div>

                        <div class="mb-4">
                            <x-label for="isHome" :value="__('HOME OR AWAY')" />
                            <x-select class="block mt-1 w-full" id="isHome" name="isHome" required autofocus>
                                        <option value=1>HOME</option>
                                        <option value=0>AWAY</option>
                            </x-select>
                        </div>
                        <x-button type="submit" formnovalidate="formnovalidate">
                            {{ __('CREATE FIXTURE') }}
                        </x-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</x-app-layout>
