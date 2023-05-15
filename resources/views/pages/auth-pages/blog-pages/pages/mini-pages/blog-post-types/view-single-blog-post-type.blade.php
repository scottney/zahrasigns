<div class="card shadow">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                <label for="input_blog_post_type_created_at" class="form-label"><b>Blog Post Type Created At:</b></label>
                <input type="text" class="border border-dark rounded-pill p-1" id="input_blog_post_type_created_at" value="{{$blog_post_type_data->created_at}}" readonly>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                <label for="input_blog_post_type_name" class="form-label"><b>Blog Post Type Name:</b></label>
                <input type="text" class="border border-dark rounded-pill p-1" id="input_blog_post_type_name" value="{{$blog_post_type_data->blog_post_type_name}}" readonly>
            </div>
        </div>

        <div class="row pt-3">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                <label for="input_blog_post_type_slug" class="form-label"><b>Blog Post Type Slug:</b></label>
                <input type="text" class="border border-dark rounded-pill p-1" id="input_blog_post_type_slug" value="{{$blog_post_type_data->blog_post_type_slug}}" readonly>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                <label for="input_blog_post_type_description" class="form-label"><b>Blog Post Category Description:</b></label>
                <br>
                <textarea class="border border-dark rounded p-1" id="input_blog_post_type_description" rows="7" readonly>
                    {{$blog_post_type_data->blog_post_type_description}}
                </textarea>
            </div>
        </div>
    </div>
</div>



