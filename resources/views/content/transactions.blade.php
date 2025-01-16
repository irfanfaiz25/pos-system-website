@extends('layouts.main')

@section('content')
    <div class="flex space-x-5">
        <div class="w-2/3">
            <h1 class="text-xl font-bold text-main-text dark:text-dark-main-text mb-4">
                Explore Categories
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
            <h1 class="text-xl font-bold text-main-text dark:text-dark-main-text mb-4 mt-5">
                Menu
            </h1>
            <div class="grid grid-cols-3 gap-5">
                @for ($i = 0; $i < 6; $i++)
                    <div class="p-4 bg-main-bg dark:bg-dark-main-bg dark:border-2 border-[#393939] rounded-lg shadow-lg">
                        <img src="{{ asset('storage/img/product2.jpg') }}" alt="product"
                            class="w-full h-46 object-cover rounded-lg mb-4">
                        <h3 class="text-lg">Vegetable Burger</h3>
                        <h2 class="font-bold text-2xl text-tertiary-text mb-3">IDR 19,000</h2>
                        <div class="flex justify-between space-x-2">
                            <button
                                class="px-3 py-3 w-full text-dark-main-text bg-secondary-bg hover:bg-secondary-bg/90 text-sm rounded-lg">
                                <i class="fa-solid fa-cart-plus"></i> Add To Cart
                            </button>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
