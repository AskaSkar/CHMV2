<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialsUsersRead extends Model
{
    /** @use HasFactory<\Database\Factories\MaterialsUsersReadFactory> */
    use HasFactory;
    protected $fillable = array(
        'material_id',
        'user_id',
    );
}
