{{-- <footer class="bg-white dark:bg-gray-900"> --}}
<footer class="bg-gray-900">
    <div class="grid grid-cols-2 gap-8 px-6 py-8 md:grid-cols-4">
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">Our Club</h2>
            <ul class="text-gray-500 dark:text-gray-400">
                <li class="mb-4">
                    <a href="#" class=" hover:underline">About</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Work With Us</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Contact Us</a>
                </li>
            </ul>
        </div>
        @include('partials.footer._sponsors')
        @include('partials.footer._affiliates')
        @include('partials.footer._legal')
    </div>
    @include('partials.footer._socials')
</footer>
