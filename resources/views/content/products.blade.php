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
            <div x-data="{ isOpen: false }" class="relative w-full">
                <button @click="isOpen = !isOpen"
                    class="px-3 py-2 w-full sm:min-w-[150px] sm:max-w-[150px] bg-secondary-bg hover:bg-secondary-bg/90 rounded-md text-sm text-dark-main-text flex justify-center space-x-1 items-center"
                    type="button">
                    <span>All Products</span>
                    <i class="fa-solid" :class="isOpen ? 'fa-chevron-up' : 'fa-chevron-down'"></i>
                </button>
                <ul role="menu" x-show="isOpen" @click.away="isOpen = false"
                    class="absolute left-0 mt-2 z-10 w-full sm:min-w-[150px] sm:max-w-[150px] overflow-auto rounded-lg border border-slate-200 bg-main-bg p-1.5 shadow-lg focus:outline-none">
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
        <button
            class="px-3 py-2 min-w-32 bg-secondary-bg hover:bg-secondary-bg/90 rounded-md text-sm text-dark-main-text transition-all duration-300">
            Add Product
        </button>
    </div>
    <div class="relative mt-8">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-main-text dark:text-dark-main-text">
                <thead>
                    <tr class="px-3 bg-main-bg dark:bg-dark-main-bg text-sm">
                        <th class="rounded-s-md px-2 py-3 text-center">No</th>
                        <th class="px-2 py-3">Image</th>
                        <th class="px-2 py-3">Name</th>
                        <th class="px-2 py-3">Category</th>
                        <th class="px-2 py-3">Price</th>
                        <th class="rounded-e-md px-2 py-3"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="h-2"></tr>
                    <tr class="px-3 bg-main-bg dark:bg-dark-main-bg text-sm">
                        <td class="rounded-s-md px-2 py-3 text-center">
                            1
                        </td>
                        <td class="px-2 py-3">
                            {{-- <div class="h-14 w-20 bg-gray-300 rounded-md"></div> --}}
                            <img src="{{ asset('storage/img/product2.jpg') }}" alt="product"
                                class="h-14 w-20 rounded-md object-cover">
                        </td>
                        <td class="px-2 py-3">
                            Vegetable Burger
                        </td>
                        <td class="px-2 py-3">
                            Burger
                        </td>
                        <td class="px-2 py-3">
                            IDR 19,000
                        </td>
                        <td class="rounded-e-md px-2 py-3">
                            <div x-data="{ isOpen: false }">
                                <button
                                    class="w-6 h-6 bg-gray-100 hover:bg-gray-200 border border-gray-300 text-main-text dark:text-dark-main-text rounded-md flex justify-center items-center cursor-pointer transition-all duration-300"
                                    @click="isOpen = !isOpen">
                                    <i class="fa-solid text-sm transition-transform duration-300"
                                        :class="isOpen ? 'fa-ellipsis rotate-90' : 'fa-ellipsis'"></i>
                                </button>
                                <ul role="menu" x-show="isOpen" @click.away="isOpen = false"
                                    class="absolute mt-2 right-16 z-50 min-w-36 max-w-72 overflow-auto rounded-lg border border-slate-200 bg-main-bg p-1.5 shadow-lg focus:outline-none transition-all duration-500">
                                    <li role="menuitem"
                                        class="cursor-pointer rounded-md text-main-text dark:text-dark-main-text flex w-full text-sm items-center p-3 transition-all hover:bg-gray-100 focus:bg-gray-100">
                                        <i class="fa-solid fa-pencil text-blue-500 pr-2"></i>
                                        Edit
                                    </li>
                                    <li role="menuitem"
                                        class="cursor-pointer rounded-md text-main-text dark:text-dark-main-text flex w-full text-sm items-center p-3 transition-all hover:bg-gray-100 focus:bg-gray-100">
                                        <i class="fa-solid fa-trash text-rose-500 pr-2"></i>
                                        Delete
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
