<div class="card shadow">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                <ul class="mt-3">
                    <li class="mt-3">
                        <label for="input_blog_post_type_created_at" class="form-label"><b>Blog Post Created At:</b></label>
                        <input type="text" class="border border-dark rounded-pill p-1" id="input_blog_post_created_at" value="{{$single_blog_post->created_at}}" readonly>
                    </li>

                    <li class="mt-3">
                        <label for="input_blog_title" class="form-label"><b>Blog Title:</b></label>
                        <input type="text" class="border border-dark rounded-pill p-1" id="input_blog_title" value="{{$single_blog_post->blog_title}}" readonly>
                    </li>

                    <li class="mt-3">
                        <label for="input_blog_publish_date" class="form-label"><b>Blog Publish Date:</b></label>
                        <input type="text" class="border border-dark rounded-pill p-1" id="input_blog_publish_date" value="{{$single_blog_post->blog_publish_date}}" readonly>
                    </li>

                    <li class="mt-3">
                        <label for="input_blog_publish_time" class="form-label"><b>Blog Publish Time:</b></label>
                        <input type="text" class="border border-dark rounded-pill p-1" id="input_blog_publish_time" value="{{$single_blog_post->blog_publish_time}}" readonly>
                    </li>

                    <li class="mt-3">
                        <label for="input_meta_title" class="form-label"><b>Meta Title:</b></label>
                        <input type="text" class="border border-dark rounded-pill p-1" id="input_meta_title" value="{{$single_blog_post->meta_title}}" readonly>
                    </li>

                    <li class="mt-3">
                        <label for="input_ratings" class="form-label"><b>Ratings:</b></label>
                        <input type="number" class="border border-dark rounded-pill p-1" id="input_ratings" value="{{$single_blog_post->ratings}}" readonly>
                    </li>

                    <li class="mt-3">
                        <label for="input_views" class="form-label"><b>Views:</b></label>
                        <input type="number" class="border border-dark rounded-pill p-1" id="input_views" value="{{$single_blog_post->views}}" readonly>
                    </li>

                    <li class="mt-3">
                        <label for="input_no_of_times_updated" class="form-label"><b>No. of Times Updated:</b></label>
                        <input type="number" class="border border-dark rounded-pill p-1" id="input_no_of_times_updated" value="{{$single_blog_post->number_of_times_updated}}" readonly>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                <ul>
                    <li class="mt-3">
                        <label for="input_blog_tags" class="form-label"><b>Blog Tags:</b></label>
                        <textarea class="border border-dark rounded p-1" id="input_blog_tags" rows="7" readonly>{{$single_blog_post->blog_tags}}</textarea>
                    </li>

                    <li class="mt-3">
                        <label for="input_blog_excerpt" class="form-label"><b>Blog Excerpt:</b></label>
                        <textarea class="border border-dark rounded p-1" id="input_blog_excerpt" rows="5" readonly>{{$single_blog_post->blog_excerpt}}</textarea>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row pt-3">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                <label for="input_meta_keywords" class="form-label"><b>Meta Keywords:</b></label>
                <textarea class="border border-dark rounded p-1" id="input_meta_keywords" rows="7" readonly>{{$single_blog_post->meta_keywords}}</textarea>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                <label for="input_meta_description" class="form-label"><b>Meta Description:</b></label>
                <textarea class="border border-dark rounded p-1" id="input_meta_description" rows="7" readonly>{{$single_blog_post->meta_description}}</textarea>
            </div>
        </div>

        <div class="row pt-3">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-3">
                <label for="input_blog_body" class="form-label"><b>Blog Body:</b></label>
                <br>
                <div id="text-area-container">
                    <textarea class="border border-dark rounded p-1" id="input_blog_body">
                        {{$single_blog_post->blog_body}}
                    </textarea>
                </div>
            </div>
        </div>
    </div>
</div>



