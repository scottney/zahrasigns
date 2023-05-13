<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPostTypes extends Model
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
        'blog_post_category_id',
        'blog_post_category_number',
        'blog_post_category_UUID',
        'blog_post_type_number',
        'blog_post_type_UUID',
        'blog_post_type_name',
        'blog_post_type_slug',
        'blog_post_type_description',
    ];

    public function blog_post_categories() 
    {
        return $this->belongsTo(BlogPostCategories::class, 'blog_post_category_id');
    }

    public function blog_posts() 
    {
        return $this->hasOne(BlogPosts::class, 'blog_post_type_id', 'id');
    }

}
