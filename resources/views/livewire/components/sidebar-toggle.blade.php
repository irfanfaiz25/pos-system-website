<div x-data="{ isSidebarVisible: @entangle('isSidebarVisible') }">
    <!-- Toggle Button -->
    <button @click="isSidebarVisible = !isSidebarVisible"
        class="lg:hidden p-2 fixed top-4 left-4 z-50 text-main-text dark:text-dark-main-text">
        <i class="fa-solid fa-bars"></i>
    </button>

    <!-- Overlay -->
    <div x-show="isSidebarVisible" @click="isSidebarVisible = false"
        class="fixed inset-0 bg-black bg-opacity-50 z-30 lg:hidden"></div>

    <!-- Sidebar -->
    <div :class="isSidebarVisible ? 'translate-x-0' : '-translate-x-full'"
        class="bg-main-bg dark:bg-[#252525] shadow-lg fixed top-0 left-0 min-h-screen w-[5.5rem] duration-500
text-gray-100 px-3
z-40
pt-20 lg:pt-10 transform lg:translate-x-0">
        <div class="flex lg:hidden items-center mt-2">
            <div
                class="bg-gradient-to-r from-[#F14A00] via-[#F93827] to-[#FF9D23] inline-block text-transparent bg-clip-text">
                <i class="fa-solid fa-seedling text-2xl"></i>
            </div>
            <h1 class="text-tertiary-text font-semibold text-xl ml-2 font-sans">
                Pos <span class="text-fourtiary-text">App.</span>
            </h1>
        </div>

        {{-- Sidebar Menu --}}
        <div class="mt-10 flex flex-col gap-2 relative text-main-text dark:text-dark-main-text">
            @foreach ($sidebarMenu as $menu)
                <a href="{{ route($menu['route']) }}" wire:navigate
                    class="group flex justify-center items-center text-sm h-11 gap-3.5 font-medium p-2 hover:bg-[#f2f2f2] dark:hover:bg-[#252525] hover:text-tertiary-text dark:hover:text-tertiary-text rounded-md {{ request()->is($menu['request']) ? 'bg-[#f2f2f2] dark:bg-[#252525] text-tertiary-text' : 'text-main-text dark:text-dark-main-text' }}">
                    <i class="{{ $menu['icon'] }} text-lg"></i>
                    <!-- Floating Tooltip -->
                    <span
                        class="absolute left-full ml-2 px-2 py-1 bg-[#252525] dark:bg-[#f2f2f2] text-white dark:text-[#252525] text-sm rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                        {{ $menu['name'] }}
                    </span>
                </a>
            @endforeach
        </div>
    </div>
</div>
