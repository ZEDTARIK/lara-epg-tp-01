@extends('layout')
@section('content')
<div class="col-md-12 mt-3">
    <div class="card border-primary mb-3">
        <div class="card-header">Product</div>
        <div class="card-body">
            <a href="{{ route('product.create') }}" class="btn btn-success btn-sm"> Add Product </a>

            <div class="row">
                <div class="col-md-6 mx-auto">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
            </div>
            <table class="table table-hover table-bordered mt-3">
                <thead class="text-center">
                    <th>Actions</th>
                    <th>Reference</th>
                    <th>Designation</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Picture</th>
                    <th>InStock</th>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>
                            <a href="{{ route('product.edit', $product->id ) }}" class="btn btn-sm btn-warning">Edit</a>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                        <td>{{ $product->reference }}</td>
                        <td>{{ $product->designation }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->picture }}</td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection