<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a new staff') }}
        </h2>
    </x-slot>

    {{-- {{ dd($staff) }} --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('update.staff', $staff->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        {{-- First Name --}}
                        <div class="mb-4">
                            <x-label for="fname" :value="__('First Name')" />
                            <x-input id="fname" class="block mt-1 w-full" type="text" name="fname"
                                value="{{ $staff->fname }}" required autofocus />
                        </div>
                        {{-- Last Name --}}
                        <div class="mb-4">
                            <x-label for="lname" :value="__('Last Name')" />
                            <x-input id="lname" class="block mt-1 w-full" type="text" name="lname"
                                value="{{ $staff->lname }}" required autofocus />
                        </div>
                        {{-- staffs Date of Birth --}}
                        <div class="mb-4">
                            <x-label for="dob" :value="__('Date of Birth')" />
                            <x-input id="dob" class="block mt-1 w-full" type="date" name="dob"
                                value="{{ $staff->dob }}" required autofocus />
                        </div>

                        {{-- Country of origin --}}
                        <div class="mb-4">
                            <x-label for="country" :value="__('Country of Origin')" />
                            <x-input id="country" class="block mt-1 w-full" type="text" name="country"
                                value="{{ $staff->country }}" required autofocus />
                        </div>

                        {{-- Staff Position --}}
                        <div class="mb-4">
                            <x-label for="position_id" :value="__('Position')" />
                            <x-select class="block mt-1 w-full" id="position_id" name="position_id" required autofocus>
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}"
                                        @if ($position->id == $staff->position_id) selected @endif>{{ $position->name }}
                                    </option>
                                @endforeach
                            </x-select>
                        </div>

                        {{-- Date staff Signed --}}
                        <div class="mb-4">
                            <x-label for="joining_date" :value="__('Signing Date')" />
                            <x-input id="joining_date" class="block mt-1 w-full" type="date" name="joining_date"
                                value="{{ $staff->joining_date }}" required autofocus />
                        </div>

                        {{-- staff Image --}}
                        <div class="mb-4">
                            <x-label for="picture" :value="__('Image')" />
                            <x-input id="picture" class="block mt-1 w-full" type="file" name="picture"
                                value="{{ $staff->picture }}" autofocus />
                        </div>

                        <x-button class="">
                            {{ __('EDIT STAFF') }}
                        </x-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</x-app-layout>
