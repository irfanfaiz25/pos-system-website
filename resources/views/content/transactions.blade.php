@extends('layouts.main')

@section('content')
    <div class="flex space-x-3 pe-16">
        <div class="w-[75%]">

            {{-- Card Categories --}}
            <h1 class="text-xl font-bold text-main-text dark:text-dark-main-text mb-4">
                Explore <span class="font-normal">Categories</span>
            </h1>
            <div class="grid grid-cols-5 gap-4">
                @for ($i = 0; $i < 5; $i++)
                    <div
                        class="p-2 flex items-center space-x-2 bg-main-bg dark:bg-dark-main-bg dark:border-2 border-[#393939] rounded-lg shadow-lg">
                        <img src="{{ asset('storage/img/category2.jpg') }}" alt="category1"
                            class="w-11 h-11 object-cover rounded-lg">
                        <h3 class="text-sm font-semibold text-main-text dark:text-dark-main-text">
                            Burger
                        </h3>
                    </div>
                @endfor
            </div>

            {{-- Card Menu --}}
            <h1 class="text-xl font-bold text-main-text dark:text-dark-main-text mb-4 mt-5">
                Menu
            </h1>
            <div class="grid grid-cols-4 2xl:grid-cols-5 gap-3">
                @for ($i = 0; $i < 6; $i++)
                    <div class="p-3 bg-main-bg dark:bg-dark-main-bg dark:border-2 border-[#393939] rounded-lg shadow-lg">
                        <img src="{{ asset('storage/img/product2.jpg') }}" alt="product"
                            class="w-full h-32 object-cover rounded-lg mb-4">
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
        <div class="w-[25%]">
            <div
                class="fixed top-[123px] bottom-8 w-[25%] bg-main-bg dark:bg-dark-main-bg dark:border-2 border-[#393939] rounded-lg py-3 px-3">
                <h1 class="text-xl font-bold text-main-text dark:text-dark-main-text mb-4">
                    Orders
                </h1>
                <div class="flex flex-col justify-between h-[92%] space-y-4">
                    <div class="space-y-2 overflow-y-auto h-[92%]">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="flex space-x-3 p-2 border-2 border-gray-200/80 dark:border-[#3c3c3c] rounded-lg">
                                <img src="{{ asset('storage/img/product2.jpg') }}" alt="product"
                                    class="w-20 h-20 object-cover rounded-lg">
                                <div class="w-full">
                                    <h3 class="text-sm font-semibold text-main-text dark:text-dark-main-text">
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
                                        <h4 class="text-xl font-bold text-tertiary-text">
                                            IDR 38,000
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div>
                        <div class="h-fit bg-gray-100 p-5 rounded-lg space-y-2">
                            <div class="flex justify-between items-center">
                                <p class="text-sm text-main-text font-normal">
                                    Subtotal
                                </p>
                                <p class="text-sm text-main-text font-medium">
                                    IDR 169,000
                                </p>
                            </div>
                            <div class="flex justify-between items-center pb-2 border-dashed border-b border-gray-400">
                                <p class="text-sm text-main-text font-normal">
                                    PPN (12%)
                                </p>
                                <p class="text-sm text-main-text font-medium">
                                    IDR 20,280
                                </p>
                            </div>
                            <div class="flex justify-between">
                                <h3 class="text-base font-normal text-main-text">
                                    Total
                                </h3>
                                <h3 class="text-base font-semibold text-main-text">
                                    IDR 189,280
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
