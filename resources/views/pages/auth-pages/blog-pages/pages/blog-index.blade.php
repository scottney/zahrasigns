@extends('layouts.app')

@section('auth-content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <!-- Start of system notifications area -->
                    @if($source == 'create')
                        @if(Session::has('create-blog-success'))
                            <div class="alert alert-success p-1" id="system-notification-container">
                                <p class="p-1"><b>{!! Session::get('create-blog-success') !!}</b><button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button></p>
                            </div>
                        @endif

                        @if(Session::has('create-blog-fail'))
                            <div class="alert alert-danger p-1" id="system-notification-container">
                                <p class="p-1"><b>{!! Session::get('create-blog-fail') !!}</b><button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button></p>
                            </div>
                        @endif

                        @if($blog_posts_categories_data->isEmpty())
                            @if(Session::has('blog-categories-missing'))
                                <div class="alert alert-warning p-1" id="system-notification-container">
                                    <p class="p-1"><b>{!! Session::get('blog-categories-missing') !!}</b><button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button></p>
                                </div>
                            @endif
                        @else
                            @if($blog_posts_types_data->isEmpty())
                                @if(Session::has('blog-types-missing'))
                                    <div class="alert alert-info p-1" id="system-notification-container">
                                        <p class="p-1"><b>{!! Session::get('blog-types-missing') !!}</b><button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button></p>
                                    </div>
                                @endif
                            @else
                                @if(Session::has('create-blog-post-type-success'))
                                    <div class="alert alert-success p-1" id="system-notification-container">
                                        <p class="p-1"><b>{!! Session::get('create-blog-post-type-success') !!}</b><button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button></p>
                                    </div>
                                @endif

                                @if(Session::has('create-blog-post-type-fail'))
                                    <div class="alert alert-danger p-1" id="system-notification-container">
                                        <p class="p-1"><b>{!! Session::get('create-blog-post-type-fail') !!}</b><button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button></p>
                                    </div>
                                @endif
                            @endif

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
                                        
                                        <div class="row pt-1">
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                                                <p class="text-sm"><b>N.B.</b><span>Incase of any errors, all errors will appear here</span></p>
                                                <div class="border border-dark border-rounded p-3" id="errorArea">
                                                    @if($errors->any())
                                                    <ul class="list-group">
                                                        @foreach($errors->all() as $error)                                
                                                            <li class="alert alert-danger">
                                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$error}}</strong>
                                                                <button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                                                @if(!$blog_posts_categories_data->isEmpty())
                                                    @if($blog_posts_types_data->isEmpty())
                                                        <a href="{{ route('create-blog-post-type') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog type">Create Blog Type</a>
                                                    @else
                                                        <a href="{{ route('create-blog-post-category-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog category">Create Blog Category</a>
                                                        <br>
                                                        <a href="{{ route('show-all-blog-post-categories') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="View all existing blog categories">View All Blog Categories</a>
                                                        <br>
                                                        <a href="{{ route('show-all-blog-posts-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="View all existing blog categories">View All Blog Posts</a>
                                                        <br>
                                                        <a href="{{ route('create-blog-post-type') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog type">Create Blog Type</a>
                                                        <br>
                                                        <a href="{{ route('view-all-blog-post-types-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="View All Blog Types">View All Blog Types</a>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif($source == 'show-all-blog-posts')
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <p class="mt-3">The table below shows all blog posts that exist within the system</p>

                                        <div class="row pt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <a href="{{ route('blog.create') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="Create a new blog post">Create Blog Post</a>
                                                <br>
                                                <a href="{{ route('show-all-blog-post-categories') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="View all existing blog categories">View All Blog Categories</a>
                                                <br>
                                                <a href="{{ route('create-blog-post-category-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog category">Create Blog Category</a>
                                                <br>
                                                <a href="{{ route('create-blog-post-type') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog type">Create Blog Type</a>
                                                <br>
                                                <a href="{{ route('view-all-blog-post-types-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="View All Blog Types">View All Blog Types</a>
                                            </div>
                                        </div>
                                        
                                        <div class="row pt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <div class="card shadow">
                                                    <div class="card-body">
                                                        @include('pages.auth-pages.blog-pages.pages.mini-pages.blog-posts.view-all-blog-posts')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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
                                                    <a href="{{ route('show-all-blog-posts-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                    data-bs-title="View all existing blog posts">View All Blog Posts</a>
                                                    <br>
                                                    <a href="{{ route('show-all-blog-post-categories') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                    data-bs-title="View all existing blog categories">View All Blog Categories</a>
                                                    <br>
                                                    <a href="{{ route('create-blog-post-type') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog type">Create Blog Type</a>
                                                    <br>
                                                    <a href="{{ route('view-all-blog-post-types-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="View All Blog Types">View All Blog Types</a>
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
                                @if(Session::has('update-blog-post-category-success'))
                                    <div class="alert alert-success p-1" id="system-notification-container">
                                        <p class="p-1"><b>{!! Session::get('update-blog-post-category-success') !!}</b><button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button></p>
                                    </div>
                                @endif

                                @if(Session::has('update-blog-post-category-fail'))
                                    <div class="alert alert-danger p-1" id="system-notification-container">
                                        <p class="p-1"><b>{!! Session::get('update-blog-post-category-fail') !!}</b><button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button></p>
                                    </div>
                                @endif

                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <p class="mt-3">The table below shows all blog post categories that exist within the system</p>

                                        <div class="row pt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <a href="{{ route('blog.create') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="Create a new blog post">Create Blog Post</a>
                                                <br>
                                                <a href="{{ route('show-all-blog-posts-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="View all existing blog posts">View All Blog Posts</a>
                                                <br>
                                                <a href="{{ route('create-blog-post-category-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog category">Create Blog Category</a>
                                                <br>
                                                <a href="{{ route('create-blog-post-type') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog type">Create Blog Type</a>
                                                <br>
                                                <a href="{{ route('view-all-blog-post-types-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="View All Blog Types">View All Blog Types</a>
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
                                                <a href="{{ route('show-all-blog-posts-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="View all existing blog posts">View All Blog Posts</a>
                                                <br>
                                                <a href="{{ route('create-blog-post-category-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog category">Create Blog Category</a>
                                                <br>
                                                <a href="{{ route('show-all-blog-post-categories') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="View all existing blog categories">View All Blog Categories</a>
                                                <br>
                                                <a href="{{ route('create-blog-post-type') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog type">Create Blog Type</a>
                                                <br>
                                                <a href="{{ route('view-all-blog-post-types-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="View All Blog Types">View All Blog Types</a>
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
                                                <a href="{{ route('show-all-blog-posts-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="View all existing blog posts">View All Blog Posts</a>
                                                <br>
                                                <a href="{{ route('create-blog-post-category-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog category">Create Blog Category</a>
                                                <br>
                                                <a href="{{ route('show-all-blog-post-categories') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="View all existing blog categories">View All Blog Categories</a>
                                                <br>
                                                <a href="{{ route('create-blog-post-type') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog type">Create Blog Type</a>
                                                <br>
                                                <a href="{{ route('view-all-blog-post-types-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="View All Blog Types">View All Blog Types</a>
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

                            @if($source == 'create-blog-post-type')
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <p class="mt-3">Please use the form below to create any and all of your blog post types</p>

                                        @if($blog_post_type_data->isEmpty())
                                            <div class="row pt-3">
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12"></div>
                                            </div>
                                        @else
                                        <div class="row pt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <a href="{{ route('blog.create') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="Create a new blog post">Create Blog Post</a>
                                                <br>
                                                <a href="{{ route('show-all-blog-posts-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="View all existing blog posts">View All Blog Posts</a>
                                                <br>
                                                <a href="{{ route('create-blog-post-category-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog category">Create Blog Category</a>
                                                <br>
                                                <a href="{{ route('show-all-blog-post-categories') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="View all existing blog categories">View All Blog Categories</a>
                                                <br>
                                                <a href="{{ route('view-all-blog-post-types-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="View all existing blog types">View All Blog Types</a>
                                            </div>
                                        </div>
                                        @endif

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <div class="card shadow">
                                                    <div class="card=-body">
                                                        @include('pages.auth-pages.blog-pages.pages.mini-pages.blog-post-types.create-blog-post-types')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @elseif($source == 'view-all-blog-post-types')
                                @if(Session::has('update-blog-post-type-success'))
                                    <div class="alert alert-success p-1" id="system-notification-container">
                                        <p class="p-1"><b>{!! Session::get('update-blog-post-type-success') !!}</b><button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button></p>
                                    </div>
                                @endif

                                @if(Session::has('update-blog-post-type-fail'))
                                    <div class="alert alert-danger p-1" id="system-notification-container">
                                        <p class="p-1"><b>{!! Session::get('update-blog-post-type-fail') !!}</b><button type="button" class="btn btn-close float-end" data-bs-dismiss="alert">&times;</button></p>
                                    </div>
                                @endif

                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <p class="mt-3">The table below shows all blog post types that exist within the system</p>

                                        <div class="row pt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <a href="{{ route('blog.create') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="Create a new blog post">Create Blog Post</a>
                                                <br>
                                                <a href="{{ route('show-all-blog-posts-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="View all existing blog posts">View All Blog Posts</a>
                                                <br>
                                                <a href="{{ route('create-blog-post-category-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog category">Create Blog Category</a>
                                                <br>
                                                <a href="{{ route('create-blog-post-type') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog type">Create Blog Type</a>
                                                <br>
                                                <a href="{{ route('view-all-blog-post-types-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="View All Blog Types">View All Blog Types</a>
                                            </div>
                                        </div>
                                        
                                        <div class="row pt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <div class="card shadow">
                                                    <div class="card-body">
                                                        @include('pages.auth-pages.blog-pages.pages.mini-pages.blog-post-types.view-blog-post-types')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @elseif($source == 'view-single-blog-post')
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <p class="mt-3">Below you can view information about the blog post type selected</p>

                                        <div class="row pt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <a href="{{ route('blog.create') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="Create a new blog post">Create Blog Post</a>
                                                <br>
                                                <a href="{{ route('show-all-blog-posts-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="View all existing blog posts">View All Blog Posts</a>
                                                <br>
                                                <a href="{{ route('create-blog-post-category-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog category">Create Blog Category</a>
                                                <br>
                                                <a href="{{ route('show-all-blog-post-categories') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="View all existing blog categories">View All Blog Categories</a>
                                                <br>
                                                <a href="{{ route('create-blog-post-type') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog type">Create Blog Type</a>
                                                <br>
                                                <a href="{{ route('view-all-blog-post-types-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="View All Blog Types">View All Blog Types</a>
                                            </div>
                                        </div>
                                        
                                        <div class="row pt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <div class="card shadow">
                                                    <div class="card-body">
                                                        @include('pages.auth-pages.blog-pages.pages.mini-pages.blog-post-types.view-single-blog-post-type')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @elseif($source == 'edit-blog-post-type')
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <p class="mt-3">Below you can edit information about the blog post type selected</p>

                                        <div class="row pt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <a href="{{ route('blog.create') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="Create a new blog post">Create Blog Post</a>
                                                <br>
                                                <a href="{{ route('show-all-blog-posts-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="View all existing blog posts">View All Blog Posts</a>
                                                <br>
                                                <a href="{{ route('create-blog-post-category-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog category">Create Blog Category</a>
                                                <br>
                                                <a href="{{ route('show-all-blog-post-categories') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" 
                                                data-bs-title="View all existing blog categories">View All Blog Categories</a>
                                                <br>
                                                <a href="{{ route('create-blog-post-type') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create a new blog type">Create Blog Type</a>
                                                <br>
                                                <a href="{{ route('view-all-blog-post-types-index') }}" class="float-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="View All Blog Types">View All Blog Types</a>
                                            </div>
                                        </div>
                                        
                                        <div class="row pt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <div class="card shadow">
                                                    <div class="card-body">
                                                        @include('pages.auth-pages.blog-pages.pages.mini-pages.blog-post-types.edit-single-blog-post-type')
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
                                                @if($blog_posts_types_data->isEmpty())
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="alert alert-info">
                                                                <span><b>N.B.</b> Please create the blog post type data to be able to view other system options</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    @include('pages.auth-pages.blog-pages.pages.mini-pages.blog-posts.create-blog-post')
                                                @endif
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



