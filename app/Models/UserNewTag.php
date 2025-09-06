<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNewTag extends Model
{
    /** @use HasFactory<\Database\Factories\UserNewTagFactory> */
    use HasFactory;
    protected $fillable = [
        'id',
        'user_new_id',
        'company_id',
        'tag',
    ];
}
