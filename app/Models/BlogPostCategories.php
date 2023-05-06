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
        'user_name',
        'blog_category_number',
        'blog_category_UUID',
        'blog_category_name',
        'blog_category_slug',
        'blog_category_type',
        'blog_category_description',
    ];




}
