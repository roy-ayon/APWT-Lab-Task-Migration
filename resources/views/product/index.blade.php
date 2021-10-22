@extends('layouts.app')

@section('title')
    Create Product
@endsection

@section('content')
<h1>Member who get's package</h1>
    <table class="table table-striped table-bordered zero-configuration text-center">
        <thead>
            <tr>
                {{-- <th>Payment ID</th> --}}
                <th>P ID</th>
                <th>P Name</th>
                <th>P Code</th>
                <th>P Desc</th>
                <th>P Category</th>
                <th>P Price</th>
                <th>P Quantity</th>
                <th>P Stock Date</th>
                <th>P Rating</th>
                <th>P Purchased</th>
                <th>Details</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product['id']}}</td>
                <td>{{$product['p_name']}}</td>
                <td>{{$product['p_code']}}</td>
                <td>{{$product['p_desc']}}</td>
                <td>{{$product['p_category']}}</td>
                <td>{{$product['p_price']}}</td>
                <td>{{$product['p_quantity']}}</td>
                <td>{{$product['p_stock_date']}}</td>
                <td>{{$product['p_rating']}}</td>
                <td>{{$product['p_purchased']}}</td>
                <td><a href="/product/details/{{$product->id}}" style="color: #fff" class="btn btn-primary">Details</a></td>
                <td><a href="/product/edit/{{$product->id}}" style="color: #fff" class="btn btn-success">Edit</a></td>
                <td><a href="/product/delete/{{$product->id}}" style="color: #fff" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
