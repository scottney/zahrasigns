<div class="container-fluid" id="create-blog-post-types-container">
    <div class="row pt-3 pb-5">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
            <p><b>N.B.</b><span class="ms-2">Form errors will be display here</span></p>
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

        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
            <div class="card shadow">
                <div class="card-header bg-primary">
                    <h3 class="text-center text-uppercase text-white"><b>Blog Types Portal</b></h3>
                </div>
                
                <div class="card-body">
                    <form action="{{ route('store-blog-post-type') }}" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf

                        <div class="row pt-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                <label for="input_blog_type_name" class="form-label"><b>Blog Post Type Name:</b></label>
                                <input type="text" name="blog_post_type_name" class="form-control @error('blog_post_type_name') is-invalid @enderror border border-secondary rounded" 
                                id="input_blog_post_type_name" :value="old('blog_post_type_name')" autocomplete="blog_post_type_name" placeholder="Marketing Blogs" minlength="3" 
                                maxlength="75" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="The blog post type name should contain between 3-75 characters" 
                                autocomplete="blog_post_type_name" autofocus>
                                                                            
                                @error('blog_post_type_name')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr class="border border-dark mt-3"/>

                        <div class="row pt-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                <label for="input_blog_post_type_slug" class="form-label"><b>Blog Post Type Slug:</b></label>
                                <input type="text" name="blog_post_type_slug" class="form-control @error('blog_post_type_slug') is-invalid @enderror border border-secondary rounded" 
                                id="input_blog_post_type_slug" :value="old('blog_post_type_slug')" autocomplete="blog_post_type_slug" placeholder="design-conceptualization" minlength="3" 
                                maxlength="75" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="The blog post type slug should contain between 3-75 characters" 
                                autocomplete="blog_post_type_slug" autofocus>
                                                                            
                                @error('blog_post_type_slug')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr class="border border-dark mt-3"/>

                        <div class="row pt-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                <label for="input_blog_post_category" class="form-label"><b>Blog Post Category:</b></label>
                                <select name="blog_post_category" class="form-control @error('blog_post_category') is-invalid @enderror border border-secondary rounded" 
                                id="input_blog_post_category" :value="old('blog_post_category')" autocomplete="blog_post_category" minlength="3" maxlength="75" data-bs-toggle="tooltip" 
                                data-bs-placement="left" data-bs-title="The blog post category should contain between 3-75 characters" autofocus>
                                    <option>Select the blog post category</option>
                                    @foreach($blog_posts_category_data as $bpcd)
                                        <option value="{{$bpcd->id}}">{{$bpcd->blog_post_category_name}}</option>
                                    @endforeach
                                </select>
                                                                            
                                @error('blog_post_category')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr class="border border-dark mt-3"/>

                        <div class="row pt-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                <label for="input_blog_post_type_description" class="form-label"><b>Blog Post Type Description:</b></label>
                                <textarea name="blog_post_type_description" class="form-control @error('blog_post_type_description') is-invalid @enderror border border-secondary rounded" 
                                id="input_blog_post_type_description" :value="old('blog_post_type_description')" autocomplete="blog_post_type_description" 
                                placeholder="In this category, we explore the creative process behind designing 3D signage. From brainstorming and sketching to digital modeling and prototyping, we delve into the techniques and strategies used by designers to bring their ideas to life. Whether you're a seasoned designer or just starting out, this category offers insights and inspiration for creating eye-catching and effective 3D signage that stands out in any environment. Learn about the latest design trends, best practices for incorporating branding elements, and tips for creating designs that are both functional and visually striking." minlength="55" maxlength="3000" data-bs-toggle="tooltip" data-bs-placement="left" 
                                data-bs-title="The blog post type description should contain between 55-3000 characters" rows="9" autocomplete="blog_post_type_description" autofocus></textarea>
                                                                            
                                @error('blog_post_type_description')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row pt-3 pb-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                <button type="submit" class="btn btn-primary rounded-pill float-end" id="createBlogPostTypeButton" data-bs-toggle="tooltip" data-bs-placement="left" 
                                data-bs-title="Save the information provided"><span>Create Blog Post Type</span></button> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


