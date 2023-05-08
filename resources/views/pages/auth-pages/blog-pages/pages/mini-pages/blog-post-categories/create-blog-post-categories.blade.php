<div class="container-fluid" id="create-blog-post-categories-container">
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
                    <h3 class="text-center text-uppercase text-white"><b>Blog Categories Portal</b></h3>
                </div>
                
                <div class="card-body">
                    <form action="{{ route('blog-categories-store') }}" method="POST" role="form" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                <label for="input_username" class="form-label"><b>Username:</b></label>
                                <input type="text" name="user_name" class="form-control @error('user_name') is-invalid @enderror border border-secondary rounded" id="input_username" value="{{auth()->user()->name}}" 
                                autofocus readonly>
                                
                                @error('user_name')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <hr class="border border-dark mt-3"/>
                        
                        <div class="row pt-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                <label for="input_blog_category_name" class="form-label"><b>Blog Category Name:</b></label>
                                <input type="text" name="blog_category_name" class="form-control @error('blog_category_name') is-invalid @enderror border border-secondary rounded" id="input_blog_category_name" 
                                :value="old('blog_category_name')" autocomplete="blog_category_name" placeholder="Marketing Blogs" minlength="3" maxlength="75" data-bs-toggle="tooltip" data-bs-placement="left" 
                                data-bs-title="The blog category name should contain between 3-75 characters" autocomplete="blog_category_name" autofocus>
                                                                            
                                @error('blog_category_name')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr class="border border-dark mt-3"/>

                        <div class="row pt-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                <label for="input_blog_category_slug" class="form-label"><b>Blog Category Slug:</b></label>
                                <input type="text" name="blog_category_slug" class="form-control @error('blog_category_slug') is-invalid @enderror border border-secondary rounded" id="input_blog_category_slug" 
                                :value="old('blog_category_slug')" autocomplete="blog_category_slug" placeholder="design-conceptualization" minlength="3" maxlength="75" data-bs-toggle="tooltip" data-bs-placement="left" 
                                data-bs-title="The blog category slug should contain between 3-75 characters" autocomplete="blog_category_slug" autofocus>
                                                                            
                                @error('blog_category_slug')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr class="border border-dark mt-3"/>

                        <div class="row pt-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                <label for="input_blog_category_type" class="form-label"><b>Blog Category Type:</b></label>
                                <select name="blog_category_type" class="form-control @error('blog_category_type') is-invalid @enderror border border-secondary rounded" id="input_blog_category_type" 
                                :value="old('blog_category_type')" autocomplete="blog_category_type" placeholder="Design & Conceptualization" minlength="3" maxlength="95" data-bs-toggle="tooltip" 
                                data-bs-placement="left" data-bs-title="The blog category type should contain between 3-95 characters" autocomplete="blog_category_type" autofocus>
                                    <option></option>
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
                                                                                
                                @error('blog_category_type')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr class="border border-dark mt-3"/>

                        <div class="row pt-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                <label for="input_blog_category_description" class="form-label"><b>Blog Category Description:</b></label>
                                <textarea name="blog_category_description" class="form-control @error('blog_category_description') is-invalid @enderror border border-secondary rounded" 
                                id="input_blog_category_description" :value="old('blog_category_description')" autocomplete="blog_category_description" placeholder="In this category, we explore the creative process behind designing 3D signage. From brainstorming and sketching to digital modeling and prototyping, we delve into the techniques and strategies used by designers to bring their ideas to life. Whether you're a seasoned designer or just starting out, this category offers insights and inspiration for creating eye-catching and effective 3D signage that stands out in any environment. Learn about the latest design trends, best practices for incorporating branding elements, and tips for creating designs that are both functional and visually striking." minlength="55" maxlength="3000" data-bs-toggle="tooltip" data-bs-placement="left" 
                                data-bs-title="The blog category description should contain between 55-3000 characters" rows="9" autocomplete="blog_category_description" autofocus></textarea>
                                                                            
                                @error('blog_category_description')
                                    <span class="invalid-feedback alert alert-warning" role="alert">
                                        <strong class="text-danger"><i class="fa-solid fa-circle-exclamation"></i>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row pt-3 pb-3">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 p-1">
                                <button type="submit" class="btn btn-primary rounded-pill float-end" id="createBlogPostCategoryButton" data-bs-toggle="tooltip" data-bs-placement="left" 
                                data-bs-title="Save the information provided to the database"><span>Create Blog Category</span></button> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


