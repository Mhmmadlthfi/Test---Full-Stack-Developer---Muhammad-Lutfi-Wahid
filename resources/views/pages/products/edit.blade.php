@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<x-organisms.product-form
    action="{{ route('products.update', $product) }}"
    method="PUT"
    :product="$product"
/>
@endsection
