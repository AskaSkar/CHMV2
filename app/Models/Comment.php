<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;
    //const CREATED_AT = 'creation_date';

    //const UPDATED_AT = 'updated_date';
    protected $fillable = [
        'id',
        'message',
        'user_id',
        'company_id',
        'title',
        'user_new_id',

    ];
    public function users(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function getIdCodeAttribute()
    {
        $user = Auth::user();
        $id_json=json_encode(array('id' =>$this->id,'token'=> $user->last_token));
        return base64_encode($id_json);
    }
}
