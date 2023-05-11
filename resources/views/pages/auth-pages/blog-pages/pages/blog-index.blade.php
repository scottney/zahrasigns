@extends('layouts.app')

@section('auth-content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <!-- Start of system notifications area -->
                    @if($source == 'create')
                        @if($blog_posts_categories_data->isEmpty())
                            @if(Session::has('blog-categories-missing'))
                                <div class="alert alert-warning p-1" id="system-notification-container">
                                    <p class="p-1"><b>{!! Session::get('blog-categories-missing') !!}</b><button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button></p>
                                </div>
                            @endif
                        @else
                            @if(Session::has('create-blog-post-category-success'))
                                <div class="alert alert-success p-1" id="system-notification-container">
                                    <p class="p-1"><b>{!! Session::get('create-blog-post-category-success') !!}</b><button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button></p>
                                </div>
                            @endif

                            @if(Session::has('create-blog-post-category-fail'))
                                <div class="alert alert-danger p-1" id="system-notification-container">
                                    <p class="p-1"><b>{!! Session::get('create-blog-post-category-fail') !!}</b><button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button></p>
                                </div>
                            @endif
                        @endif
                    @endif
                    <!-- End of system notifications area -->

                    <div class="card rounded-pill shadow text-uppercase mt-3" id="blog_management_title_card">
                        <div class="card-body text-center"><b>Blog Management</b></div>
                    </div>

                    <div class="row pt-3 pb-1">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            
                            @if($source == 'create')
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <p class="mt-3">Please use the form provided below to create any and all of your blog posts</p>
                                        <p class="pt-1"><b>N.B.</b><span>You can only create a <b><i>single</i></b> blog post at a time</span></p>
                                        @if(!$blog_posts_categories_data->isEmpty())
                                            <a href="{{ route('create-blog-post-category-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog category">Create Blog Category</a>
                                            <br>
                                            <a href="{{ route('show-all-blog-post-categories') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="View all existing blog categories">View All Blog Categories</a>
                                            <br>
                                            <a href="#" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="View all existing blog categories">View All Blog Posts</a>
                                        @endif
                                    </div>
                                </div>    
                            @endif

                            @if($source == 'create-blog-post-category')
                                <div class="row">
                                    <div class="col-sm12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <p class="mt-3">Please use the form provided below to create any and all of your blog post categories</p>
                                        <p class="pt-1"><b>N.B.</b><span>You can only create a <b><i>single</i></b> blog post category at a time</span></p>

                                        @if($blog_post_category_data->isEmpty())
                                            <div class="row pt-3">
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12"></div>
                                            </div>
                                        @else
                                            <div class="row pt-3">
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                    <a href="{{ route('blog.create') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                    data-bs-title="Create a new blog post">Create Blog Post</a>
                                                    <br>
                                                    <a href="#" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                    data-bs-title="View all existing blog posts">View All Blog Posts</a>
                                                    <br>
                                                    <a href="{{ route('show-all-blog-post-categories') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                    data-bs-title="View all existing blog categories">View All Blog Categories</a>
                                                </div>
                                            </div>
                                        @endif
                                        
                                        <div class="row pt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <div class="card shadow">
                                                    <div class="card-body">
                                                        @include('pages.auth-pages.blog-pages.pages.mini-pages.blog-post-categories.create-blog-post-categories')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @elseif($source == 'show-all-blog-post-categories')
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <p class="mt-3">The table below shows all blog post categories that exist within the system</p>

                                        <div class="row pt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <a href="{{ route('blog.create') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="Create a new blog post">Create Blog Post</a>
                                                <br>
                                                <a href="#" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="View all existing blog posts">View All Blog Posts</a>
                                                <br>
                                                <a href="{{ route('create-blog-post-category-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog category">Create Blog Category</a>
                                            </div>
                                        </div>
                                        
                                        <div class="row pt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <div class="card shadow">
                                                    <div class="card-body">
                                                        @include('pages.auth-pages.blog-pages.pages.mini-pages.blog-post-categories.view-blog-post-categories')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @elseif($source == 'show-blog-post-category')
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <p class="mt-3">Below you can view information about the blog post category selected</p>

                                        <div class="row pt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <a href="{{ route('blog.create') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="Create a new blog post">Create Blog Post</a>
                                                <br>
                                                <a href="#" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="View all existing blog posts">View All Blog Posts</a>
                                                <br>
                                                <a href="{{ route('create-blog-post-category-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog category">Create Blog Category</a>
                                                <br>
                                                <a href="{{ route('show-all-blog-post-categories') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="View all existing blog categories">View All Blog Categories</a>
                                            </div>
                                        </div>
                                        
                                        <div class="row pt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <div class="card shadow">
                                                    <div class="card-body">
                                                        @include('pages.auth-pages.blog-pages.pages.mini-pages.blog-post-categories.view-single-blog-post-category')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @elseif($source == 'edit-blog-post-category')
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <p class="mt-3">Below you can edit information about the blog post category selected</p>

                                        <div class="row pt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <a href="{{ route('blog.create') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="Create a new blog post">Create Blog Post</a>
                                                <br>
                                                <a href="#" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="View all existing blog posts">View All Blog Posts</a>
                                                <br>
                                                <a href="{{ route('create-blog-post-category-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog category">Create Blog Category</a>
                                                <br>
                                                <a href="{{ route('show-all-blog-post-categories') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="View all existing blog categories">View All Blog Categories</a>
                                            </div>
                                        </div>
                                        
                                        <div class="row pt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <div class="card shadow">
                                                    <div class="card-body">
                                                        @include('pages.auth-pages.blog-pages.pages.mini-pages.blog-post-categories.edit-single-blog-post-category')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>

            @if($source == 'create')
                <div class="row pt-3">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="card shadow rounded">
                            <div class="card-body p-0">
                                
                                    @if($blog_posts_categories_data->isEmpty())
                                        <div class="row">
                                            <div class="col-sm12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                @include('pages.auth-pages.blog-pages.pages.mini-pages.blog-post-categories.create-blog-post-categories')
                                            </div>
                                        </div>
                                    @else
                                        <div class="row">
                                            <div class="col-sm12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                @include('pages.auth-pages.blog-pages.pages.mini-pages.blog-posts.create-blog-post')
                                            </div>
                                        </div>
                                    @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>

@endsection



