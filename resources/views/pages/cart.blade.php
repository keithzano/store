@extends('layouts.base')

@section('content')

<section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Cart - {{ Cart::getTotalQuantity()}} items</h5>
          </div>
          <div class="card-body">



           @foreach ($items as $item)
            
           <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="storage/product/{{$item->attributes->image}} "
                  class="w-100" alt="Blue Jeans Jacket" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>{{$item->name}}</strong></p>
                <p>Color: blue</p>
                <p>Size: M</p>
                <form action="{{ route('removeCart') }}" method="POST">
                 @csrf
                  <input type="hidden"  value="{{ $item->id }}" name="id">

                  <button type="submit" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip" title="Remove item">
                    <i class="fas fa-trash"></i>
                  </button>
                </form>
                
              <button type="submit" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
              title="Move to the wish list">
              <i class="fas fa-heart"></i>
            </button>
            <!-- Data -->
          </div>

          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <!-- Quantity -->
            <div class="d-flex mb-4" style="max-width: 300px">

              <form action="{{ route('item.sub') }}" method="POST" >
                @csrf
                <input type="hidden" name="id" value="{{ $item->id}}" >
                <input type="hidden" name="quantity"  value="{{ $item->quantity }}">
                <button class="btn btn-primary px-3 me-2" type="submit" 
                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                <i class="fas fa-minus"></i>
              </button>
            </form>
              

            <div class="form-outline">
              <input id="form1" min="0" name="quantity" value="{{$item->quantity}}" type="number" class="form-control" />
              <label class="form-label" for="form1">Quantity</label>
            </div>

            <form action="{{ route('item.add') }}" method="POST" >
              @csrf
              <input type="hidden" name="id" value="{{ $item->id}}" >
              <input type="hidden" name="quantity"  value="{{ $item->quantity }}">
              <button class="btn btn-primary px-3 ms-2" type="submit" 
              onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
              <i class="fas fa-plus"></i>
            </button>
            </form>
        </div>
        <!-- Quantity -->

        <!-- Price -->
        <p class="text-start text-md-center">
          <strong>Price R{{$item->price}}</strong>
        </p>
        <p class="text-start text-md-center">
          <strong>Sub Total R{{$item->getPriceSum()}}</strong>
        </p>
        <!-- Price -->
      </div>
    </div>
    <!-- Single item -->
    <hr class="my-4" />

            @endforeach

    


</div>
</div>
<div class="card mb-4">
  <div class="card-body">
    <p><strong>Expected shipping delivery</strong></p>
    <p class="mb-0">12.10.2020 - 14.10.2020</p>
  </div>
</div>
<div class="card mb-4 mb-lg-0">
  <div class="card-body">
    <p><strong>We accept</strong></p>
    <img class="me-2" width="45px"
    src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
    alt="Visa" />
    <img class="me-2" width="45px"
    src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
    alt="American Express" />
    <img class="me-2" width="45px"
    src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
    alt="Mastercard" />
    <img class="me-2" width="45px"
    src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.webp"
    alt="PayPal acceptance mark" />
  </div>
</div>
</div>
<div class="col-md-4">
  <div class="card mb-4">
    <div class="card-header py-3">
      <h5 class="mb-0">Summary</h5>
    </div>
    <div class="card-body">
      <ul class="list-group list-group-flush">
        <li
        class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
        Products
        <span>R{{Cart::getSubTotal()}}</span>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center px-0">
        Shipping
        <span>Gratis</span>
      </li>
      <li
      class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
      <div>
        <strong>Total amount</strong>
        <strong>
          <p class="mb-0">(including VAT)</p>
        </strong>
      </div>
      <span><strong>R{{Cart::getTotal()}}</strong></span>
    </li>
  </ul>

    @php
      // Construct variables
  $cartTotal = Cart::getTotal();// 
  $data = array(
      // Merchant details
    'merchant_id' => '10000100',
    'merchant_key' => '46f0cd694581a',
    'return_url' => 'http://www.yourdomain.co.za/return.php',
    'cancel_url' => 'http://www.yourdomain.co.za/cancel.php',
    'notify_url' => 'http://www.yourdomain.co.za/notify.php',
      // Buyer details
    'name_first' => 'First Name',
    'name_last'  => 'Last Name',
    'email_address'=> 'test@test.com',
      // Transaction details
      'm_payment_id' => '1234', //Unique payment ID to pass through to notify_url
      'amount' => number_format( sprintf( '%.2f', $cartTotal ), 2, '.', '' ),
      'item_name' => 'Order#123'
    );



  // If in testing mode make use of either sandbox.payfast.co.za or www.payfast.co.za
  $testingMode = true;
  $pfHost = $testingMode ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
  $htmlForm = '<form action="https://'.$pfHost.'/eng/process" method="post">';
  foreach($data as $name=> $value)
  {
    $htmlForm .= '<input name="'.$name.'" type="hidden" value=\''.$value.'\' />';
  }
  $htmlForm .= '<input type="submit" class="btn btn-primary btn-lg btn-block" value="Pay Now" /></form>';
  echo $htmlForm;
    @endphp

</div>
</div>
</div>
</div>
</div>
</section>


@endsection