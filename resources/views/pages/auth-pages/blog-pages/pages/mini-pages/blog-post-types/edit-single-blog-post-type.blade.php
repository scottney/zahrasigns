<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('update-single-blog-post', $blog_post_type->id) }}" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                    <label for="input_blog_post_type_created_at" class="form-label"><b>Blog Post Type Created At:</b></label>
                    <input type="taxt" class="border border-dark rounded-pill p-1" id="input_blog_post_type_created_at" value="{{$blog_post_type->created_at}}" readonly>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                    <label for="input_blog_post_type_name" class="form-label"><b>Blog Post Type Name:</b></label>
                    <input type="taxt" class="border border-dark rounded-pill p-1" id="input_blog_post_type_name" name="blog_post_type_name" value="{{$blog_post_type->blog_post_type_name}}">
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                    <label for="input_blog_post_type_slug" class="form-label"><b>Blog Post Type Slug:</b></label>
                    <input type="taxt" class="border border-dark rounded-pill p-1" id="input_blog_post_type_slug" name="blog_post_type_slug" value="{{$blog_post_type->blog_post_type_slug}}">
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                    <label for="input_blog_post_type_description" class="form-label"><b>Blog Post Type Description:</b></label>
                    <br>
                    <textarea class="border border-dark rounded p-1" id="input_blog_post_type_description" name="blog_post_type_description" rows="7">
                        {{$blog_post_type->blog_post_type_description}}
                    </textarea>
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-3">
                    <button type="submit" class="float-end p-2" id="updateBlogTypeButton" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Proceed with saving the currently provided information">
                        <span>Update</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>



