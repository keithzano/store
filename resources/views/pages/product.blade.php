@extends('layouts.base')

@section('content')

<section class="py-5">
	
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="images p-3">

					<div class="text-center p-4"> <img id="main-image" src="{{ asset("storage/product/$product->file_path") }}" width="90%" /> </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="product p-4">
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1">Back</span> </div> <i class="fa fa-shopping-cart text-muted"></i>
					</div>
					<div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Orianz</span>
						<h5 class="text-uppercase">{{$product->name}}</h5>
						<div class="price d-flex flex-row align-items-center"> <span class="act-price">${{$product->price}} </span>
							
						</div>
					</div>
					<p class="about">{{$product->description}}</p>
					<div class="sizes mt-5">
						<h6 class="text-uppercase">Size</h6> <label class="radio"> <input type="radio" name="size" value="S" checked> <span>S</span> </label> <label class="radio"> <input type="radio" name="size" value="M"> <span>M</span> </label> <label class="radio"> <input type="radio" name="size" value="L"> <span>L</span> </label> <label class="radio"> <input type="radio" name="size" value="XL"> <span>XL</span> </label> <label class="radio"> <input type="radio" name="size" value="XXL"> <span>XXL</span> </label>
					</div>
					<div class="cart mt-4 align-items-center">
						<form name="addToCart" action="{{ route('cart.store') }}"  method="POST" enctype="multipart/form-data">
							@csrf

							<input type="hidden" value="{{ $product->id }}" name="id">
							<input type="hidden" value="{{ $product->name }}" name="name">
							<input type="hidden" value="{{ $product->price }}" name="price">
							<input type="hidden" value="{{ $product->file_path }}"  name="image">
							<input type="hidden" value="1" name="quantity">
							<button class="btn btn-danger text-uppercase mr-2 px-4" type="submit">Add to cart</button> 										
						</form> 
						<i class="fa fa-heart text-muted"></i> 
						<i class="fa fa-share-alt text-muted"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>				                            

</section>

@endsection