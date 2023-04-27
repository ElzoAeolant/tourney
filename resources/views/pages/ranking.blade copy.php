@extends('layouts.ranking', ['activePage' => 'lock', 'title' => 'Tourney', 'activeButton' => 'EnergyManagement'])

@section('content')
    <!--Card body-->
    <div class="full-page lock-page" data-color="blue" data-image="img/bg5.jpg">
        <div class="content">
            <div class="col-lg-4 col-m-4 mx-auto">
                <!-- List group-->
                <ul class="list-group shadow">
                    <li class="list-group-item">
                        <div class="">
                            <div class="card card-small">
                                <div class="thumbnail">
                                    <img alt="Opt alp thumbnail"
                                        src="https://inaturalist-open-data.s3.amazonaws.com/photos/69805355/original.jpg">
                                    <a href="#/product/awesome-landing-page">
                                        <div class="thumb-cover"></div>
                                    </a>
                                    <div class="details">
                                        <div class="user">
                                            <div class="user-photo">
                                                <img alt="Thumb"
                                                    src="https://bootdey.com/img/Content/avatar/avatar1.png">
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
                                                <span
                                                    class="align-middle lh-1 me-1 size-5 border border-4 border-success rounded-circle d-inline-block"></span>
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
                </ul>
                <!-- End -->

            </div>
        </div>
    </div>
@endsection
