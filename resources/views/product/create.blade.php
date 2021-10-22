@extends('layouts.app')

@section('title')
    Create Product
@endsection

@section('content')
    <form method="POST" action="">
        <input type="hidden" id="token">
        @csrf
        {{-- value="{{ @csrf_token() }} --}}
        {{-- {{ csrf_field() }} --}}
        <div class="form-group">
            <label>P Name</label>
            <input type="text" name="p_name" value="{{old('p_name')}}" class="form-control">
        </div>
        <div class="form-group">
            <label>P Code</label>
            <input type="number" name="p_code" value="{{old('p_code')}}" class="form-control">
        </div>
        <div class="form-group">
            <label>P desc</label>
            <input type="text" name="p_desc" value="{{old('p_desc')}}" class="form-control">
        </div>
        <div class="form-group">
            <label>P Category</label>
            <input type="text" name="p_category" value="{{old('p_category')}}"  class="form-control">
        </div>
        <div class="form-group">
            <label>P Price</label>
            <input type="number" name="p_price" value="{{old('p_price')}}"  class="form-control">
        </div>
        <div class="form-group">
            <label>P Quantity</label>
            <input type="number" name="p_quantity" value="{{old('p_quantity')}}"  class="form-control">
        </div>
        <div class="form-group">
            <label>P Stock Date</label>
            <input type="datetime-local" name="p_stock_date" value="{{old('p_stock_date')}}"  class="form-control">
        </div>
        <div class="form-group">
            <label>P Rating</label>
            <input type="text" name="p_rating" value="{{old('p_rating')}}"  class="form-control">
        </div>
        <div class="form-group">
            <label>P Purchased</label>
            <input type="number" name="p_purchased" value="{{old('p_purchased')}}"  class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <hr/>
  @foreach($errors->all() as $err)
		{{$err}}<br/>
	@endforeach
@endsection
