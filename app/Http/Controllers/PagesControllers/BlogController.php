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
        return view('pages.auth-pages.blog-pages.blog');
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

    public function show_all()
    {
        return view('pages.auth-pages.blog-pages.pages.blog-index', ["source"=>"show_all"]);
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
                return redirect()->back()->with('create-blog-post-category-success', 'You successfully created a blog post category');
            } else {
                return redirect()->back()->with('create-blog-post-category-fail', 'A problem occurred while trying to create a blog post category. Please try again.');
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
