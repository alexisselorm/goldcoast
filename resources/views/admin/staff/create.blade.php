<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a new player') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('store.staff') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <x-label for="fname" :value="__('First Name')" />
                            <x-input id="fname" class="block mt-1 w-full" type="text" name="fname"
                                :value="old('fname')" required autofocus />
                        </div>
                        {{-- Last Name --}}
                        <div class="mb-4">
                            <x-label for="lname" :value="__('Last Name')" />
                            <x-input id="lname" class="block mt-1 w-full" type="text" name="lname"
                                :value="old('lname')" required autofocus />
                        </div>
                        {{-- Players Date of Birth --}}
                        <div class="mb-4">
                            <x-label for="dob" :value="__('Date of Birth')" />
                            <x-input id="dob" class="block mt-1 w-full" type="date" name="dob"
                                :value="old('dob')" required autofocus />
                        </div>

                        {{-- Country of origin --}}
                        <div class="mb-4">
                            <x-label for="country_id" :value="__('Country of Origin')" />
                            <x-select class="block mt-1 w-full" id="country_id" name="country_id" required autofocus>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </x-select>
                        </div>

                        {{-- Staff Position --}}
                        <div class="mb-4">
                            <x-label for="position_id" :value="__('Position')" />
                            <x-select class="block mt-1 w-full" id="position_id" name="position_id" required autofocus>
                                @foreach ($positions as $position)
                                    @if ($position->id > 4)
                                        <option value="{{ $position->id }}">{{ $position->name }}</option>
                                    @endif
                                @endforeach
                            </x-select>
                        </div>

                        {{-- Date Player Signed --}}
                        <div class="mb-4">
                            <x-label for="joining_date" :value="__('Signing Date')" />
                            <x-input id="joining_date" class="block mt-1 w-full" type="date" name="joining_date"
                                :value="old('joining_date')" required autofocus />
                        </div>

                        {{-- Staff Image --}}
                        <div class="mb-4">
                            <x-label for="picture" :value="__('Image')" />
                            <x-input id="picture" class="block mt-1 w-full" type="file" name="picture"
                                :value="old('picture')" required autofocus />
                        </div>

                        <x-button class="">
                            {{ __('ADD STAFF') }}
                        </x-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


    All you players, ASSEMBLE!!!

</x-app-layout>
