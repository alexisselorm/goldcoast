<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CREATE A FIXTURE') }}
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
                            <x-label for="opponent_id" :value="__('Opponent')" />
                            <x-select class="block mt-1 w-full" id="opponent_id" name="opponent_id" required autofocus>
                                @foreach ($opponents as $opponent)
                                    <option value={{ $opponent->id }}>{{ $opponent->name }}</option>
                                @endforeach
                            </x-select>
                        </div>
                        <div class="mb-4">
                            <x-label for="competition_id" :value="__('Competition')" />
                            <x-select class="block mt-1 w-full" id="competition_id" name="competition_id" required autofocus>
                                @foreach ($competitions as $competition)
                                    <option value={{ $competition->id }}>{{ $competition->name }}</option>
                                @endforeach
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
