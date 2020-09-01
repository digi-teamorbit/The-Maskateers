@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->


    <section class="inner-banner">
      <div class="container">
        <div class="inner-banner-content">
          <h1>Gallery</h1>
        </div>
      </div>
    </section>
    <section class="gallery-sec1">
      <div class="container">
        <h2 class="subheadting-h2">View Our Gallery</h2>
        <div class="row">
          <ul>
            @foreach ($images as $image)
            <li><img src="{{asset($image->image)}}" class="img-responsive" align="gall-img1"></li>
            @endforeach
          </ul>
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