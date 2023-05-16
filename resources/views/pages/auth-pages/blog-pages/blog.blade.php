@extends('layouts.app')

@section('auth-content')

<div class="container-fluid" id="blogManagementIndex">
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

                <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                    @if($blog_post_category_data->isEmpty())
                        <div class="alert alert-info p-1 mt-3" id="system-notification-container">
                            <p class="p-1"><b>{!! Session::get('create-blog-post-category') !!}</b><button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button></p>
                        </div>
                    @endif
                </div>
            </div>
            <!-- Start of blog navigation -->
            <div class="row mt-5">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-1">
                            <div class="card rounded" id="blogCards">
                                <div class="card-header" id="blogCardsHeader">
                                    <h5 class="text-center text-white text-uppercase"><b>Create Blog Post Category</b></h5>
                                </div>

                                <div class="card-body d-flex justify-content-center p-0" id="blogCardsBody">
                                    <img src="/images/dashboard-images/create-blog.png" id="create-blog-post-category-image">
                                </div>

                                <div class="card-footer text-center" id="blogCardsFooter">
                                    <a href="{{ route('create-blog-post-category-index') }}" id="redirectToPage" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Click here to proceed...">
                                        <i class="fa-solid fa-circle-arrow-right me-1"></i><b>GO</b>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-1">
                            @if($blog_post_category_data->isEmpty())
                                <div class="card rounded" id="blogCards">
                                    <div class="card-header" id="blogCardsHeader">
                                        <h5 class="text-center text-white text-uppercase"><b>View All Blog Post Categories</b></h5>
                                    </div>

                                    <div class="card-body d-flex justify-content-center p-0" id="blogCardsBody">
                                        <div class="alert alert-info p-1 mt-3" id="system-notification-container">
                                            <p class="p-1"><b>N.B.</b><span>Please create a blog post category so as to view this option</span><button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button></p>
                                        </div>
                                    </div>

                                    <div class="card-footer text-center" id="blogCardsFooter"></div>
                                </div>
                            @else
                                <div class="card rounded" id="blogCards">
                                    <div class="card-header" id="blogCardsHeader">
                                        <h5 class="text-center text-white text-uppercase"><b>View All Blog Post Categories</b></h5>
                                    </div>

                                    <div class="card-body d-flex justify-content-center p-0" id="blogCardsBody">
                                        <img src="/images/dashboard-images/view-blog.png" id="view-blog-post-category-image">
                                    </div>

                                    <div class="card-footer text-center" id="blogCardsFooter">
                                        <a href="{{ route('show-all-blog-post-categories') }}" id="redirectToPage" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Click here to proceed...">
                                            <i class="fa-solid fa-circle-arrow-right me-1"></i><b>GO</b>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                    @if($blog_post_category_data->isEmpty())
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="card rounded" id="blogCards">
                                    <div class="card-header" id="blogCardsHeader"></div>

                                    <div class="card-body d-flex justify-content-center p-0" id="blogCardsBody">
                                        <div class="alert alert-info p-1 mt-3" id="system-notification-container">
                                            <p class="p-1"><b>N.B.</b><span>Please create a blog post category so as to view this option</span><button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button></p>
                                        </div>
                                    </div>

                                    <div class="card-footer text-center" id="blogCardsFooter"></div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="card rounded" id="blogCards">
                                    <div class="card-header" id="blogCardsHeader">
                                        <h5 class="text-center text-white text-uppercase"><b>Create Blog Post</b></h5>
                                    </div>

                                    <div class="card-body d-flex justify-content-center p-0" id="blogCardsBody">
                                        <img src="/images/dashboard-images/create-blog.png" id="create-blog-post-image">
                                    </div>

                                    <div class="card-footer text-center" id="blogCardsFooter">
                                        <a href="{{ route('blog.create') }}" id="redirectToPage" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Click here to proceed...">
                                            <i class="fa-solid fa-circle-arrow-right me-1"></i><b>GO</b>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="card rounded" id="blogCards">
                                    <div class="card-header" id="blogCardsHeader">
                                        <h5 class="text-center text-white text-uppercase"><b>View All Blog Posts</b></h5>
                                    </div>

                                    <div class="card-body d-flex justify-content-center p-0" id="blogCardsBody">
                                        <img src="/images/dashboard-images/view-blog.png" id="view-blog-post-image">
                                    </div>

                                    <div class="card-footer text-center" id="blogCardsFooter">
                                        <a href="{{ route('show-all-blog-posts-index') }}" id="redirectToPage" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Click here to proceed...">
                                            <i class="fa-solid fa-circle-arrow-right me-1"></i><b>GO</b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <!-- End of blog navigation -->
        </div>
    </div>
</div>

@endsection



