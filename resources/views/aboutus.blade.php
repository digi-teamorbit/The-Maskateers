@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <section class="inner-banner">
      <div class="container">
        <div class="inner-banner-content">
          <h1>About Us</h1>
        </div>
      </div>
    </section>
    <section class="about-sec12">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="about-content1">
              <h2 class="subheadting-h2">{{ $whatWeDo->name }}</h2>
              <?= html_entity_decode($whatWeDo->content) ?>
            </div> 
          </div>
          <div class="col-sm-6">
            <div class="about-img">
              <img src="{{asset($whatWeDo->image)}}" class="img-responsive" alt="abt-img1">
            </div>
          </div>
        </div>
        <div class="row mt-40">
          <div class="col-sm-6">
            <div class="about-img">
              <img src="{{asset($process->image)}}" class="img-responsive" alt="abt-img1">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="about-content1">
              <h2 class="subheadting-h2">{{$process->name}}</h2>
              <?= html_entity_decode($process->content) ?>
            </div> 
          </div>
        </div>
      </div>
    </section>
    <section class="team-sec12">
      <div class="container">
        <h2 class="subheadting-h2">EXECUTIVE TEAM</h2>
        <div class="row">
          @foreach ($teams as $team)
          <div class="col-sm-4">
            <div class="team-box">
              <a href="{{url($team->url)}}" target="_blank">
              <img src="{{asset($team->image)}}" class="img-responsive">
              <h3>{{$team->name}}</h3>
              <?= html_entity_decode($team->description) ?>
              </a>
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