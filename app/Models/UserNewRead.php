<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNewRead extends Model
{
    /** @use HasFactory<\Database\Factories\UserNewReadFactory> */
    use HasFactory;
    protected $fillable = [
        'id',
        'user_new_id',
        'user_id',
        'company_id',
    ];
    public function users(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
