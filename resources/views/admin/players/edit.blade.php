<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a new player') }}
        </h2>
    </x-slot>

    {{-- {{{dd($player)}}} --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('update.player', $player->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        {{-- First Name --}}
                        <div class="mb-4">
                            <x-label for="fname" :value="__('First Name')" />
                            <x-input id="fname" class="block mt-1 w-full" type="text" name="fname"
                                value="{{ $player->fname }}" required autofocus />
                        </div>
                        {{-- Last Name --}}
                        <div class="mb-4">
                            <x-label for="lname" :value="__('Last Name')" />
                            <x-input id="lname" class="block mt-1 w-full" type="text" name="lname"
                                value="{{ $player->lname }}" required autofocus />
                        </div>
                        {{-- Players Date of Birth --}}
                        <div class="mb-4">
                            <x-label for="dob" :value="__('Date of Birth')" />
                            <x-input id="dob" class="block mt-1 w-full" type="date" name="dob"
                                value="{{ $player->dob }}" required autofocus />
                        </div>
                        {{-- weight --}}
                        <div class="mb-4">
                            <x-label for="weight" :value="__('Player Weight (in kg)')" />
                            <x-input id="weight" class="block mt-1 w-full" type="number" name="weight"
                                value="{{ $player->weight }}" required autofocus />
                        </div>
                        {{-- Height --}}
                        <div class="mb-4">
                            <x-label for="height" :value="__('Player Height (in cm)')" />
                            <x-input id="height" class="block mt-1 w-full" type="number" name="height"
                                value="{{ $player->height }}" required autofocus />
                        </div>
                        {{-- Country of origin --}}
                        <div class="mb-4">
                            <x-label for="country_id" :value="__('country')" />
                            <x-select class="block mt-1 w-full" id="country_id" name="country_id" required autofocus>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}"
                                        @if ($country->id == $player->country_id) selected @endif>{{ $country->name }}
                                    </option>
                                @endforeach
                            </x-select>
                        </div>
                        {{-- Shirt Number --}}
                        <div class="mb-4">
                            <x-label for="player_number" :value="__('Player Shirt Number')" />
                            <x-input id="player_number" class="block mt-1 w-full" type="number" name="player_number"
                                value="{{ $player->player_number }}" required autofocus />
                        </div>
                        {{-- {{ dd($player) }} --}}
                        {{-- Player Position --}}
                        <div class="mb-4">
                            <x-label for="position_id" :value="__('Position')" />
                            <x-select class="block mt-1 w-full" id="position_id" name="position_id" required autofocus>
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}"
                                        @if ($position->id == $player->position_id) selected @endif>{{ $position->name }}
                                    </option>
                                @endforeach
                            </x-select>
                        </div>

                        {{-- Date Player Signed --}}
                        <div class="mb-4">
                            <x-label for="joining_date" :value="__('Signing Date')" />
                            <x-input id="joining_date" class="block mt-1 w-full" type="date" name="joining_date"
                                value="{{ $player->joining_date }}" required autofocus />
                        </div>

                        {{-- Player Image --}}
                        <div class="mb-4">
                            <x-label for="picture" :value="__('Image')" />
                            <x-input id="picture" class="block mt-1 w-full" type="file" name="picture"
                                value="{{ $player->picture }}" autofocus />
                        </div>

                        <x-button class="">
                            {{ __('EDIT PLAYER') }}
                        </x-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


    All you players, ASSEMBLE!!!

</x-app-layout>
