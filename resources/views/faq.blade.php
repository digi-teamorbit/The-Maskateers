@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <section class="inner-banner">
      <div class="container">
        <div class="inner-banner-content">
          <h1>FAQ</h1>
        </div>
      </div>
    </section>
    <section class="faq-sec1">
      <div class="container">
        <h2 class="subheadting-h2">Please refer to our Facebook page for other questions or contact us directly</h2>
        <div class="faq-btn">
          <a href="{{route('contact_us')}}" class="btn-1">Contact Us</a>
          <a href="{{App\Http\Traits\HelperTrait::returnFlag(682) }}" class="btn-2 pull-right">Connect To Our Facebook Group</a>
        </div>
        <div class="faq-content1c">
          <h2 class="subheadting-h2">FREQUENTLY ASKED QUESTIONS</h2>
          @foreach ($faqs as $faq)
          <div class="for-faq">
                <div class="accordion">{{ $faq->question }}</div>
                  <div class="panel">
                    <?= html_entity_decode($faq->answer) ?>
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