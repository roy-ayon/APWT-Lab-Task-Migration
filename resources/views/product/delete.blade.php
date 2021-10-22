@extends('layouts.app')

@section('title')
    Delete
@endsection

@section('content')
    <form method="POST" action="">
        <h1>Delete Product</h1>
        <input type="hidden" id="token">
        @csrf
        {{-- value="{{ @csrf_token() }} --}}
        {{-- {{ csrf_field() }} --}}
        <div class="form-group">
            <label>P Name</label>
            <input type="text" name="p_name" value="{{$product->p_name}}" class="form-control" disabled>
        </div>

        <button type="submit" class="btn btn-primary">Delete</button>
  </form>
  <hr/>
@endsection
