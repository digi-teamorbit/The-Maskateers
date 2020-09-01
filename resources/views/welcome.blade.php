@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

  <body>

    <section class="main-banner">
      <?php $counter=0; ?>
      <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        @if ($banner)
        <div class="carousel-inner">
        @foreach ($banner as $banner_image)
          <div class="item {{ $counter==0 ? 'active' : ''}}">
            <div class="img_banner">
              <img src="{{asset($banner_image->image)}}" alt="Los Angeles">
            </div>
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php $counter++; ?>

        @endforeach
        </div>
        @endif
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </section>
    <section class="makes-ppe-sec1">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="mps-img">
              <img src="{{asset('images/mps-img1.jpg')}}" class="img-responsive" alt="mps-img1">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mps-content">
              <h2>30,096+</h2>
              <h3>Masks and PPE donated</h3>
              <ul>
                <li><p>one purchased</p><img src="{{asset('images/one-purchased.png')}}" class="img-responsive" alt="one-purchased"></li>
                <li><p><strong>=</strong></p></li>
                <li><p>one purchased</p><img src="{{asset('images/one-purchased.png')}}" class="img-responsive" alt="one-purchased"></li>
              </ul>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              <a href="#" class="btn-red">Learm more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="our-prod-sec1">
      <div class="container">
        <h2 class="subheadting-h2">Our Products</h2>
        <h3 class="main-heading-h3">MASK</h3>
        <div class="row mt-20">
          <div class="col-sm-3">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                      <img class="pic-1" src="{{asset('images/prod-img1.jpg')}}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-random"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                    </ul>
                    <a class="add-to-cart" href="{{route('cart_page')}}">Add to cart</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="{{route('product_detail')}}">Product</a></h3>
                    <span class="price">$12.00</span>
                </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                      <img class="pic-1" src="{{asset('images/prod-img2.jpg')}}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-random"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                    </ul>
                    <a class="add-to-cart" href="{{route('cart_page')}}">Add to cart</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="{{route('product_detail')}}">Product</a></h3>
                    <span class="price">$12.00</span>
                </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                      <img class="pic-1" src="{{asset('images/prod-img3.jpg')}}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-random"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                    </ul>
                    <a class="add-to-cart" href="{{route('cart_page')}}">Add to cart</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="{{route('product_detail')}}">Product</a></h3>
                    <span class="price">$12.00</span>
                </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                      <img class="pic-1" src="{{asset('images/prod-img4.jpg')}}">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-random"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                    </ul>
                    <a class="add-to-cart" href="{{route('cart_page')}}">Add to cart</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="{{route('product_detail')}}">Product</a></h3>
                    <span class="price">$12.00</span>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="partners-sec1">
      <div class="container">
        <h2 class="subheadting-h2">Our Community Partners</h2>
        <div class="row">
          @foreach ($partners as $partner)
          <div class="col-sm-4">
            <div class="partner-img">
              <a name="{{$partner->name}}" href="{{url($partner->url)}}"><img src="{{asset($partner->image)}}" class="img-responsive" alt="partn-img"></a>
            </div>
          </div>
          @endforeach
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