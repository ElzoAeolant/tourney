@extends('layouts.app', ['activePage' => 'lock', 'title' => 'Tourney', 'activeButton' => 'EnergyManagement'])

@section('content')
<div class="full-page lock-page" data-color="blue" data-image="img/bg5.jpg">
<div class="content">
  <div class="">
    <div class="col-lg-4 mx-auto">

      <!-- List group-->
      <ul class="list-group shadow">

        <!-- list group item-->
        <li class="list-group-item">
          <!-- Custom content-->
          <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
              <h5 class="mt-0 font-weight-bold mb-2">Concursante 1234</h5>
              <p class="font-italic text-muted mb-0 small">Región 1, Ristra</p>
              <div class="d-flex align-items-center justify-content-between mt-1">
                <h6 class="font-weight-bold my-2">76 cm</h6>
                <ul class="list-inline">
                  <li class="list-inline-item m-0"><i class="fa fa-diamond"></i> 1° </li>
                </ul>
              </div>
            </div><img src="https://inaturalist-open-data.s3.amazonaws.com/photos/69805355/original.jpg" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
          </div>
          <!-- End -->
        </li>
        <!-- End -->

        <!-- list group item-->
        <li class="list-group-item">
          <!-- Custom content-->
          <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
              <h5 class="mt-0 font-weight-bold mb-2">Awesome product</h5>
              <p class="font-italic text-muted mb-0 small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit fuga autem maiores necessitatibus.</p>
              <div class="d-flex align-items-center justify-content-between mt-1">
                <h6 class="font-weight-bold my-2">$99.00</h6>
                <ul class="list-inline small">
                <li class="list-inline-item m-0"><i class="fa fa-diamond"></i> 2° </li>
                </ul>
              </div>
            </div><img src="https://blogimg.goo.ne.jp/user_image/2b/77/db05b1f5e8cd1b24900a1720264dfaeb.jpg" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
          </div>
          <!-- End -->
        </li>
        <!-- End -->

        <!-- list group item -->
        <li class="list-group-item">
          <!-- Custom content-->
          <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
              <h5 class="mt-0 font-weight-bold mb-2">Awesome product</h5>
              <p class="font-italic text-muted mb-0 small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit fuga autem maiores necessitatibus.</p>
              <div class="d-flex align-items-center justify-content-between mt-1">
                <h6 class="font-weight-bold my-2">$140.00</h6>
                <ul class="list-inline small">
                <li class="list-inline-item m-0"><i class="fa fa-diamond"></i> 2° </li>
                </ul>
              </div>
            </div><img src="https://blogimg.goo.ne.jp/user_image/27/34/ecd31deedd05467fb4544c4274eefb20.jpg" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
          </div>
          <!-- End -->
        </li>
        <!-- End -->

      </ul>
      <!-- End -->
    </div>
  </div>
  </div>
</div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();

            setTimeout(function() {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
@endpush