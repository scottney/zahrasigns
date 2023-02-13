<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestQuote extends Model
{
    use HasFactory;

    // Table name definition
    protected $table = 'request_quote';

     /**
     * The attributes that are mass assignable.
     *
     * @var string<int, string>
     */
    protected $fillable = [
        'full_names', 
        'email', 
        'phone_number',
        'postal_code',
        'quote',
        'file_upload'
    ];
}
