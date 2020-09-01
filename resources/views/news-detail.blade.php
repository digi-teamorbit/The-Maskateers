@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

 <section class="aricle-page">
      <div class="container">
        <h2 class="subheading-linne"><span>Latest News</span></h2>
        <div class="row">  
          <div class="col-md-6 col-sm-6">
            <div class="arcles-box">  
              <div class="client-box">
                <img src="{{asset($detail->image)}}" class="img-responsive main-cimg" alt="shop-now-img1">
                <div class="clinetbox-content">
                  <span class="date-1">14<br>june</span>
                </div>
              </div>
              <div class="clinetbox-content1">
                  <a href="#" class="btn-red">Design trends</a>
                  <h5>{{$detail->name}}</h5>
                  <ul>
                    <li>By</li>
                    <li> <a href="#"><img src="{{asset('images/admin-img.png')}}" class="img-circle" alt="admin"> Admin</a></li>
                    <li><a href="#"><i class="fa fa-comment-o"></i><span>0</span></a></li>
                    <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                  </ul>
                  <?= html_entity_decode($detail->detail) ?>
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