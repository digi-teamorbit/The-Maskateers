@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

<section class="inner-banner">
      <div class="container">
        <div class="inner-banner-content">
          <h1>Size Guide</h1>
        </div>
      </div>
    </section>
    <section class="product_detail_tabs product_detail_tabs1">
      <div class="container">
          <div class="row">
            <ul class="nav-tabs">
              <li class="active"><a data-toggle="tab" href="#menu1" aria-expanded="true">Adult</a></li>
              <li class=""><a data-toggle="tab" href="#menu2" aria-expanded="false">Kids</a></li>
            </ul>
          </div>  
          <div class="row pt-20">
            <div class="tab-content">
              <!-- <div id="menu0" class="tab-pane fade active in">
                <p>Looking for you next wardrobe favorite? Well, look no further because this crop tee is printed and sewn to fit you just right. To top that off, the original all-over design is definitely worth showing off, so don’t hesitate to own one of these tees – they’re meant to be adored.</p>
                <ul>
                  <li>• 95% polyester, 5% elastane (fabric composition may vary by 1%)</li>
                  <li>• Premium knit mid-weight jersey</li>
                  <li>• Four-way stretch fabric that stretches and recovers on the cross and lengthwise grains</li>
                  <li>• Regular fit</li>
                </ul>
              </div> -->
              <div id="menu1" class="tab-pane fade active in">
                <div>
                <!-- <h3>SIZE CHART</h3>
                <p>There are no enquiries yet.</p> -->
                  <table class="table">
                    <tbody>
                      <tr>
                        <td><strong>Labeled Size</strong></td>
                        <td><strong>Small</strong></td>
                        <td><strong>Medium</strong></td>
                        <td><strong>Large</strong></td>
                        <td><strong>X-large</strong></td>
                      </tr>
                      <tr>
                        <td>Height  </td>
                        <td>under 5’5″  </td>
                        <td>5’5″ to 5′ 9″ </td>
                        <td>5’9 to 6’1  </td>
                        <td>6’1 and up</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div id="menu2" class="tab-pane fade">
                <div>
                <!-- <h3>SIZE CHART</h3>
                <p>There are no enquiries yet.</p> -->
                  <table class="table">
                    <tbody>
                      <tr>
                        <td><strong>Labeled Size</strong></td>
                        <td><strong>Small</strong></td>
                        <td><strong>Medium</strong></td>
                        <td><strong>Large</strong></td>
                        <td><strong>X-large</strong></td>
                      </tr>
                      <tr>
                        <td>Height  </td>
                        <td>under 5’5″  </td>
                        <td>5’5″ to 5′ 9″ </td>
                        <td>5’9 to 6’1  </td>
                        <td>6’1 and up</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <?= html_entity_decode($guide->content) ?>
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