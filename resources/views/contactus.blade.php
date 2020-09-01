@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->


    <section class="inner-banner">
      <div class="container">
        <div class="inner-banner-content">
          <h1>Contact Us</h1>
        </div>
      </div>
    </section>
    <section class="volunteer-sec1">
      <div class="container">
        <div class="looking-support-form1">
          <h2 class="subheadting-h2">Get in Touch With Us</h2>
          <form action="{{ route('contactUsSubmit') }}" method="post">
            @csrf
            <label>Name *</label>
            <input name="name" type="text" class="form-control">
            <label>Email *</label>
            <input name="email" type="email" class="form-control">
            <label>Phone *</label>
            <input name="phone" type="text" class="form-control">
            <label>Zip-code *</label>
            <input name="zip_code" type="text" class="form-control">
            <label>How are you interested in supporting us?</label>
            <textarea name="message" rows="9" class="form-control"></textarea>
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