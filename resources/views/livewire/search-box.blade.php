<div id="search-box">
    <div>
        <h3 class="text-lg font-semibold text-gray-900 mb-3">Search</h3>
        <div class="w-52 flex rounded-2xl bg-gray-100 py-2 px-3 mb-3 items-center">
            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </span>
            <input wire:model="search"
                class="w-40 ml-1 bg-transparent focus:outline-none focus:border-none focus:ring-0 outline-none border-none text-xs text-gray-800 placeholder:text-gray-400"
                type="text" placeholder="Search...">
        </div>
        <x-button wire:click="update"> Search </x-button>
    </div>
</div>
