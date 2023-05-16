<?php

namespace App\Http\Controllers\PagesControllers;

use App\Http\Controllers\Controller;
use App\Models\BlogPostCategories;
use App\Models\BlogPosts;
use App\Models\BlogPostTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_post_category_data = BlogPostCategories::get();

        if($blog_post_category_data->isEmpty()) {
            Session::flash('create-blog-post-category', 'Please create blog post categories so as to proceed further and be able to view other system options');
            return view('pages.auth-pages.blog-pages.blog', ['blog_post_category_data' => $blog_post_category_data]);
        } else {
            return view('pages.auth-pages.blog-pages.blog', ['blog_post_category_data' => $blog_post_category_data]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog_posts_categories_data = BlogPostCategories::where('user_id', auth()->user()->id)->get();

        if($blog_posts_categories_data->isEmpty()) {
            Session::flash('blog-categories-missing', 'Please create a blog post category');
            return view('pages.auth-pages.blog-pages.pages.blog-index', ['blog_posts_categories_data' => $blog_posts_categories_data, "source"=>"create"]);
        } else {
            $blog_posts_types_data = BlogPostTypes::where('user_id', auth()->user()->id)->get();

            if($blog_posts_types_data->isEmpty()) {
                Session::flash('blog-types-missing', 'Please create a blog post type');
                return view('pages.auth-pages.blog-pages.pages.blog-index', ['blog_posts_categories_data' => $blog_posts_categories_data, 'blog_posts_types_data' => $blog_posts_types_data, "source"=>"create"]);
            } else {
                return view('pages.auth-pages.blog-pages.pages.blog-index', ['blog_posts_categories_data' => $blog_posts_categories_data, 'blog_posts_types_data' => $blog_posts_types_data, "source"=>"create"]);
            }
        }
    }

    public function create_blog_post_category()
    {
        $blog_post_category_data = BlogPostCategories::get();
        return view('pages.auth-pages.blog-pages.pages.blog-index', ['blog_post_category_data' => $blog_post_category_data, "source" => "create-blog-post-category"]);
    }

    public function show_all_blog_post_categories()
    {
        $blog_post_categories = BlogPostCategories::paginate(10);
        return view('pages.auth-pages.blog-pages.pages.blog-index', ['blog_post_categories' => $blog_post_categories ,"source"=>"show-all-blog-post-categories"]);
    }

    public function show_blog_post_category($id)
    {
        $blog_post_category = BlogPostCategories::findOrFail($id);
        return view('pages.auth-pages.blog-pages.pages.blog-index', ['blog_post_category' => $blog_post_category ,"source"=>"show-blog-post-category"]);
    }

    public function edit_blog_post_category($id)
    {
        $blog_post_category = BlogPostCategories::findOrFail($id);
        return view('pages.auth-pages.blog-pages.pages.blog-index', ['blog_post_category' => $blog_post_category ,"source"=>"edit-blog-post-category"]);
    }

    public function update_blog_post_category(Request $request, $id)
    {
        $categories_data = $request->all();

        Validator::make($categories_data, [
            'blog_post_category_name' => ['string', 'min:3', 'max:75'],
            'blog_post_category_slug' => ['string', 'min:3', 'max:75'],
            'blog_post_category_description' => ['string', 'min:55', 'max:3000']
        ]);

        $data_categories = BlogPostCategories::where('id', $id)->update([
            'blog_post_category_name' => $categories_data['blog_post_category_name'],
            'blog_post_category_slug' => $categories_data['blog_post_category_slug'],
            'blog_post_category_description' => $categories_data['blog_post_category_description']
        ]);
        
        if($data_categories) {
            return redirect()->route('show-all-blog-post-categories')->with('update-blog-post-category-success', 'You successfully updated the blog post category');
        } else {
            return redirect()->route('show-all-blog-post-categories')->with('update-blog-post-category-fail', 'A problem occurred while trying to update the blog post category. Please try again.');
        }
    }

    public function store_categories(Request $request)
    {
        $categories_data = $request->all();

        $validate = Validator::make($categories_data, [
            'blog_post_category_name' => ['required', 'string', 'min:3', 'max:75'],
            'blog_post_category_slug' => ['required', 'string', 'min:3', 'max:75'],
            'blog_post_category_description' => ['required', 'string', 'min:55', 'max:3000']
        ]);

        if($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        } else {
            $data_categories = BlogPostCategories::create([
                'user_id' => auth()->user()->id,
                'user_number' => auth()->user()->user_number,
                'user_UUID' => auth()->user()->user_UUID,
                'blog_post_category_name' => $categories_data['blog_post_category_name'],
                'blog_post_category_slug' => $categories_data['blog_post_category_slug'],
                'blog_post_category_number' => (int)strtotime("now"),
                'blog_post_category_UUID' => Str::uuid()->toString(),
                'blog_post_category_description' => $categories_data['blog_post_category_description']
            ]);

            if($data_categories) {
                return redirect()->route('blog.create')->with('create-blog-post-category-success', 'You successfully created a blog post category');
            } else {
                return redirect()->route('blog.create')->with('create-blog-post-category-fail', 'A problem occurred while trying to create a blog post category. Please try again.');
            }
        }
    }

    public function create_blog_type()
    {
        $blog_post_type_data = BlogPostTypes::get();
        $blog_posts_category_data = BlogPostCategories::get();
        
        return view('pages.auth-pages.blog-pages.pages.blog-index', ['blog_posts_category_data' => $blog_posts_category_data, 'blog_post_type_data' => $blog_post_type_data, "source" => "create-blog-post-type"]);
    }

    public function view_all_blog_post_types()
    {
        $blog_post_type_data = BlogPostTypes::with('blog_post_categories')->paginate(10);
        return view('pages.auth-pages.blog-pages.pages.blog-index', ['blog_post_type_data' => $blog_post_type_data, "source" => "view-all-blog-post-types"]);
    }

    public function view_single_blog_post_type($id)
    {
        $blog_post_type_data = BlogPostTypes::findOrFail($id);
        return view('pages.auth-pages.blog-pages.pages.blog-index',['blog_post_type_data' => $blog_post_type_data, "source" => "view-single-blog-post"]);
    }

    public function edit_blog_post_type($id)
    {
        $blog_post_type = BlogPostTypes::findOrFail($id);
        $blog_post_categories = BlogPostCategories::get();
        return view('pages.auth-pages.blog-pages.pages.blog-index', ['blog_post_type' => $blog_post_type, 'blog_post_categories' => $blog_post_categories, "source"=>"edit-blog-post-type"]);
    }

    public function update_blog_post_type(Request $request, $id)
    {
        $types_data = $request->all();

        Validator::make($types_data, [
            'blog_post_type_name' => ['string', 'min:3', 'max:75'],
            'blog_post_type_slug' => ['string', 'min:3', 'max:75'],
            'blog_post_type_description' => ['string', 'min:55', 'max:3000']
        ]);

        $blog_post_data_types = BlogPostTypes::where('id', $id)->update([
            'blog_post_type_name' => $types_data['blog_post_type_name'],
            'blog_post_type_slug' => $types_data['blog_post_type_slug'],
            'blog_post_category_id' => $types_data['blog_post_category'],
            'blog_post_type_description' => $types_data['blog_post_type_description']
        ]);
        
        if($blog_post_data_types) {
            return redirect()->route('view-all-blog-post-types-index')->with('update-blog-post-type-success', 'You successfully updated the blog post type');
        } else {
            return redirect()->route('view-all-blog-post-types-index')->with('update-blog-post-type-fail', 'A problem occurred while trying to update the blog post type. Please try again.');
        }
    }

    public function store_blog_type(Request $request) 
    {
        $blog_data_type = $request->all();

        $validate = Validator::make($blog_data_type, [
            'blog_post_type_name' => ['required', 'string', 'min:3', 'max:75'],
            'blog_post_type_slug' => ['required', 'string', 'min:3', 'max:75'],
            'blog_post_type_description' => ['required', 'string', 'min:55', 'max:3000']
        ]);

        if($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        } else {
            $blog_post_category_data = BlogPostCategories::where('id', $blog_data_type['blog_post_category'])->first();

            $data_blog_post_types = BlogPostTypes::create([
                'user_id' => auth()->user()->id,
                'user_number' => auth()->user()->user_number,
                'user_UUID' => auth()->user()->user_UUID,
                'blog_post_type_name' => $blog_data_type['blog_post_type_name'],
                'blog_post_type_slug' => $blog_data_type['blog_post_type_slug'],
                'blog_post_category_id' => $blog_data_type['blog_post_category'],
                'blog_post_type_number' => (int)strtotime("now"),
                'blog_post_type_UUID' => Str::uuid()->toString(),
                'blog_post_category_number' => $blog_post_category_data->blog_post_category_number,
                'blog_post_category_UUID' => $blog_post_category_data->blog_post_category_UUID,
                'blog_post_type_description' => $blog_data_type['blog_post_type_description']
            ]);

            if($data_blog_post_types) {
                return redirect()->route('blog.create')->with('create-blog-post-type-success', 'You successfully created a blog post type');
            } else {
                return redirect()->route('blog.create')->with('create-blog-post-type-fail', 'A problem occurred while trying to create a blog post type. Please try again.');
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog_posts_data = $request->all();

        $validate = Validator::make($blog_posts_data, [
            'blog_body' => ['required', 'string', 'min:300', 'max:900000'],
            'blog_title' => ['required', 'string', 'min:3', 'max:75'],
            'blog_slug' => ['required', 'string', 'min:3', 'max:75'],
            'blog_category' => ['required', 'string'],
            'blog_type' => ['required', 'string'],
            'blog_excerpt' => ['required', 'string', 'min:30', 'max:9000'],
            'blog_featured_image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:8192'],
            'blog_publish_time' => ['required', 'date_format:H:i'],
            'blog_publish_date' => ['required', 'date', 'date_format:Y-m-d'],
            'blog_tags' => ['required', 'string'],
            'blog_is_featured' => ['required'],
            'blog_status' => ['required', 'string', 'min:3', 'max:30'],
            'meta_title' => ['required', 'string', 'min:3', 'max:30'],
            'meta_keywords' => ['required', 'string'],
            'meta_description' => ['required', 'string', 'min:30', 'max:9000']
        ]);

        if($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        } else {
            $blog_post_category_data = BlogPostCategories::where('id', $blog_posts_data['blog_category'])->first();
            $blog_post_type_data = BlogPostTypes::where('id', $blog_posts_data['blog_type'])->first();

            //Get filename with the extension
            $imageFileWithExt = $request->file('blog_featured_image')->getClientOriginalName();
            //Get just filename
            $filenameImage = pathinfo($imageFileWithExt,PATHINFO_FILENAME);
            //Get just ext
            $extensionImage = $request->file('blog_featured_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameImageToStore = $filenameImage.'_'.time().'.'.$extensionImage;
            $pathImage = $request->file('blog_featured_image')->storeAs('public/images/blog-posts-images',$fileNameImageToStore);
            
            $data_blog_posts = BlogPosts::create([
                'user_id' => auth()->user()->id,
                'user_number' => auth()->user()->user_number,
                'user_UUID' => auth()->user()->user_UUID,
                'blog_post_category_id' => $blog_posts_data['blog_category'],
                'blog_post_category_number' => $blog_post_category_data->blog_post_category_number,
                'blog_post_category_UUID' => $blog_post_category_data->blog_post_category_UUID,
                'blog_post_type_id' => $blog_posts_data['blog_type'],
                'blog_post_type_number' => $blog_post_type_data->blog_post_type_number,
                'blog_post_type_UUID' => $blog_post_type_data->blog_post_type_UUID,
                'blog_post_number' => (int)strtotime("now"),
                'blog_post_UUID' =>  Str::uuid()->toString(),
                'blog_title' => $blog_posts_data['blog_title'],
                'blog_slug' => $blog_posts_data['blog_slug'],
                'blog_body' => $blog_posts_data['blog_body'],
                'blog_excerpt' => $blog_posts_data['blog_excerpt'],
                'blog_publish_time' => $blog_posts_data['blog_publish_time'],
                'blog_publish_date' => $blog_posts_data['blog_publish_date'],
                'blog_tags' => $blog_posts_data['blog_tags'],
                'blog_is_featured' => $blog_posts_data['blog_is_featured'],
                'blog_status' => $blog_posts_data['blog_status'],
                'meta_title' => $blog_posts_data['meta_title'],
                'meta_description' => $blog_posts_data['meta_description'],
                'meta_keywords' => $blog_posts_data['meta_keywords'],
                'blog_featured_image' => $pathImage,
                'created_by' => auth()->user()->name,
                'ratings' => 0,
                'views' => 0,
                'updated_by' => auth()->user()->name,
                'number_of_times_updated' => 0,
            ]);

            if($data_blog_posts) {
                return redirect()->route('blog.create')->with('create-blog-success', 'You successfully created a blog post');
            } else {
                return redirect()->route('blog.create')->with('create-blog-fail', 'A problem occurred while trying to create a blog post. Please try again.');
            }
        }
    }

    public function show_all_blog_posts()
    {
        $all_blog_posts = BlogPosts::paginate(10);
        return view('pages.auth-pages.blog-pages.pages.blog-index', ['all_blog_posts' => $all_blog_posts, "source"=>"show-all-blog-posts"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single_blog_post = BlogPosts::findOrFail($id);
        return view('pages.auth-pages.blog-pages.pages.blog-index', ['single_blog_post' => $single_blog_post, "source"=>"show-single-blog-post"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_single_blog_post_data = BlogPosts::findOrFail($id);
        return view('pages.auth-pages.blog-pages.pages.blog-index', ['edit_single_blog_post_data' => $edit_single_blog_post_data, "source"=>"edit-single-blog"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog_data = $request->all();

        Validator::make($blog_data, [
            'blog_title' => ['string', 'min:3', 'max:75'],
            'meta_title' => ['string', 'min:3', 'max:30'],
            'blog_tags' => ['string'],
            'blog_excerpt' => ['string', 'min:30', 'max:9000'],
            'meta_keywords' => ['required', 'string'],
            'meta_description' => ['string', 'min:30', 'max:9000'],
            'blog_body' => ['string', 'min:300', 'max:900000']
        ]);

        $blog_post_data = BlogPosts::where('id', $id)->update([
            'blog_title' => $blog_data['blog_title'],
            'meta_title' => $blog_data['meta_title'],
            'blog_tags' => $blog_data['blog_tags'],
            'blog_excerpt' => $blog_data['blog_excerpt'],
            'meta_keywords' => $blog_data['meta_keywords'],
            'meta_description' => $blog_data['meta_description'],
            'blog_body' => $blog_data['blog_body'],
        ]);
        
        if($blog_post_data) {
            return redirect()->route('show-all-blog-posts-index')->with('update-blog-post-success', 'You successfully updated the blog post');
        } else {
            return redirect()->route('show-all-blog-posts-index')->with('update-blog-post-fail', 'A problem occurred while trying to update the blog post. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
