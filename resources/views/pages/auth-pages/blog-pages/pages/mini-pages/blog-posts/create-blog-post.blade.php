<div class="container-fluid" id="create-blog-post-container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <form action="{{ route('blog.store') }}" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 p-3">
                        <textarea name="blog_body" class="form-control @error('blog_body') is-invalid @enderror p-1" id="input_blog_body" minlength="300" maxlength="900000" autofocus></textarea>

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
                                        <input name="blog_title" class="form-control @error('blog_title') is-invalid @enderror border border-dark rounded-pill p-1" id="input_blog_title" :value="old('blog_title')" 
                                        autocomplete="blog_title" placeholder="3D SIGNAGE IN AFRICA" minlength="3" maxlength="75" data-bs-toggle="tooltip" data-bs-placement="left" 
                                        data-bs-title="The blog title should contain between 3-75 characters" autofocus>

                                        @error('blog_title')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <hr class="border border-dark mt-3" />

                                <div class="row pt-3">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                        <label for="input_blog_slug" class="form-label"><b>Blog Slug:</b></label>
                                        <input name="blog_slug" class="form-control @error('blog_slug') is-invalid @enderror border border-dark rounded-pill p-1" id="input_blog_slug" :value="old('blog_slug')" 
                                        autocomplete="blog_slug" placeholder="3d-signage-in-africa" minlength="3" maxlength="75" data-bs-toggle="tooltip" data-bs-placement="left" 
                                        data-bs-title="The blog slug should contain between 3-75 characters" autofocus>

                                        @error('blog_slug')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <hr class="border border-dark mt-3" />

                                <div class="row pt-3">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                        <label for="input_blog_category_name" class="form-label"><b>Blog Category:</b></label>
                                        <select name="blog_category" class="form-control @error('blog_category') is-invalid @enderror border border-dark rounded-pill p-1" id="input_blog_category_name" 
                                        data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="The blog category should contain between 3-95 characters" autofocus>
                                            <option></option>
                                            @if(!$blog_posts_categories_data->isEmpty())
                                                @foreach($blog_posts_categories_data as $bpcd)
                                                    <option value="{{$bpcd->id}}">{{$bpcd->blog_post_category_name}}</option>
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

                                <hr class="border border-dark mt-3" />

                                <div class="row pt-3">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                        <label for="input_blog_type_name" class="form-label"><b>Blog Type:</b></label>
                                        <select name="blog_type" class="form-control @error('blog_type') is-invalid @enderror border border-dark rounded-pill p-1" id="input_blog_tye_name" data-bs-toggle="tooltip" 
                                        data-bs-placement="left" data-bs-title="The blog type should contain between 3-95 characters" autofocus>
                                            <option></option>
                                            @if(!$blog_posts_types_data->isEmpty())
                                                @foreach($blog_posts_types_data as $bptd)
                                                    <option value="{{$bptd->id}}">{{$bptd->blog_post_type_name}}</option>
                                                @endforeach
                                            @endif
                                        </select>

                                        @error('blog_type')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <hr class="border border-dark mt-3" />

                                <div class="row pt-3">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                        <label for="input_blog_excerpt" class="form-label"><b>Blog Excerpt:</b></label>
                                        <textarea name="blog_excerpt" class="form-control @error('blog_excerpt') is-invalid @enderror border border-dark rounded p-1" id="input_blog_excerpt" 
                                        :value="old('blog_excerpt')" placeholder="...as a company we are passionate..." minlength="30" maxlength="9000" data-bs-toggle="tooltip" data-bs-placement="left" 
                                        data-bs-title="The blog excerpt should contain between 3-100 characters" rows="5" autofocus></textarea>

                                        @error('blog_excerpt')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <hr class="border border-dark mt-3" />

                                <div class="row pt-3">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                        <div>
                                            <label for="input_blog_featured_image" class="form-label"><b>Featured Image:</b></label>
                                            <input type="file" name="blog_featured_image" class="form-control @error('blog_featured_image') is-invalid @enderror border border-dark rounded-pill p-1" 
                                            id="input_blog_featured_image" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Select blog featured image" autofocus>

                                            @error('blog_featured_image')
                                            <span class="invalid-feedback alert alert-warning" role="alert">
                                                <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div>
                                            <div class="d-flex justify-content-center">
                                                <img src="/images/dashboard-images/main-featured-image.jpg" class="border border mt-4" id="preview_main_featured_image" data-bs-toggle="tooltip" 
                                                data-bs-placement="bottom" data-bs-title="Preview the blog featured image here" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="border border-dark mt-3" />

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

                                <hr class="border border-dark mt-3" />

                                <div class="row pt-3">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                        <label for="input_blog_tags" class="form-label"><b>Blog Tags:</b></label>
                                        <textarea name="blog_tags" class="form-control @error('blog_tags') is-invalid @enderror border border-dark rounded p-1" id="input_blog_tags" :value="old('blog_tags')" 
                                        placeholder="design, 3D modelling, signage ...." data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Tags in blogs are labels or keywords that are 
                                        assigned to a blog post to help categorize and organize the content. They are usually located at the bottom of a blog post and can be clicked on to display other 
                                        posts that have been assigned the same tag." rows="3" autofocus></textarea>

                                        @error('blog_tags')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <hr class="border border-dark mt-3" />

                                <div class="row pt-3">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                        <label for="input_blog_is_featured" class="form-label"><b>Is Blog Featured:</b></label>
                                        <input type="checkbox" name="blog_is_featured" class="form-control @error('blog_is_featured') is-invalid @enderror border border-dark rounded-circle p-1" 
                                        id="input_blog_is_featured" value="1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Indicates whether a particular 
                                        blog post is designated as a featured post. A featured post is usually one that is highlighted in some way on the blog, such as being displayed prominently 
                                        on the homepage, or appearing in a separate section of the blog." autofocus>

                                        @error('blog_is_featured')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <hr class="border border-dark mt-3" />

                                <div class="row pt-3">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                        <label for="input_blog_status" class="form-label"><b>Blog Status:</b></label>
                                        <select name="blog_status" class="form-control @error('blog_status') is-invalid @enderror border border-dark rounded-pill p-1" id="input_blog_status" 
                                        data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Indicates the current status of the blog on publish. The status 'PUBLISH' means the blog 
                                        will be immediately published once its created. The status 'WAITING' means the blog will be created but will not be visible to the public. The status 
                                        'SYSTEM PUBLISH' means the blog will be created but publication will be done by the system on a set date and a set time" min-length="3" max-length="30" autofocus>
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

                                <hr class="border border-dark mt-3" />

                                <div class="row pt-3">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                        <label for="input_meta_title" class="form-label"><b>Meta Title:</b></label>
                                        <input type="text" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror border border-dark rounded-pill p-1" id="input_meta_title" 
                                        :value="old('meta_title')" placeholder="Signage In Africa" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="The meta title is the title of a 
                                        blog post that appears in search engine results pages (SERPs) and browser tabs" autocomplete="meta_title" min-length="3" max-length="30" autofocus>

                                        @error('meta_title')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <hr class="border border-dark mt-3" />

                                <div class="row pt-3">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                        <label for="input_meta_keywords" class="form-label"><b>Meta Keywords:</b></label>
                                        <textarea name="meta_keywords" class="form-control @error('meta_keywords') is-invalid @enderror border border-dark rounded p-1" id="input_meta_keywords" 
                                        :value="old('meta_keywords')" placeholder="3D signage, marketing, modelling ..." data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="The meta 
                                        keywords are to be used for easier indexing of blog posts with search engines" autocomplete="meta_keywords" rows="3" autofocus></textarea>

                                        @error('meta_keywords')
                                        <span class="invalid-feedback alert alert-warning" role="alert">
                                            <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <hr class="border border-dark mt-3" />

                                <div class="row pt-3">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                        <label for="input_meta_description" class="form-label"><b>Meta Description:</b></label>
                                        <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror border border-dark rounded p-1" id="input_meta_description" 
                                        :value="old('meta_description')" placeholder="3D signage and modelling across africa is greatly growing." data-bs-toggle="tooltip" data-bs-placement="left" 
                                        data-bs-title="The meta description is a brief summary of a blog post that provides more information about the content and is designed to entice potential readers 
                                        to click through to the post" autocomplete="meta_description" rows="3" min-length="30" max-length="9000" autofocus></textarea>

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
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-3">
                        <button type="submit" class="btn btn-primary float-end" id="createBlogPostButton" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Save the information provided">
                            <span>Create Blog Post</span>
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>