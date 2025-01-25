@extends('layouts.main')

@section('content')
    <div class="flex justify-between items-center">
        <div class="flex items-center space-x-2 w-full">
            <div class="w-full max-w-xs min-w-[200px]">
                <div class="relative">
                    <input
                        class="w-full bg-main-bg dark:bg-dark-main-bg placeholder:text-slate-400 text-main-text text-sm border border-gray-200 dark:border-[#393939] rounded-md pl-3 pr-28 py-2 transition duration-300 ease focus:outline-none focus:border-main-border/80 dark:focus:border-main-border/80 hover:border-gray-300 shadow-sm focus:shadow"
                        placeholder="Search" />
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
            <div x-data="{ isOpen: false }" class="w-full">
                <button @click="isOpen = !isOpen"
                    class="px-3 py-2 min-w-[150px] max-w-[150px] bg-secondary-bg hover:bg-secondary-bg/90 rounded-md text-sm text-dark-main-text flex justify-center space-x-1 items-center"
                    type="button">
                    <span>
                        All Products
                    </span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <ul role="menu" x-show="isOpen" @click.away="isOpen = false"
                    class="absolute mt-2 z-10 min-w-[150px] max-w-[150px] overflow-auto rounded-lg border border-slate-200 bg-main-bg p-1.5 shadow-lg focus:outline-none">
                    <li role="menuitem"
                        class="cursor-pointer rounded-md text-main-text dark:text-dark-main-text flex w-full text-sm items-center p-3 transition-all hover:bg-gray-100 focus:bg-gray-100">
                        All
                    </li>
                    <li role="menuitem"
                        class="cursor-pointer rounded-md text-main-text dark:text-dark-main-text flex w-full text-sm items-center p-3 transition-all hover:bg-gray-100 focus:bg-gray-100">
                        Foods
                    </li>
                    <li role="menuitem"
                        class="cursor-pointer rounded-md text-main-text dark:text-dark-main-text flex w-full text-sm items-center p-3 transition-all hover:bg-gray-100 focus:bg-gray-100">
                        Drinks
                    </li>
                </ul>
            </div>
        </div>
        <button class="px-3 py-2 min-w-32 bg-secondary-bg hover:bg-secondary-bg/90 rounded-md text-sm text-dark-main-text">
            Add Product
        </button>
    </div>
    <div class="relative overflow-x-auto mt-8">
        <table class="w-full text-sm text-left text-main-text dark:text-dark-main-text">
            <thead class="px-3 bg-main-bg dark:bg-dark-main-bg text-sm">
                <tr>
                    <th class="rounded-s-md px-2 py-3">No</th>
                    <th class="px-2 py-3">Image</th>
                    <th class="px-2 py-3">Name</th>
                    <th class="px-2 py-3">Category</th>
                    <th class="rounded-e-md px-2 py-3">Price</th>
                </tr>
            </thead>
            <tbody>
                <tr></tr>
            </tbody>
        </table>
    </div>
@endsection
