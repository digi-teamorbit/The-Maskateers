@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <section class="inner-banner">
      <div class="container">
        <div class="inner-banner-content">
          <h1>Media and Testimonials</h1>
        </div>
      </div>
    </section>
    <section class="aricle-page">
      <div class="container">
        <h2 class="subheading-linne"><span>Latest News</span></h2>
        <div class="row">
          
              @foreach ($news as $news_item)
          <div class="col-md-4 col-sm-4">
            
            <div class="arcles-box">  
              <div class="client-box">
                <img src="{{asset($news_item->image)}}" class="img-responsive main-cimg" alt="shop-now-img1">
                <div class="clinetbox-content">
                  <span class="date-1">14<br>june</span>
                </div>
              </div>
              <div class="clinetbox-content1">
                  <a href="#" class="btn-red">Design trends</a>
                  <h5>{{$news_item->name}}</h5>                  
                  <?= html_entity_decode($news_item->short_detail) ?>
                  <a href="{{url('/media-and-testimonials/'.$news_item->id)}}" class="clr-red">CONTINUE READING</a>
                </div>
            </div>
          </div>
                 @endforeach
          
        </div>
      </div>
    </section>
     <section class="testi-page">
      <div class="container">
        <h2 class="subheading-linne"><span>CUSTOMER REVIEWS</span></h2>
        <div class="owl-carousel" id="tsti-slide">
          @foreach ($reviews as $review)
          <div class="">
            <div class="test-box">
              <img src="{{asset($review->image)}}" class="img-responsive" alt="testi-img1">
              <?= html_entity_decode($review->comments) ?>
              <p><strong>{{$review->name}}</strong> {{$review->verified}}</p>
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