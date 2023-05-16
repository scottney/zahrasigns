<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('blog.update', $edit_single_blog_post_data->id) }}" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                    <ul class="mt-3">
                        <li class="mt-3">
                            <label for="input_blog_post_type_created_at" class="form-label"><b>Blog Post Created At:</b></label>
                            <input type="text" class="border border-dark rounded-pill p-1" id="input_blog_post_created_at" value="{{$edit_single_blog_post_data->created_at}}" readonly>
                        </li>

                        <li class="mt-3">
                            <label for="input_blog_title" class="form-label"><b>Blog Title:</b></label>
                            <input type="text" class="border border-dark rounded-pill p-1" id="input_blog_title" name="blog_title" value="{{$edit_single_blog_post_data->blog_title}}">
                        </li>

                        <li class="mt-3">
                            <label for="input_blog_publish_date" class="form-label"><b>Blog Publish Date:</b></label>
                            <input type="text" class="border border-dark rounded-pill p-1" id="input_blog_publish_date" value="{{$edit_single_blog_post_data->blog_publish_date}}" readonly>
                        </li>

                        <li class="mt-3">
                            <label for="input_blog_publish_time" class="form-label"><b>Blog Publish Time:</b></label>
                            <input type="text" class="border border-dark rounded-pill p-1" id="input_blog_publish_time" value="{{$edit_single_blog_post_data->blog_publish_time}}" readonly>
                        </li>

                        <li class="mt-3">
                            <label for="input_meta_title" class="form-label"><b>Meta Title:</b></label>
                            <input type="text" class="border border-dark rounded-pill p-1" id="input_meta_title" name="meta_title" value="{{$edit_single_blog_post_data->meta_title}}">
                        </li>

                        <li class="mt-3">
                            <label for="input_ratings" class="form-label"><b>Ratings:</b></label>
                            <input type="number" class="border border-dark rounded-pill p-1" id="input_ratings" value="{{$edit_single_blog_post_data->ratings}}" readonly>
                        </li>

                        <li class="mt-3">
                            <label for="input_views" class="form-label"><b>Views:</b></label>
                            <input type="number" class="border border-dark rounded-pill p-1" id="input_views" value="{{$edit_single_blog_post_data->views}}" readonly>
                        </li>

                        <li class="mt-3">
                            <label for="input_no_of_times_updated" class="form-label"><b>No. of Times Updated:</b></label>
                            <input type="number" class="border border-dark rounded-pill p-1" id="input_no_of_times_updated" value="{{$edit_single_blog_post_data->number_of_times_updated}}" readonly>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                    <ul>
                        <li class="mt-3">
                            <label for="input_blog_tags" class="form-label"><b>Blog Tags:</b></label>
                            <textarea class="border border-dark rounded p-1" id="input_blog_tags" name="blog_tags" rows="7">{{$edit_single_blog_post_data->blog_tags}}</textarea>
                        </li>

                        <li class="mt-3">
                            <label for="input_blog_excerpt" class="form-label"><b>Blog Excerpt:</b></label>
                            <textarea class="border border-dark rounded p-1" id="input_blog_excerpt" name="blog_excerpt" rows="5">{{$edit_single_blog_post_data->blog_excerpt}}</textarea>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                    <label for="input_meta_keywords" class="form-label"><b>Meta Keywords:</b></label>
                    <textarea class="border border-dark rounded p-1" id="input_meta_keywords" rows="7" name="meta_keywords">{{$edit_single_blog_post_data->meta_keywords}}</textarea>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 p-3">
                    <label for="input_meta_description" class="form-label"><b>Meta Description:</b></label>
                    <textarea class="border border-dark rounded p-1" id="input_meta_description" rows="7" name="meta_description">{{$edit_single_blog_post_data->meta_description}}</textarea>
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-3">
                    <label for="input_blog_body" class="form-label"><b>Blog Body:</b></label>
                    <br>
                    <div id="text-area-container">
                        <textarea class="border border-dark rounded p-1" id="input_blog_body" name="blog_body">
                            {{$edit_single_blog_post_data->blog_body}}
                        </textarea>
                    </div>
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <button type="submit" class="float-end p-2" id="updateBlogPostButton" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Proceed with saving the currently provided information">
                        <span>Update</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>



