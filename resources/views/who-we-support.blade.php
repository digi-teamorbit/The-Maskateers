@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->
    
    <section class="inner-banner">
      <div class="container">
        <div class="inner-banner-content">
          <h1>Who We Support</h1>
        </div>
      </div>
    </section>
    <div class="organiz-text">
      <div class="container">
        <h2>ORGANIZATIONS WE SUPPORT</h2>
      </div>
    </div>
    <section class="all-major-sec1">
      <div class="container">
        <h2 class="subheadting-h2">{{$support1->name}}</h2>
        <?= html_entity_decode($support1->content) ?>
        <h2 class="subheadting-h2">{{$support2->name}}</h2>
        <?= html_entity_decode($support2->content) ?>

        <h2 class="subheadting-h2">{{$support3->name}}</h2>
        <?= html_entity_decode($support3->content) ?>

        <h2 class="subheadting-h2">{{$support4->name}}</h2>
        <?= html_entity_decode($support4->content) ?>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img src="{{asset($certifications->image)}}" class="img-responsive" alt="certified-img1">
          </div>
          <div class="col-sm-6">
            <div class="certi-content">
              <h3>{{$certifications->name}}</h3>
              <?= html_entity_decode($certifications->content) ?>
            </div>
          </div>
        </div>
      </div>
    </section> 
    <section class="ppedonate-sec1">
      <div class="container">
        <div class="mps-content">
          <h2>30,096+</h2>
          <h3>Masks and PPE donated</h3>
          <ul>
            <li><img src="{{asset('images/pped-img-1.jpg')}}" class="img-responsive" alt="pped-img-1"></li>
            <li><p>one purchased</p><img src="{{asset('images/one-purchased.png')}}" class="img-responsive" alt="one-purchased"></li>
            <li><p><strong>=</strong></p></li>
            <li><p>one purchased</p><img src="{{asset('images/one-purchased.png')}}" class="img-responsive" alt="one-purchased"></li>
            <li><img src="{{asset('images/pped-img-1.jpg')}}" class="img-responsive" alt="pped-img-1"></li>
            <div class="clearfix"></div>
          </ul>
        </div>
      </div>
    </section>
    <section class="desin-sec12">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="design-content">
              <h3>{{$donations->name}}</h3>
              <?= html_entity_decode($donations->content) ?>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="design-img">
              <img src="{{asset($donations->image)}}" class="img-responsive" alt="desgn-img1">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="dd-cc">
              <h3>{{$organization->name}}</h3>
              <?= html_entity_decode($organization->content) ?>
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