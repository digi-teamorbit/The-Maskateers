@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <section class="inner-banner">
      <div class="container">
        <div class="inner-banner-content">
          <h1>Shop</h1>
        </div>
      </div>
    </section>
    <section class="shop-pg">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3 pl-0">
            <div class="shop-side">
              <h3>PRODUCT CATEGORIES</h3>
              <ul>
                <li><a href="#">Masks</a></li>
                <li><a href="#">Uncategorized</li>
                <li><a href="#">Jewellery <span>(13)</span></a></li>
                <li><a href="#">Man <span>(19)</span></a></li>
                <li><a href="#">Other <span>(20)</span></a></li>
                <li><a href="#">Shoes <span>(10)</span></a></li>
              </ul>
              <div class="clearfix"></div>
              <div class="filter-price">
                <h3>FILTER BY PRICE</h3>
                <div class="slid-div">
                  <input type="range" value="3825" step="25" min="1000" max="12600">
                  <ul class="list-inline">
                    <li>Price:</li>
                    <li><strong>$150</strong></li>
                    <li><strong>$</strong></li>
                    <li><output>3,825</output></li>
                    <li><a href="#" class="flit-btn">Filter</a></li>
                  </ul>
                  
                </div>
              </div>

            </div>
          </div>
          <div class="col-sm-8">
            <div class="product-cont">
              <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-4">
                  <ul class="banner_link">
                    <li><a href="{{route('home')}}">HOME</a></li>
                    <li class="active"><a href="#">Products</a></li>
                  </ul>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-8">
                  <div class="for_show">
                    <p><strong>Show :</strong></p>
                    <ul class="banner_link">
                      <li><a href="#">9</a></li>
                      <li class="active"><a href="#">24</a></li>
                      <li><a href="#">36</a></li>
                    </ul>
                  </div>
                  <select name="orderby" class="orderby">
                    <option value="menu_order" selected="selected">Default sorting</option>
                    <option value="popularity">Sort by popularity</option>
                    <option value="rating">Sort by average rating</option>
                    <option value="date">Sort by latest</option>
                    <option value="price">Sort by price: low to high</option>
                    <option value="price-desc">Sort by price: high to low</option>
                    <option value="upcoming">Sort by upcoming</option>
                  </select>
                </div>
              </div>
            </div> 
            <div class="row mt-20">
              <div class="col-sm-4">
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
              <div class="col-sm-4">
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
              <div class="col-sm-4">
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
            </div> 
            <div class="row mt-20">
              <div class="col-sm-4">
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
              <div class="col-sm-4">
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
              <div class="col-sm-4">
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
            </div> 
            <div class="row mt-20">
              <div class="col-sm-4">
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
              <div class="col-sm-4">
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
              <div class="col-sm-4">
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
            </div> 
            <div class="row mt-20">
              <div class="col-sm-4">
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
              <div class="col-sm-4">
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
              <div class="col-sm-4">
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
            </div> 
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