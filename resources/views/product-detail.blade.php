@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <section class="inner-banner">
      <div class="container">
        <div class="inner-banner-content">
          <h1>Product Detail</h1>
        </div>
      </div>
    </section>
    <section class="produc-detail">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="prod-detail-img">
              <img src="{{asset('images/product-detail-img1.jpg')}}" class="img-responsive" alt="product-detail-img1">
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
          <div class="prod_detail_content">
            <div class="product-cont">
              <ul class="banner_link">
                <li><a href="{{route('home')}}">HOME</a></li>
                <li><a href="#">Uncategorized</a></li>
                <li><a href="#">All-Over Print Crop Tee</a></li>
              </ul>
            </div>
            <h3 class="sub_heading">All-Over Print Crop Tee</h3>
            <p class="pro_price">$32.00 – $34.00</p>
            <div class="size-prod">
              <h5>Size</h5>
              <select class="form-control">
                <option value="">Choose an option</option>
                <option value="0">XS</option>
                <option value="1">Small</option>
                <option value="1">Medium</option>
                <option value="1">large</option>
              </select>
              <div class="clearfix"></div>
            </div>
            <div class="quantity_">
              <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="quantity-left-minus btn  btn-number" data-type="minus" data-field="">
                      <span class="glyphicon glyphicon-minus"></span>
                    </button>
                </span>
                <input type="text" id="quantity" name="quantity" class="form-control input-number" value="0" min="1" max="100">
                <span class="input-group-btn">
                    <button type="button" class="quantity-right-plus btn btn-number" data-type="plus" data-field="">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                </span>
              </div>
            </div>
            <a href="{{route('cart_page')}}" class="btn-green">ADD TO CART</a>
            <div class="clearfix"></div>
            <div class="wishlist-s">
              <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>Add to Wishlist</a>
              <a href="#"><i class="fa fa-random" aria-hidden="true"></i>Compare</a>
            </div>
            <hr>
            <p><strong>SKU: </strong> N/A</p>
            <p><strong>Category: </strong> Uncategorised</p>
            <div class="clearfix"></div>
            <p class="disp_inline"><strong>Share:</strong></p>
            <ul class="pro_social">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-envelope"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          </div>
        </div>
      </div>
    </section>
    <section class="product_detail_tabs">
      <div class="container">
      <div class="row">
       <ul class="nav-tabs">
          <li class="active"><a data-toggle="tab" href="#menu0" aria-expanded="true">Description</a></li>
          <li><a data-toggle="tab" href="#menu1">Additional information</a></li>
          <li class=""><a data-toggle="tab" href="#menu2" aria-expanded="false">Reviews (0)</a></li>
          <li class=""><a data-toggle="tab" href="#menu3" aria-expanded="false">SHIPPING &amp; DELIVERY</a></li>
          <li class=""><a data-toggle="tab" href="#menu4" aria-expanded="false">SIZE CHART</a></li>
          <!-- <li class=""><a data-toggle="tab" href="#menu5" aria-expanded="false">Enquiries</a></li> -->
        </ul>
      </div>  
        <div class="row pt-20">
          <div class="tab-content">
            <div id="menu0" class="tab-pane fade active in">
              <p>Looking for you next wardrobe favorite? Well, look no further because this crop tee is printed and sewn to fit you just right. To top that off, the original all-over design is definitely worth showing off, so don’t hesitate to own one of these tees – they’re meant to be adored.</p>
              <ul>
                <li>• 95% polyester, 5% elastane (fabric composition may vary by 1%)</li>
                <li>• Premium knit mid-weight jersey</li>
                <li>• Four-way stretch fabric that stretches and recovers on the cross and lengthwise grains</li>
                <li>• Regular fit</li>
              </ul>
            </div>
            <div id="menu1" class="tab-pane fade">
              <div class="addi_info">
                <h3>ADDITIONAL INFORMATION</h3>
                <div class="adi_p border_bottom">
                  <p class="pull-left"><strong>Weight</strong></p>
                  <p class="pull-right">15000 g</p>
                  <div class="clearfix"></div>
                </div>
                <div class="adi_p pt-10">
                  <p class="pull-left"><strong>Dimensions</strong></p>
                  <p class="pull-right">20 × 102 × 62 cm</p>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div id="menu2" class="tab-pane fade">
              <div class="row">
                <div class="col-sm-6 col-xs-12">
                  <h3>REVIEWS</h3>
                  <p>There are no reviews yet.</p>
                </div>
                <div class="col-sm-6 col-xs-12">
                  <h3>BE THE FIRST TO REVIEW “HOLA 3 PIECE SETTING”</h3>
                  <p>Your email address will not be published. Required fields are marked <span class="staric_">*</span></p>
                  <form class="tab_form">
                    <ul>
                      <li><span>Your rating :</span></li>
                      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                    </ul>
                    <div class="row">
                      <div class="col-sm-12">
                        <label>Your review <span class="staric_">*</span></label>
                        <textarea rows="7" class="form-control"></textarea>
                      </div>
                      <div class="col-sm-6">
                        <label>Name  <span class="staric_">*</span></label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="col-sm-6">
                        <label>Email <span class="staric_">*</span></label>
                        <input type="email" class="form-control">
                      </div>
                      <div class="col-sm-12">
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Save my name, email, and website in this browser for the next time I comment.</label>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <button type="sumbit" class="btn-black">submit</button>
                      </div>
                    </div>
                    
                  </form>
                </div>
              </div>
            </div>
            <div id="menu3" class="tab-pane fade">
              <div class="row">
              <div class="col-sm-6 col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-6">
                    <div class="des-tab-img">
                      <img src="{{asset('images/des-blank.jpg')}}" class="img-responsive" alt="des-img">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="des-tab-img">
                      <img src="{{asset('images/des-blank.jpg')}}" class="img-responsive" alt="des-img">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="des-tab-content">
                  <h5>MAECENAS IACULIS</h5>
                  <p>Vestibulum curae torquent diam diam commodo parturient penatibus nunc dui adipiscing convallis bulum parturient suspendisse parturient a.Parturient in parturient scelerisque nibh lectus quam a natoque adipiscing a vestibulum hendrerit et pharetra fames nunc natoque dui.</p>
                  <h5>MAECENAS IACULIS</h5>
                  <ul>
                    <li>Vestibulum penatibus nunc dui adipiscing convallis bulum parturient suspendisse.</li>
                    <li>Abitur parturient praesent lectus quam a natoque adipiscing a vestibulum hendre.</li>
                    <li>Diam parturient dictumst parturient scelerisque nibh lectus.</li>
                  </ul>
                  <p>Scelerisque adipiscing bibendum sem vestibulum et in a a a purus lectus faucibus lobortis tincidunt purus lectus nisl class eros.Condimentum a et ullamcorper dictumst mus et tristique elementum nam inceptos hac parturient scelerisque vestibulum amet elit ut volutpat.</p>
                </div>
              </div>
            </div>
            </div>
            <div id="menu4" class="tab-pane fade">
              <div>
              <h3>SIZE CHART</h3>
              <p>There are no enquiries yet.</p>
                <table class="table"><tbody><tr><td>&nbsp;</td><td><strong>XS</strong></td><td><strong>S</strong></td><td><strong>M</strong></td><td><strong>L</strong></td><td><strong>XL</strong></td><td><strong>2XL</strong></td><td><strong>3XL</strong></td></tr><tr><td><strong>Chest (inches)</strong></td><td>33 ⅛</td><td>34 ⅝</td><td>36 ¼</td><td>39 ⅜</td><td>42 ½</td><td>45 ⅝</td><td>48 ⅞</td></tr><tr><td><strong>Waist (inches)</strong></td><td>25 ¼</td><td>26 ¾</td><td>28 ⅜</td><td>31 ½</td><td>34 ⅝</td><td>37 ¾</td><td>41 </td></tr></tbody></table>
              </div>
            </div>
            <div id="menu5" class="tab-pane fade">
              <h3>GENERAL ENQUIRIES</h3>
              <p>There are no enquiries yet.</p>
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