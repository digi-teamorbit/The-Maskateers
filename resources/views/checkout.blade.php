@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <section class="inner-banner">
      <div class="container">
        <div class="inner-banner-content">
          <h1>checkout</h1>
        </div>
      </div>
    </section>
    <section class="form-body checkoutPage">
      <div class="container">
        <div class="BlogTitle">
        </div>
        <div class="row">
          <div class="col-md-7 col-lg-7 col-sm-7 col-xs-12">
            <form action="#">
              <a href="#" class="runningBtn">Returning customer? Click here to login</a> <a href="#" class="runningBtn">Have a coupon? Click here to enter your code</a>
              <div class="form-group">
                <input class="form-control" placeholder="Country" type="text">
              </div>
              <div class="form-group">
                <input class="form-control right" placeholder="First Name" type="text">
              </div>
              <div class="form-group">
                <input class="form-control left" placeholder="Last Name" type="text">
              </div>
              <div class="form-group">
                <input class="form-control" id="compnayName" placeholder="Compnay Name " type="text">
              </div>
              <div class="form-group">
                <input class="form-control" id="address" placeholder="Address" type="text">
              </div>
              <div class="form-group">
                <input class="form-control right" placeholder="Town / City" type="text">
              </div>
              <div class="form-group">
                <input class="form-control left" placeholder="Country" type="text">
              </div>
              <div class="form-group">
                <input class="form-control right" placeholder="Phone" type="email">
              </div>
              <div class="form-group">
                <input class="form-control left" placeholder="Email" type="text">
              </div>
              <div class="form-group">
                <input class="form-control" id="compnayName" placeholder="Postcode" type="text">
              </div>
              <div class="form-group">
                <label class="chkbox">
                  <input type="checkbox" value="">
                  Create An Account?</label>
              </div>
              <div class="form-group">
                <textarea class="form-control" id="comment" placeholder="Order Note" rows="5"></textarea>
              </div>
              <div class="form-group">
                <label class="chkbox">
                  <input type="checkbox" value="">
                  Ship to another address</label>
              </div>
            </form>
          </div>
          <div class="col-md-5 col-lg-5 col-sm-5 col-xs-12">
            <div class="YouOrder">
              <h1>Product Name</h1>
              <h5>Product Name Goes Here <span>$99.00</span></h5>
              <h5>Product Name Goes Here <span>$99.00</span></h5>
              <h5>Product Name Goes Here <span>$99.00</span></h5>
              <hr>
              <h2>Item Subtotal <span>$297.00</span></h2>
              <hr>
              <h2> Your Shipping <span>FREE</span></h2>
              <hr>
              <h3> Total Price <span>$297.00</span></h3>
              <hr>
              <div class="radio">
                <label>
                  <input checked="" name="optradio" type="radio">
                  Stripe <img src="{{asset('images/strip.png')}}"></label>
              </div>
              <div class="radio">
                <label>
                  <input checked="" name="optradio" type="radio">
                  Paypal <img src="{{asset('images/pay.png')}}"> </label>
              </div>
              <hr>
              <div class="form-group">
                <label class="chkbox">
                  <input type="checkbox" value="">
                  I have read and agree to the website terms and conditions *</label>
              </div>
              <a class="PaymentMethod-a" href="#">Place Order</a> </div>
          </div>
        </div>
      </div>
    </section>
    
<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection