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
        'user_name',
        'blog_category_id',
        'blog_category_number',
        'blog_category_UUID',
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



}
