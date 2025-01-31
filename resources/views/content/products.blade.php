@extends('layouts.main')

@section('content')
    <div class="mt-5 mb-8">
        <h1 class="text-4xl text-main-text dark:text-dark-main-text font-bold">
            Products
        </h1>
    </div>
    @livewire('products_table')
@endsection
