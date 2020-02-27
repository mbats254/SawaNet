@extends('admin.ops.app')
@section('ops')
    <div class="content">
        <h5>Products</h5>

        <table class="table mt-4">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Merchant</th>
                <th>Price</th>
                <th>Type</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td><i>{{ @++$i }}</i></td>
                    <td><a href="{{ url("home/product/$product->id") }}">{{ $product->name }}</a></td>
                    <td>{{ $product->merchant->name }}</td>
                    <td>{{ currency($product->price) }}</td>
                    <td>{{ $product->type }}</td>
                    <td class="text-right">
                        <a href="{{ url("home/product/$product->id") }}" class="btn btn-outline-info">View &raquo;</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $products->links() }}
    </div>
@endsection