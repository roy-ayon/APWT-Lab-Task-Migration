@extends('layouts.app')

@section('title')
    Edit Product
@endsection

@section('content')
    <form method="POST" action="">
        <h1>Product Details</h1>
        <input type="hidden" id="token">
        @csrf
        {{-- value="{{ @csrf_token() }} --}}
        {{-- {{ csrf_field() }} --}}
        <div class="form-group">
            <label>P Name</label>
            <input type="text" name="p_name" value="{{$product->p_name}}" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label>P Code</label>
            <input type="number" name="p_code" value="{{$product->p_code}}" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label>P desc</label>
            <input type="text" name="p_desc" value="{{$product->p_desc}}" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label>P Category</label>
            <input type="text" name="p_category" value="{{$product->p_category}}"  class="form-control" disabled>
        </div>
        <div class="form-group">
            <label>P Price</label>
            <input type="number" name="p_price" value="{{$product->p_price}}" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label>P Quantity</label>
            <input type="number" name="p_quantity" value="{{$product->p_quantity}}" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label>P Rating</label>
            <input type="text" name="p_rating" value="{{$product->p_rating}}"  class="form-control" disabled>
        </div>
        <div class="form-group">
            <label>P Purchased</label>
            <input type="number" name="p_purchased" value="{{$product->p_purchased}}" class="form-control" disabled>
        </div>
  </form>
  <hr/>
  @foreach($errors->all() as $err)
		{{$err}}<br/>
	@endforeach
@endsection
