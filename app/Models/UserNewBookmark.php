<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNewBookmark extends Model
{
    /** @use HasFactory<\Database\Factories\UserNewBookmarkFactory> */
    use HasFactory;
    protected $fillable = [
        'id',
        'user_new_id',
        'user_id',
        'company_id',
    ];
}
