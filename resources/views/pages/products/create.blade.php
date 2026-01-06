@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
<x-organisms.product-form
    action="{{ route('products.store') }}"
/>
@endsection
