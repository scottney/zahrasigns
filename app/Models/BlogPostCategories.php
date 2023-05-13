<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPostCategories extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string<int, string>
     */
    protected $fillable = [
        'user_id',
        'user_number',
        'user_UUID',
        'blog_post_category_number',
        'blog_post_category_UUID',
        'blog_post_category_name',
        'blog_post_category_slug',
        'blog_post_category_type_id',
        'blog_post_category_description',
    ];

    public function blog_post_types() 
    {
        return $this->hasOne(BlogPostTypes::class, 'blog_post_category_id', 'id');
    }

    public function blog_posts() 
    {
        return $this->hasOne(BlogPosts::class, 'blog_post_category_id', 'id');
    }

}
