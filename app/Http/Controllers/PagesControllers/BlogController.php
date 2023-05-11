<?php

namespace App\Http\Controllers\PagesControllers;

use App\Http\Controllers\Controller;
use App\Models\BlogPostCategories;
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
        $blog_posts_categories_data = BlogPostCategories::where('user_id', auth()->user()->id)->where('user_name', auth()->user()->name)->get();

        if($blog_posts_categories_data->isEmpty()) {
            Session::flash('blog-categories-missing', 'Please create a blog post category');
            return view('pages.auth-pages.blog-pages.pages.blog-index', ['blog_posts_categories_data' => $blog_posts_categories_data, "source"=>"create"]);
        } else {
            return view('pages.auth-pages.blog-pages.pages.blog-index', ['blog_posts_categories_data' => $blog_posts_categories_data, "source"=>"create"]);
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
            'blog_category_name' => ['string', 'min:3', 'max:75'],
            'blog_category_slug' => ['string', 'min:3', 'max:75'],
            'blog_category_type' => ['string', 'min:3', 'max:95'],
            'blog_category_description' => ['string', 'min:55', 'max:3000']
        ]);

        $data_categories = BlogPostCategories::where('id', $id)->update([
            'blog_category_name' => $categories_data['blog_category_name'],
            'blog_category_slug' => $categories_data['blog_category_slug'],
            'blog_category_type' => $categories_data['blog_category_type'],
            'blog_category_description' => $categories_data['blog_category_description']
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
            'blog_category_name' => ['required', 'string', 'min:3', 'max:75'],
            'blog_category_slug' => ['required', 'string', 'min:3', 'max:75'],
            'blog_category_type' => ['required', 'string', 'min:3', 'max:95'],
            'blog_category_description' => ['required', 'string', 'min:55', 'max:3000']
        ]);

        if($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput();
        } else {
            $data_categories = BlogPostCategories::create([
                'user_id' => auth()->user()->id,
                'user_name' => auth()->user()->name,
                'blog_category_name' => $categories_data['blog_category_name'],
                'blog_category_slug' => $categories_data['blog_category_slug'],
                'blog_category_type' => $categories_data['blog_category_type'],
                'blog_category_number' => (int)strtotime("now"),
                'blog_category_UUID' => Str::uuid()->toString(),
                'blog_category_description' => $categories_data['blog_category_description']
            ]);

            if($data_categories) {
                return redirect()->route('blog.create')->with('create-blog-post-category-success', 'You successfully created a blog post category');
            } else {
                return redirect()->route('blog.create')->with('create-blog-post-category-fail', 'A problem occurred while trying to create a blog post category. Please try again.');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
