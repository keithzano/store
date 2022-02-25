@extends('layouts.base')

@section('content')

@include('components.cart')

<!-- if validation in the controller fails, show the errors -->
@if ($errors->any())
   <div class="alert alert-danger">
     <ul>
     @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
     </ul>
   </div>
@endif

<div>

<form action="{{ route('storeproduct') }}" method="post" enctype="multipart/form-data">
        <!-- Add CSRF Token -->
        @csrf
    <div class="form-group">
        <label>Product Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="form-group">
        <label>Product slug</label>
        <input type="text" class="form-control" name="slug" required>
    </div>
    <div class="form-group">
        <label>Product Price</label>
        <input type="text" class="form-control" name="price" required>
    </div>
    <div class="form-group">
        <label>Product description</label>
        <input type="text" class="form-control" name="description" required>
    </div>
    <div class="form-group">
        <label>Product category</label>
        <select name="category" class="form-select">
            <option selected>new</option>
            <option value="best-selling">Best Selling</option>
            <option value="out-of-stock">out of stock</option>
            <option value="new">latest</option>
        </select>
    </div>
    <div class="form-group">
        <input type="file" name="file" required>
    </div>
    <button type="submit">Submit</button>
</form>
@endsection