@extends('layouts.main')

@section('content')
<div class="w-2/3">
    <div class="grid grid-cols-3 gap-3">
        <div class="p-4 bg-red-200 rounded-lg">
            <img src="{{ asset('storage/img/product1.jpg') }}" alt="product" class="rounded-lg">
            <p>Tes</p>
        </div>
        <div class="p-4 bg-red-200 rounded-lg">
            <p>Tes</p>
        </div>
        <div class="p-4 bg-red-200 rounded-lg">
            <p>Tes</p>
        </div>
    </div>
</div>

@endsection