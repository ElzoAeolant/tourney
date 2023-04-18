@extends('layouts.ranking', ['activePage' => 'lock', 'title' => 'Tourney', 'activeButton' => 'EnergyManagement'])

@section('content')
<!--Card body-->
<div class="full-page lock-page" data-color="blue" data-image="img/bg5.jpg">
  <div class="content">
    <div class="col-lg-4 col-m-4 mx-auto">
      <!-- List group-->
      <ul class="list-group shadow">

        <!-- list group item-->
        <li class="list-group-item">
          <!-- Custom content-->
          <div class="">
            <!--Card-->
            <div class="card  text-center">
              <img src="https://inaturalist-open-data.s3.amazonaws.com/photos/69805355/original.jpg" class="card-img-top img-fluid" alt="">

              <!--Card body-->
              <div class="card-body p-0">
                <!--avatar-->
                <a href="" class="avatar xl rounded-circle bg-gray bg-opacity-10 p-0 position-relative mt-n5 d-block mx-auto">
                  <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="avatar-img img-fluid rounded-circle" alt="">
                </a>
                <h5 class="mb-0 pt-3">
                  <a href="" class="text-reset">Noah Pierre</a>
                </h5>
                <span class="text-muted small d-block mb-4">Full stack developer</span>
                <div class="row mx-0 border-top border-bottom">
                  <div class="col-6 text-center border-end py-3">
                    <h5 class="mb-0">2345</h5>
                    <small class="text-muted">Followers</small>
                  </div>
                  <div class="col-6 text-center py-3">
                    <h5 class="mb-0">54</h5>
                    <small class="text-muted">Following</small>
                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                    <span class="text-muted small">Join</span>
                    <strong>April 2014</strong>
                  </li>
                  <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                    <span class="text-muted small">Location</span>
                    <strong>Barcelona, Spain</strong>
                  </li>
                  <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                    <span class="text-muted small d-flex align-items-center">
                      <span class="align-middle lh-1 me-1 size-5 border border-4 border-success rounded-circle d-inline-block"></span>
                      Online
                    </span>
                    <div class="text-end">
                      <a href="#!.html" class="btn btn-sm btn-primary">Follow</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End -->
        </li>
        <!-- End -->

        <!-- list group item-->
        <li class="list-group-item">
          
            
              <div class="">
                <div class="card card-small">
                  <div class="thumbnail">
                    <img alt="Opt alp thumbnail" src="https://inaturalist-open-data.s3.amazonaws.com/photos/69805355/original.jpg">
                    <a href="#/product/awesome-landing-page">
                      <div class="thumb-cover"></div>
                    </a>
                    <div class="details">
                      <div class="user">
                        <div class="user-photo">
                          <img alt="Thumb" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                        </div>
                        <div class="name">User </div>
                      </div>
                      <div class="numbers">
                        <b class="downloads"><i class="fa fa-arrow-circle-o-down"></i> 1124</b>
                        <b class="comments-icon"><i class="fa fa-comment"></i> 10</b>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <div class="card-info">
                    <div class="moving">
                      <a href="#/product/awesome-landing-page">
                        <h3>Awesome Product 1</h3>
                        <p>Be happy with this awesome product, bootstrap rules, hit the ground with the power.</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
         <li class="list-group-item">


          <div class="">
            <div class="card card-small">
              <div class="thumbnail">
                <img alt="Opt alp thumbnail" src="https://inaturalist-open-data.s3.amazonaws.com/photos/69805355/original.jpg">
                <a href="#/product/awesome-landing-page">
                  <div class="thumb-cover"></div>
                </a>
                <div class="details">
                  <div class="user">
                    <div class="user-photo">
                      <img alt="Thumb" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                    </div>
                    <div class="name">User </div>
                  </div>
                  <div class="numbers">
                    <b class="downloads"><i class="fa fa-arrow-circle-o-down"></i> 1124</b>
                    <b class="comments-icon"><i class="fa fa-comment"></i> 10</b>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="card-body p-0">
                <h5 class="mb-0 pt-3">
                  <a href="" class="text-reset">Noah Pierre</a>
                </h5>
                <span class="text-muted small d-block mb-4">Full stack developer</span>
                <div class="row mx-0 border-top border-bottom">
                  <div class="col-6 text-center border-end py-3">
                    <h5 class="mb-0">2345</h5>
                    <small class="text-muted">Followers</small>
                  </div>
                  <div class="col-6 text-center py-3">
                    <h5 class="mb-0">54</h5>
                    <small class="text-muted">Following</small>
                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                    <span class="text-muted small">Join</span>
                    <strong>April 2014</strong>
                  </li>
                  <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                    <span class="text-muted small">Location</span>
                    <strong>Barcelona, Spain</strong>
                  </li>
                  <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                    <span class="text-muted small d-flex align-items-center">
                      <span class="align-middle lh-1 me-1 size-5 border border-4 border-success rounded-circle d-inline-block"></span>
                      Online
                    </span>
                    <div class="text-end">
                      <a href="#!.html" class="btn btn-sm btn-primary">Follow</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- End -->
        </li>
        <li class="list-group-item">


          <div class="">
            <div class="card card-small">
              <div class="thumbnail">
                <img alt="Opt alp thumbnail" src="https://inaturalist-open-data.s3.amazonaws.com/photos/69805355/original.jpg">
                <a href="#/product/awesome-landing-page">
                  <div class="thumb-cover"></div>
                </a>
                <div class="details">
                  <div class="user">
                    <div class="user-photo">
                      <img alt="Thumb" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                    </div>
                    <div class="name">User </div>
                  </div>
                  <div class="numbers">
                    <b class="downloads"><i class="fa fa-arrow-circle-o-down"></i> 1124</b>
                    <b class="comments-icon"><i class="fa fa-comment"></i> 10</b>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="moving">
                <h5 class="mb-0 pt-3">
                  <a href="" class="text-reset">Noah Pierre</a>
                </h5>
                <span class="text-muted small d-block mb-4">Full stack developer</span>
                <div class="row mx-0 border-top border-bottom">
                  <div class="col-6 text-center border-end py-3">
                    <h5 class="mb-0">2345</h5>
                    <small class="text-muted">Followers</small>
                  </div>
                  <div class="col-6 text-center py-3">
                    <h5 class="mb-0">54</h5>
                    <small class="text-muted">Following</small>
                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                    <span class="text-muted small">Join</span>
                    <strong>April 2014</strong>
                  </li>
                  <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                    <span class="text-muted small">Location</span>
                    <strong>Barcelona, Spain</strong>
                  </li>
                  <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                    <span class="text-muted small d-flex align-items-center">
                      <span class="align-middle lh-1 me-1 size-5 border border-4 border-success rounded-circle d-inline-block"></span>
                      Online
                    </span>
                    <div class="text-end">
                      <a href="#!.html" class="btn btn-sm btn-primary">Follow</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- End -->
        </li>
          <!-- End -->
        </li>
        <!-- End -->

        <!-- list group item -->
        <li class="list-group-item">
          <!-- Custom content-->
          <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
              <h5 class="mt-0 font-weight-bold mb-2">Awesome product</h5>
              <p class="font-italic text-muted mb-0 small">Región 1, Ristra</p>
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
@endsection