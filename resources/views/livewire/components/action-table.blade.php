<div class="flex justify-between items-center">
    <div class="flex items-center space-x-2 w-full">
        <div class="w-full max-w-xs min-w-[200px]">
            <div class="relative">
                <input wire:model.debounce.300ms='search'
                    class="w-full bg-main-bg dark:bg-dark-main-bg placeholder:text-slate-400 text-main-text text-sm border border-gray-200 dark:border-[#393939] rounded-md pl-3 pr-28 py-2 transition duration-300 ease focus:outline-none focus:border-main-border/80 dark:focus:border-main-border/80 hover:border-gray-300 shadow-sm focus:shadow"
                    placeholder="{{ $searchPlaceholder }}" />
                <button
                    class="absolute top-1 right-1 flex items-center space-x-1 rounded bg-secondary-bg/80 py-1 px-2.5 border border-transparent text-center text-sm text-dark-main-text transition-all shadow-smdisabled:pointer-events-none font-normal"
                    type="button" disabled>
                    <i class="fa-solid fa-magnifying-glass text-sm"></i>
                    <span>
                        Search
                    </span>
                </button>
            </div>
        </div>

        {{-- filter dropdown --}}
        @if ($showFilter)
            <div x-data="{ isOpen: false }" class="relative w-full">
                <button @click="isOpen = !isOpen"
                    class="px-3 py-2 w-full sm:min-w-[150px] sm:max-w-[150px] bg-secondary-bg hover:bg-secondary-bg/90 rounded-md text-sm text-dark-main-text flex justify-between space-x-1 items-center"
                    type="button">
                    <span>{{ $selectedFilter ?: 'All' }}</span>
                    <i class="fa-solid" :class="isOpen ? 'fa-chevron-up' : 'fa-chevron-down'"></i>
                </button>
                <ul role="menu" x-show="isOpen" @click.away="isOpen = false"
                    class="absolute left-0 mt-2 z-10 w-full sm:min-w-[150px] sm:max-w-[150px] overflow-auto rounded-lg border border-slate-200 bg-main-bg p-1.5 shadow-lg focus:outline-none">
                    @foreach ($filterOptions as $option)
                        <li role="menuitem" wire:click="$set('selectedFilter', {{ $option['id'] }})"
                            class="cursor-pointer rounded-md text-main-text dark:text-dark-main-text flex w-full text-sm items-center p-3 transition-all hover:bg-gray-100 focus:bg-gray-100">
                            {{ $option['name'] }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
    <button
        class="px-3 py-2 min-w-40 max-w-48 bg-secondary-bg hover:bg-secondary-bg/90 rounded-md text-sm text-dark-main-text transition-all duration-300">
        {{ $createButtonText }}
    </button>
</div>
