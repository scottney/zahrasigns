<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPosts extends Model
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
        'blog_post_type_id',
        'blog_post_type_number',
        'blog_post_type_UUID',
        'blog_post_number',
        'blog_post_UUID',
        'blog_title',
        'blog_slug',
        'blog_body',
        'blog_excerpt',
        'blog_publish_time',
        'blog_publish_date',
        'blog_tags',
        'blog_is_featured',
        'blog_status',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'blog_featured_image',
        'created_by',
        'ratings',
        'views',
        'updated_by',
        'number_of_times_updated',
    ];

    public function blog_post_categories() 
    {
        return $this->belongsTo(BlogPostCategories::class, 'blog_post_category_id');
    }

    public function blog_post_types() 
    {
        return $this->belongsTo(BlogPostTypes::class, 'blog_post_type_id');
    }

}
