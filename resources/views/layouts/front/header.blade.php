<?php $segment = Request::segments();?>

<header class="header_" id="header">
      <!-- Begin: Top Row -->
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-sm-2 col-xs-6">
            <div class="main-logo">
              <div class="logowow fadeIn" data-wow-delay="1s" data-wow-duration="1s">
                <a href="{{route('home')}}"><img src="{{asset($logo->img_path)}}" class="img-responsive" alt=""></a>
              </div>
            </div>
          </div>
          <div class="col-md-7 col-sm-6 col-xs-6">
            <div class="sidenav" id="mySidenav">
              <a class="closebtn" href="javascript:void(0)" onclick="closeNav()">&times;</a>
            </div>
            <div class="mobilecontainer hidden-lg hidden-md">
              <span class="pull-right" onclick="openNav()" style="font-size:30px;cursor:pointer">&#9776;</span>
            </div>
            <div class="main-navigate menuSec">
              <div class="navigation" id="navbar">
                <ul class="navbar-set hidden-xs">
                    <li class="show-on-hover">
                      <a href="#">Our Mission<span class="caret"></span>
                        <span style="display: none;" class="caret"></span>
                      </a>
                      <ul class="dropdown-menu" role="menu">
                        <li class=""><a href="{{route('about_us')}}">About Us</a></li>
                        <li class=""><a href="{{route('who_we_support')}}">Who We Support</a></li>
                        <li class=""><a href="{{route('gallery_page')}}">Gallery</a></li>
                        <li class=""><a href="{{route('faq_page')}}">FAQ</a></li>
                      </ul>
                    </li> 
                    <li><a href="{{route('shop_page')}}">Shop</a></li>
                    <li><a href="{{route('size_guide')}}">Size Guide</a></li>
                    <li class="show-on-hover">
                      <a href="#">More<span class="caret"></span>
                        <span style="display: none;" class="caret"></span>
                      </a>
                      <ul class="dropdown-menu" role="menu">
                        <li class=""><a href="{{route(volunteer_with_us)}}">Volunteer with Us</a></li>
                        <li class=""><a href="{{route('contact_us')}}">Contact Us</a></li>
                        <li class=""><a href="{{route('media_and_testimonials')}}">Media and Testimonials</a></li>
                      </ul>
                    </li> 
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-12 pl-0">
            <ul class="rigester-top">
              <li><a href="{{route('cart_page')}}"><i class="fa fa-shopping-cart"></i><small>0/$0.00</small></a></li>
              <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1960) }}" target="_blank" class="donate-btn">Donate Now</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>