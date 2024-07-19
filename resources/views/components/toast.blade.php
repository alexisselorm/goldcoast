<div x-data="{ showToast: false, message: '' }" x-show="showToast" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-90"
    class="fixed px-4 py-2 text-white bg-green-500 rounded-lg shadow-md bottom-5 right-5" x-text="message"></div>
