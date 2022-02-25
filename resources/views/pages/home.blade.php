@extends('layouts.base')

@section('content')
    
    <section class="hero py-5 img-fluid" style="background-image: url('{{ asset('images/slider_1.jpg')}}');background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 my-auto">
                    <h1 >Get up to 30% off on new arrivals</h1>
                    <p>
                        We are here to make you feel special and get your day going from the get go.
                    </p>
                    <p>We give your super value deals on all of our products</p>
                    <a class="btn btn-primary btn-lg" href="tel:+27610717955" role="button"> Shop Now </a>
                </div>
        </div>
    </section>

    <section class="py-5">
        
        <div class="container">
            <h2>Latest Products</h2>
            <div class="row">
               
               @foreach ($products as $products)
                   <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
                    <div class="product"> <a href="{{ route('shop.show',$products->slug) }}"><img src="{{ asset("storage/product/$products->file_path") }}" alt=""></a>
                        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                            <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                            <li class="icon mx-3"><span class="far fa-heart"></span></li>
                            <li class="icon">
                                <form name="addToCart" action="{{ route('cart.store') }}"  method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" value="{{ $products->id }}" name="id">
                                    <input type="hidden" value="{{ $products->name }}" name="name">
                                    <input type="hidden" value="{{ $products->price }}" name="price">
                                    <input type="hidden" value="{{ $products->file_path }}"  name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button type="submit" style="background: none;padding: 0px;border: none;">
                                        <span class="fas fa-shopping-bag"></span>
                                    </button>                                       
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="tag {{$products->category}} ">{{$products->category}}</div>
                    <div class="title pt-4 pb-1">{{$products->name}}</div>
                    <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
                    <div class="price">R{{$products->price}}</div>
                </div>
               @endforeach

            </div>

        </div>
  
    </section>

    

    @include('components.newsletter')

@endsection