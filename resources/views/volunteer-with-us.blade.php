@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <section class="inner-banner">
      <div class="container">
        <div class="inner-banner-content">
          <h1>VOLUNTEER WITH US</h1>
        </div>
      </div>
    </section>
    <section class="volunteer-sec1">
      <div class="container">
        <div class="volun-content1">
          <h2 class="subheadting-h2">{{$volunteer->name}}</h2>
          <?= html_entity_decode($volunteer->content) ?>
        </div>
        <p>ZIPPER CONTACTS – FIRST POINT OF CONTACT TO GET STARTED!</p>
        <div class="cont-via-sec1">
          <ul>
            @foreach ($zippers as $zipper)
            <li><p>{{$zipper->zipper_name}}</p> <a href="tel:{{$zipper->phone_number}}">CONTACT VIA PHONE</a></li>
            @endforeach
            <div class="clearfix"></div>
          </ul>  
          <div class="clearfix"></div>
        </div>
        <div class="looking-support-form1">
          <h2 class="subheadting-h2">Looking to support in other ways?</h2>
          <form action="{{route('contactUsSubmit')}}" method="post">
            <label>Name *</label>
            <input name="name" type="text" class="form-control">
            <label>Email *</label>
            <input name="email" type="email" class="form-control">
            <label>Phone *</label>
            <input name="phone" type="text" class="form-control">
            <label>Zip-code *</label>
            <input name="zip_code" type="text" class="form-control">
            <label>How are you interested in supporting us?</label>
            <textarea rows="9" name="message" class="form-control"></textarea>
            <button type="submit" class="btn-red">Submit</button>
          </form>
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