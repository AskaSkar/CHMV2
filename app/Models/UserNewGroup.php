<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNewGroup extends Model
{
    /** @use HasFactory<\Database\Factories\UserNewGroupFactory> */
    use HasFactory;
    protected $fillable = [
        'id',
        'user_new_id',
        'company_id',
        'group_id',
    ];
}
