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
                            <p class="mt-3">Please use the text area provided below to create any and all of your blog posts</p>
                            <p class="pt-1"><b>N.B.</b><span>You can only create a <b><i>single</i></b> blog post at a time</span></p>

                            @if($source == 'create')
                                @if(!$blog_posts_categories_data->isEmpty())
                                    <a href="#" class="float-end" id="" data-bs-toggle="modal" data-bs-target="#createBlogCategoryModalForm">Create Blog Category</a>
                                @endif
                            @endif
                        </div>
                    </div>

                    <!-- Create Blog Category Modal Form -->
                    <div class="modal fade" id="createBlogCategoryModalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                @include('pages.auth-pages.blog-pages.pages.mini-pages.create-blog-post-categories')
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row pt-3">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="card shadow rounded">
                        <div class="card-body p-0">
                            @if($source == 'create')
                                @if($blog_posts_categories_data->isEmpty())
                                    <div class="row">
                                        <div class="col-sm12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            @include('pages.auth-pages.blog-pages.pages.mini-pages.create-blog-post-categories')
                                        </div>
                                    </div>
                                @else
                                    <form action="" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 p-3">
                                                <textarea name="blog_body" class="form-control @error('blog_body') is-invalid @enderror p-1" 
                                                id="input_blog_body" autofocus></textarea>

                                                @error('blog_body')
                                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
                                                <div class="card shadow">
                                                    <div class="card-header bg-primary">
                                                        <h3 class="text-center text-uppercase text-white"><b>Blog Information</b></h3>
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                                                <label for="input_blog_title" class="form-label"><b>Blog Title:</b></label>
                                                                <input name="blog_title" class="form-control @error('blog_title') is-invalid @enderror border border-dark rounded-pill p-1" id="input_blog_title" 
                                                                :value="old('blog_title')" autocomplete="blog_title" placeholder="3D SIGNAGE IN AFRICA" minlength="3" maxlength="20" data-bs-toggle="tooltip" 
                                                                data-bs-placement="left" data-bs-title="The blog title should contain between 3-20 characters" autofocus>

                                                                @error('blog_title')
                                                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <hr class="border border-dark mt-3"/>

                                                        <div class="row pt-3">
                                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                                                <label for="input_blog_slug" class="form-label"><b>Blog Slug:</b></label>
                                                                <input name="blog_slug" class="form-control @error('blog_slug') is-invalid @enderror border border-dark rounded-pill p-1" id="input_blog_slug" 
                                                                :value="old('blog_slug')" autocomplete="blog_slug" placeholder="3d-signage-in-africa" minlength="3" maxlength="20" data-bs-toggle="tooltip" 
                                                                data-bs-placement="left" data-bs-title="The blog slug should contain between 3-20 characters" autofocus>

                                                                @error('blog_slug')
                                                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <hr class="border border-dark mt-3"/>

                                                        <div class="row pt-3">
                                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                                                <label for="input_blog_category_name" class="form-label"><b>Blog Category:</b></label>
                                                                <select name="blog_category_id" class="form-control @error('blog_category_id') is-invalid @enderror border border-dark rounded-pill p-1" 
                                                                id="input_blog_category_name" minlength="3" maxlength="95" data-bs-toggle="tooltip" data-bs-placement="left" 
                                                                data-bs-title="The blog category should contain between 3-95 characters" autofocus>
                                                                    <option></option>
                                                                    @if(!$blog_posts_categories_data->isEmpty())
                                                                        @foreach($blog_posts_categories_data as $bpcd)
                                                                            <option value="{{$bpcd->id}}">{{$bpcd->blog_category_name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>

                                                                @error('blog_category')
                                                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <hr class="border border-dark mt-3"/>

                                                        <div class="row pt-3">
                                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                                                <label for="input_blog_excerpt" class="form-label"><b>Blog Excerpt:</b></label>
                                                                <textarea name="blog_excerpt" class="form-control @error('blog_excerpt') is-invalid @enderror border border-dark rounded p-1" id="input_blog_excerpt" 
                                                                :value="old('blog_excerpt')" placeholder="...as a company we are passionate..." minlength="3" maxlength="100" data-bs-toggle="tooltip" 
                                                                data-bs-placement="left" data-bs-title="The blog excerpt should contain between 3-100 characters. It will be automatically filled when you write your content" 
                                                                rows="5" autofocus readonly></textarea>

                                                                @error('blog_excerpt')
                                                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <hr class="border border-dark mt-3"/>

                                                        <div class="row pt-3">
                                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                                                <div>
                                                                    <label for="input_blog_featured_image" class="form-label"><b>Featured Image:</b></label>
                                                                    <input type="file" name="blog_featured_image" class="form-control @error('blog_featured_image') is-invalid @enderror border border-dark 
                                                                    rounded-pill p-1" id="input_blog_featured_image" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Select blog featured image" 
                                                                    autofocus>

                                                                    @error('blog_featured_image')
                                                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>

                                                                <div>
                                                                    <div class="d-flex justify-content-center">
                                                                        <img src="/images/dashboard-images/main-featured-image.jpg" class="border border mt-4" id="preview_main_featured_image"  data-bs-toggle="tooltip" data-bs-placement="bottom" 
                                                                        data-bs-title="Preview the blog featured image here"/>
                                                                    </div>

                                                                    <div class="pt-3">
                                                                        <p><b>Image Type:</b></p>
                                                                        <p><b>Image Size:</b></p>
                                                                        <p><b>Image Dimensions:</b></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <hr class="border border-dark mt-3"/>

                                                        <div class="row pt-3">
                                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-1">
                                                                <label for="input_blog_publish_time" class="form-label"><b>Blog Publish Time:</b></label>
                                                                <input type="time" name="blog_publish_time" class="form-control @error('blog_publish_time') is-invalid @enderror border border-dark rounded-pill p-1" 
                                                                id="input_blog_publish_time" :value="old('blog_publish_time')" placeholder="12:30 P.M" data-bs-toggle="tooltip" data-bs-placement="left" 
                                                                data-bs-title="The blog publish time is the set time the system will automatically publish the blog to the public for reading/viewing" autofocus>

                                                                @error('blog_publish_time')
                                                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>

                                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-1">
                                                                <label for="input_blog_publish_date" class="form-label"><b>Blog Publish Date:</b></label>
                                                                <input type="date" name="blog_publish_date" class="form-control @error('blog_publish_date') is-invalid @enderror border border-dark rounded-pill p-1" 
                                                                id="input_blog_publish_date" :value="old('blog_publish_date')" placeholder="20/12/2023" data-bs-toggle="tooltip" data-bs-placement="left" 
                                                                data-bs-title="The blog publish date is the set date the system will automatically publish the blog to the public for reading/viewing" autofocus>

                                                                @error('blog_publish_date')
                                                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <hr class="border border-dark mt-3"/>

                                                        <div class="row pt-3">
                                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                                                <label for="input_blog_tags" class="form-label"><b>Blog Tags:</b></label>
                                                                <textarea name="blog_tags" class="form-control @error('blog_tags') is-invalid @enderror border border-dark rounded p-1" id="input_blog_tags" 
                                                                :value="old('blog_tags')" placeholder="design, 3D modelling, signage ...." data-bs-toggle="tooltip" data-bs-placement="left" 
                                                                data-bs-title="Tags in blogs are labels or keywords that are assigned to a blog post to help categorize and organize the content. 
                                                                They are usually located at the bottom of a blog post and can be clicked on to display other posts that have been assigned the same tag." 
                                                                rows="3" autofocus></textarea>

                                                                @error('blog_tags')
                                                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <hr class="border border-dark mt-3"/>

                                                        <div class="row pt-3">
                                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                                                <label for="input_blog_is_featured" class="form-label"><b>Is Blog Featured:</b></label>
                                                                <input type="checkbox" name="blog_is_featured" class="form-control @error('blog_is_featured') is-invalid @enderror border border-dark rounded-circle p-1" 
                                                                id="input_blog_is_featured" :value="old('blog_is_featured')" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Indicates whether a 
                                                                particular blog post is designated as a featured post. A featured post is usually one that is highlighted in some way on the blog, such as being displayed 
                                                                prominently on the homepage, or appearing in a separate section of the blog." autofocus>

                                                                @error('blog_is_featured')
                                                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <hr class="border border-dark mt-3"/>

                                                        <div class="row pt-3">
                                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                                                <label for="input_blog_status" class="form-label"><b>Blog Status:</b></label>
                                                                <select name="blog_status" class="form-control @error('blog_status') is-invalid @enderror border border-dark rounded-pill p-1" 
                                                                id="input_blog_status" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Indicates the current status of the blog on publish.
                                                                The status 'PUBLISH' means the blog will be immediately published once its created. The status 'WAITING' means the blog will be created but will not be 
                                                                visible to the public. The status 'SYSTEM PUBLISH' means the blog will be created but publication will be done by the system on a set date and a set time" 
                                                                autofocus>
                                                                    <option placeholder="Select category type here"></option>
                                                                    <option value="PUBLISH">Publish</option>
                                                                    <option value="WAITING">Waiting</option>
                                                                    <option value="AUTOMATIC PUBLISH">System Publish</option>
                                                                </select>

                                                                @error('blog_status')
                                                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <hr class="border border-dark mt-3"/>

                                                        <div class="row pt-3">
                                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                                                <label for="input_meta_title" class="form-label"><b>Meta Title:</b></label>
                                                                <input type="text" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror border border-dark rounded-pill p-1" 
                                                                id="input_meta_title" :value="old('meta_title')" placeholder="Signage In Africa" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="The meta title is the 
                                                                title of a blog post that appears in search engine results pages (SERPs) and browser tabs" autocomplete="meta_title" autofocus>

                                                                @error('meta_title')
                                                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <hr class="border border-dark mt-3"/>

                                                        <div class="row pt-3">
                                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                                                <label for="input_meta_description" class="form-label"><b>Meta Description:</b></label>
                                                                <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror border border-dark rounded p-1" 
                                                                id="input_meta_description" :value="old('meta_description')" placeholder="3D signage and modelling across africa is greatly growing." data-bs-toggle="tooltip" 
                                                                data-bs-placement="left" data-bs-title="The meta description is a brief summary of a blog post that provides more information about the content and is 
                                                                designed to entice potential readers to click through to the post" autocomplete="meta_description" rows="3" autofocus></textarea>

                                                                @error('meta_description')
                                                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>  
                                            </div>
                                        </div>

                                        <div class="row pt-1">
                                            <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1 p-3"></div>

                                            <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 p-3">
                                                <button type="submit" class="btn btn-primary float-end" id="createBlogPostButton" data-bs-toggle="tooltip" 
                                                data-bs-placement="left" data-bs-title="Save the information provided"><span>Create Blog Post</span></button>
                                            </div>

                                            <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1 p-3"></div>
                                        </div>
                                    </form>
                                @endif
                            @elseif($source == 'show_all')
                                <p>Show All</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection



