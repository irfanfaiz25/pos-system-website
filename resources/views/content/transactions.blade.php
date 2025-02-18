@extends('layouts.main')

@section('content')
    <div class="flex space-x-3 pe-16">
        <div class="w-[70%]">

            {{-- Card Categories --}}
            <h1 class="text-xl font-bold text-main-text dark:text-dark-main-text mb-4">
                Explore <span class="font-normal">Categories</span>
            </h1>
            <div class="flex items-start gap-4 overflow-x-auto h-20">
                @for ($i = 0; $i < 6; $i++)
                    <div
                        class="min-w-48 p-2 flex items-center space-x-2 bg-main-bg dark:bg-dark-main-bg dark:border-2 border-[#393939]
                        hover:bg-gray-100 rounded-lg shadow-lg cursor-pointer">
                        <img src="{{ asset('storage/img/category2.png') }}" alt="category1"
                            class="w-11 h-11 object-cover rounded-md">
                        {{-- <div class="w-11 h-11 bg-gray-300 rounded-md"></div> --}}
                        <h3 class="text-sm font-semibold text-main-text dark:text-dark-main-text">
                            Burger
                        </h3>
                    </div>
                @endfor
            </div>

            {{-- Card Menu --}}
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold text-main-text dark:text-dark-main-text mb-4 mt-5">
                    Menu
                </h1>
                <div class="max-w-sm min-w-[150px]">
                    <div class="relative">
                        <input
                            class="w-full bg-main-bg dark:bg-dark-main-bg placeholder:text-slate-400 text-main-text text-sm border border-gray-200 dark:border-[#393939] rounded-md pl-3 pr-28 py-2 transition duration-300 ease focus:outline-none focus:border-main-border/80 dark:focus:border-main-border/80 hover:border-gray-300 shadow-sm focus:shadow"
                            placeholder="Search ..." />
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
            </div>
            <div class="grid grid-cols-3 2xl:grid-cols-4 3xl:grid-cols-5 gap-3">
                @for ($i = 0; $i < 6; $i++)
                    <div class="p-3 bg-main-bg dark:bg-dark-main-bg dark:border-2 border-[#393939] rounded-lg shadow-lg">
                        <img src="{{ asset('storage/img/product2.jpg') }}" alt="product"
                            class="w-full h-32 object-cover rounded-lg mb-4">
                        {{-- <div class="w-full h-32 rounded-lg mb-4 bg-gray-300"></div> --}}
                        <h3 class="text-base">Vegetable Burger Vegetable</h3>
                        <div class="flex justify-between items-center mb-3">
                            <h2 class="font-bold text-lg text-tertiary-text">IDR 19,000</h2>
                            <p class="text-sm text-secondary-text font-medium">9 items</p>
                        </div>
                        <div class="flex justify-between items-center space-x-1">
                            <div class="max-w-xs">
                                <label for="counter-input"
                                    class="mb-1 text-sm font-medium text-gray-900 dark:text-white hidden">Choose
                                    quantity:</label>
                                <div class="relative flex items-center">
                                    <button type="button" id="decrement-button"
                                        class="flex-shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md p-2 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                        <i class="fa-solid fa-minus text-sm"></i>
                                    </button>
                                    <input type="text" id="counter-input" data-input-counter
                                        class="flex-shrink-0 text-gray-900 dark:text-white border-0 bg-transparent text-base font-medium focus:outline-none focus:ring-0 max-w-[2rem] text-center"
                                        value="2" required />
                                    <button type="button" id="increment-button"
                                        class="flex-shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md p-2 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                        <i class="fa-solid fa-plus text-sm"></i>
                                    </button>
                                </div>
                            </div>
                            <button
                                class="p-2 w-full text-dark-main-text bg-secondary-bg hover:bg-secondary-bg/90 text-xs rounded-md">
                                <i class="fa-solid fa-cart-plus"></i> Add To Cart
                            </button>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        {{-- Card Orders --}}
        <div class="w-[30%]">
            <div
                class="fixed top-[123px] bottom-4 w-[30%] bg-main-bg dark:bg-dark-main-bg dark:border-2 border-[#393939] rounded-lg py-3 px-3">
                <h1 class="text-xl font-bold text-main-text dark:text-dark-main-text mb-4">
                    Orders
                </h1>
                <div class="flex flex-col justify-between h-[92%] space-y-4">
                    <div class="space-y-2 overflow-y-auto h-[92%]">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="flex space-x-2 p-2 border-2 border-gray-200/80 dark:border-[#3c3c3c] rounded-lg">
                                <div class="w-[25%]">
                                    <img src="{{ asset('storage/img/product2.jpg') }}" alt="product"
                                        class="w-20 h-20 object-cover rounded-lg">
                                </div>
                                {{-- <div class="w-[25%]">
                                    <div class="w-20 h-20 rounded-lg bg-gray-300"></div>
                                </div> --}}
                                <div class="w-[75%]">
                                    <h3 class="text-xs font-semibold text-main-text dark:text-dark-main-text">
                                        Vegetable Burger Vegetable
                                    </h3>
                                    <h4 class="text-sm font-semibold text-tertiary-text">
                                        IDR 19,000
                                    </h4>
                                    <div class="flex justify-between items-center mt-2">
                                        <div class="max-w-xs">
                                            <label for="counter-input"
                                                class="mb-1 text-sm font-medium text-gray-900 dark:text-white hidden">Choose
                                                quantity:</label>
                                            <div class="relative flex items-center">
                                                <button type="button" id="decrement-button"
                                                    class="flex-shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md p-1 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                    <i class="fa-solid fa-minus text-sm"></i>
                                                </button>
                                                <input type="text" id="counter-input" data-input-counter
                                                    class="flex-shrink-0 text-gray-900 dark:text-white border-0 bg-transparent text-base font-medium focus:outline-none focus:ring-0 max-w-[1.5rem] text-center"
                                                    value="2" required />
                                                <button type="button" id="increment-button"
                                                    class="flex-shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md p-1 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                    <i class="fa-solid fa-plus text-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <h4 class="text-base font-bold text-tertiary-text">
                                            IDR 38,000
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div>
                        <div class="h-fit bg-gray-100 dark:bg-[#393939] p-5 rounded-lg space-y-2">
                            <div class="flex justify-between items-center">
                                <p class="text-sm text-main-text dark:text-dark-main-text font-normal">
                                    Subtotal
                                </p>
                                <p class="text-sm text-main-text dark:text-dark-main-text font-medium">
                                    IDR 169,000
                                </p>
                            </div>
                            <div class="flex justify-between items-center pb-2 border-dashed border-b border-gray-400">
                                <p class="text-sm text-main-text dark:text-dark-main-text font-normal">
                                    PPN (12%)
                                </p>
                                <p class="text-sm text-main-text dark:text-dark-main-text font-medium">
                                    IDR 20,280
                                </p>
                            </div>
                            <div class="flex justify-between items-center">
                                <h3 class="text-sm font-normal text-main-text dark:text-dark-main-text">
                                    Total
                                </h3>
                                <h3 class="text-base font-semibold text-main-text dark:text-dark-main-text">
                                    IDR 189,280
                                </h3>
                            </div>
                        </div>
                        <button
                            class="w-full p-2 bg-secondary-bg hover:bg-secondary-bg/90 rounded-md text-sm mt-2 text-dark-main-text">
                            Process
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
