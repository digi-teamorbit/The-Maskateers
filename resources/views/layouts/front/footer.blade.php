<?php $footercms = DB::table('pages')->where('id', 6)->first(); ?>

<!-- Begin: FOOTER -->

<footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="ftr-p">
            <a href="{{App\Http\Traits\HelperTrait::returnFlag(682) }}" target="_blank">Like Us on Facebook <i class="fa fa-facebook"></i></a>
            <p><i class="fa fa-copyright"></i>{{App\Http\Traits\HelperTrait::returnFlag(499) }}</p>
            <a href="tel:{{App\Http\Traits\HelperTrait::returnFlag(1965) }}">EIN: {{App\Http\Traits\HelperTrait::returnFlag(1965) }}</a>
            </div>
          </div>
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <div class="sign-ftr">
              <p><strong>Sign up for our newsletter</strong></p>
              <form method="post" action="{{url('newsletter-submit')}}">
            @csrf
              <input name="email" type="email" class="form-control" placeholder="Your email address">
              <button type="submit" class="btn-red">Sign Up</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
<!-- END Footer -->  

