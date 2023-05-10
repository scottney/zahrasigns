<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('update-blog-post-category', $blog_post_category->id) }}" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                    <label for="input_blog_post_category_created_at" class="form-label"><b>Blog Post Category Created At:</b></label>
                    <input type="taxt" class="border border-dark rounded-pill p-1" id="input_blog_post_category_created_at" value="{{$blog_post_category->created_at}}" readonly>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                    <label for="input_blog_post_category_user_name" class="form-label"><b>Blog Post Category Arthur:</b></label>
                    <input type="taxt" class="border border-dark rounded-pill p-1" id="input_blog_post_category_user_name" value="{{$blog_post_category->user_name}}" readonly>
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                    <label for="input_blog_post_category_name" class="form-label"><b>Blog Post Category Name:</b></label>
                    <input type="taxt" class="border border-dark rounded-pill p-1" id="input_blog_post_category_name" name="blog_category_name" value="{{$blog_post_category->blog_category_name}}">
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                    <label for="input_blog_post_category_slug" class="form-label"><b>Blog Post Category Slug:</b></label>
                    <input type="taxt" class="border border-dark rounded-pill p-1" id="input_blog_post_category_slug" name="blog_category_slug" value="{{$blog_post_category->blog_category_slug}}">
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-3">
                    <label for="input_blog_post_category_type" class="form-label"><b>Blog Post Category Type:</b></label>

                    <select name="blog_category_type" class="form-control border border-secondary rounded" id="input_blog_category_type" 
                    autocomplete="blog_category_type" placeholder="Design & Conceptualization" minlength="3" maxlength="95" data-bs-toggle="tooltip" 
                    data-bs-placement="left" data-bs-title="The blog category type should contain between 3-95 characters" autocomplete="blog_category_type" autofocus>
                        <option value="{{$blog_post_category->blog_category_type}}">{{$blog_post_category->blog_category_type}}</option>
                        <option value="DESIGN">Design</option>
                        <option value="CONCEPTUALIZATION">Conceptualization</option>
                        <option value="MATERIALS">Materials</option>
                        <option value="TECHNIQUES">Techniques</option>
                        <option value="INSTALLATION">Installation</option>
                        <option value="MAINTENANCE">Maintenance</option>
                        <option value="INDUSTRY NEWS">Industry News</option>
                        <option value="INDUSTRY TRENDS">Industry Trends</option>
                        <option value="CASE EXAMPLES">Case Examples</option>
                        <option value="CASE STUDIES">Case Studies</option>
                        <option value="MARKETING">Marketing</option>
                        <option value="BRANDING">Branding</option>
                        <option value="DIY">DIY</option>
                        <option value="HOW TO GUIDES">How to Guides</option>
                        <option value="INSPIRATION">Inspiration</option>
                        <option value="IDEAS">Ideas</option>
                        <option value="OTHER">Other</option>
                    </select>
                </div>

                <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 p-3">
                    <label for="input_blog_post_category_description" class="form-label"><b>Blog Post Category Description:</b></label>
                    <br>
                    <textarea class="border border-dark rounded p-1" id="input_blog_post_category_description" name="blog_category_description" rows="7">
                    {{$blog_post_category->blog_category_description}}
                    </textarea>
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-3">
                    <button type="submit" class="float-end p-2" id="updateBlogCategoryButton" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Proceed with saving the currently provided information">
                        <span>Update</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>



