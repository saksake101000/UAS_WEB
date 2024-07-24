@extends('layouts.app')

@section('title', 'Product List')

@section('contents')
<div class="container">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h1 class="mb-0">List Product</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
    </div>

    <!-- Search Form -->
    <form class="form-inline mb-3" method="GET" action="{{ route('products.search') }}">
        <div class="input-group">
            <input type="text" class="form-control" name="query" placeholder="Search for..." aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Success Alert -->
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    <!-- Product Table -->
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Price</th>
                <th>Product Code</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
            <tr>
                <td class="align-middle">{{ $loop->iteration }}</td>
                <td class="align-middle">{{ $product->title }}</td>
                <td class="align-middle">{{ $product->price }}</td>
                <td class="align-middle">{{ $product->product_code }}</td>
                <td class="align-middle">{{ $product->description }}</td>
                <td class="align-middle">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-secondary mr-1">Detail</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning mr-1">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger m-0">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td class="text-center" colspan="6">No products found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
