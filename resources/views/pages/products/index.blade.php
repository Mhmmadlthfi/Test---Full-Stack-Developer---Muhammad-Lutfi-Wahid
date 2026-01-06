@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <x-organisms.product-table :products="$products" />
@endsection
