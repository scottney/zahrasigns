@extends('layouts.app')

@section('auth-content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <h2 class="text-uppercase mt-3">
                        <div class="card rounded-pill shadow">
                            <div class="card-body text-center">
                                <b>Blog Management</b>
                            </div>
                        </div>
                    </h2>
                </div>

                <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9"></div>
            </div>
            <!-- Start of blog navigation -->
            <div class="row mt-5">
                <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>

                <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 p-3">
                     <div class="card rounded" id="blogCards">
                        <div class="card-header" id="blogCardsHeader">
                            <h5 class="text-center text-white text-uppercase"><b>Create Blog Post</b></h5>
                        </div>

                        <div class="card-body d-flex justify-content-center p-0" id="blogCardsBody">
                            <img src="/images/dashboard-images/create-blog.png" id="create-blog-image">
                        </div>

                        <div class="card-footer text-center" id="blogCardsFooter">
                            <a href="{{ route('blog.create') }}" id="redirectToPage" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Click here to proceed...">
                                <i class="fa-solid fa-circle-arrow-right me-1"></i><b>GO</b>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 p-3">
                    <div class="card rounded" id="blogCards">
                        <div class="card-header" id="blogCardsHeader">
                            <h5 class="text-center text-white text-uppercase"><b>View All Blog Posts</b></h5>
                        </div>

                        <div class="card-body d-flex justify-content-center p-0" id="blogCardsBody">
                            <img src="/images/dashboard-images/view-blog.png" id="view-blog-image">
                        </div>

                        <div class="card-footer text-center" id="blogCardsFooter">
                            <a href="{{ route('show-all-index') }}" id="redirectToPage" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Click here to proceed...">
                                <i class="fa-solid fa-circle-arrow-right me-1"></i><b>GO</b>
                            </a>
                        </div>
                    </div>
                </div>
            
                <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
            </div>
            <!-- End of blog navigation -->
        </div>
    </div>
</div>

@endsection



