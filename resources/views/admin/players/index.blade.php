<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Players') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- Positions   --}}
                    {{-- Card --}}
                    <div class="rounded-lg shadow-lg bg-white max-w-sm">
                        <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg"
                                alt="" />
                        </a>
                        <div class="p-6">
                            <h5 class="text-gray-900 text-xl font-medium mb-2">Card title</h5>

                            <x-button type="button"
                                >EDIT</x-button>
                        </div>
                    </div>
                    {{-- See the hooligans who play for you. Who is this --}}
                    {{-- Cards --}}

                </div>
            </div>
        </div>
    </div>
    </div>

</x-app-layout>
