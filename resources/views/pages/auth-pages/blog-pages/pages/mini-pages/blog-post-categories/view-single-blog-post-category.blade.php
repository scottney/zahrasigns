<div class="card shadow">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                <label for="input_blog_post_category_created_at" class="form-label"><b>Blog Post Category Created At:</b></label>
                <input type="taxt" class="border border-dark rounded-pill p-1" id="input_blog_post_category_created_at" value="{{$blog_post_category->created_at}}" readonly>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                <label for="input_blog_post_category_name" class="form-label"><b>Blog Post Category Name:</b></label>
                <input type="taxt" class="border border-dark rounded-pill p-1" id="input_blog_post_category_name" value="{{$blog_post_category->blog_post_category_name}}" readonly>
            </div>
        </div>

        <div class="row pt-3">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                <label for="input_blog_post_category_slug" class="form-label"><b>Blog Post Category Slug:</b></label>
                <input type="taxt" class="border border-dark rounded-pill p-1" id="input_blog_post_category_slug" value="{{$blog_post_category->blog_post_category_slug}}" readonly>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                <label for="input_blog_post_category_description" class="form-label"><b>Blog Post Category Description:</b></label>
                <br>
                <textarea class="border border-dark rounded p-1" id="input_blog_post_category_description" rows="7" readonly>
                    {{$blog_post_category->blog_post_category_description}}
                </textarea>
            </div>
        </div>
    </div>
</div>



