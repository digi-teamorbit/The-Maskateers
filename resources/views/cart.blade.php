@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <section class="inner-banner">
      <div class="container">
        <div class="inner-banner-content">
          <h1>Cart</h1>
        </div>
      </div>
    </section>
<section class="cartsec">
      <div class="container">
        <div class="BlogTitle">
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Item</th>
                  <th class="">Quantity</th>
                  <th>Unit Price</th>
                  <th>Sub Price</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><div class="row">
                    <div class="col-md-3 no-margin"> <img src="{{asset('images/cart1.jpg')}}" alt="" class="img-responsive"> </div>
                    <div class="col-md-9">
                      <h5>Lipsum dolor</h5>
                      <h6>GRAM: <span>20</span></h6>
                      <h6><span>26 Reviews</span></h6>
                    </div>
                  </div></td>
                  <td class="text-center"><input type="text" class="qtystyle" value="1">
                  <a href="" class="update">Update Cart</a></td>
                  <td><h4>$22</h4></td>
                  <td><h4>$44</h4></td>
                  <td><a href="" class="remove">x</a></td>
                </tr>
                <tr>
                  <td><div class="row">
                    <div class="col-md-3 no-margin"> <img src="{{asset('images/cart1.jpg')}}" alt="" class="img-responsive"> </div>
                    <div class="col-md-9">
                      <h5>Lipsum dolor</h5>
                      <h6>GRAM: <span>20</span></h6>
                      <h6><span>26 Reviews</span></h6>
                    </div>
                  </div></td>
                  <td class="text-center"><input type="text" class="qtystyle" value="1">
                  <a href="" class="update">Update Cart</a></td>
                  <td><h4>$22</h4></td>
                  <td><h4>$44</h4></td>
                  <td><a href="" class="remove">x</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="checkoutsec">
            <div class="row">
              <div class="col-md-5"> <a href=""><i class="fa fa-angle-left"></i> Continue Shopping</a> </div>
               <div class="col-md-2 text-center">  </div>
              <div class="col-md-5 text-center">
                <button class="btn btn-block" onclick="window.location.href='{{route('checkout_page')}}'">Proceed To Checkout</button>
                <div class="checkout">
                  <h5>or checkout with</h5>
                  <a href=""><img src="{{asset('images/paypal5.png')}}" alt="" class="img-responsive"></a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="check-out-detail">
              <h2>Sub Total <span>$76</span></h2>
              <h2>Discount  <span>$10</span></h2>
              <h2>Shipping <span>$15</span></h2>
              <h2 class="pink">Total<span class="price pink">$81</span></h2>
            </div>
            <div class="freeshipping">
              <h2>Shipping</h2>
              <span>Courier ($15)</span>
              <h2>Estimate For</h2>
              <span>United Estate,NY,1230</span>
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