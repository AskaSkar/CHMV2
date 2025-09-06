<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserNew extends Model
{
    /** @use HasFactory<\Database\Factories\UserNewFactory> */
    use HasFactory;


      protected $fillable = [
        'id',
        'publish_date',
        'publish_time',
        'title',
        'message',
        'picture',
        'user_id',
        'company_id',
        'highlight_entry',
        'block_comments',
        'block_reactions',
    ];

    protected $appends = [
        'picture_url',
        'id_code',
    ];
    protected $hidden = [
        'picture',
    ];
    public function getPictureUrlAttribute()
    {
        if (!$this->picture) {
            return null;
        }
        return asset('images'.DIRECTORY_SEPARATOR.$this->picture);
    }
    public function getIdCodeAttribute()
    {
        $user = Auth::user();
        $id_json=json_encode(array('id' =>$this->id,'token'=> $user->last_token));
        return base64_encode($id_json);
    }
    public function comments() {
        return $this->hasMany(Comment::class);
    }
    public function users(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function userNewReads() {
        return $this->hasMany(UserNewRead::class);
    }
    public function userNewLikes(){
        return $this->hasMany(UserNewLike::class);
    }
    public function userNewBookmarks() {
        return $this->hasMany(UserNewBookmark::class);
    }
    public function userNewAttachments() {
        return $this->hasMany( UserNewAttachment::class);
    }
    public function userNewTags(){
        return $this->hasMany( UserNewTag::class);
    }
    public function userNewGroups() {
         return $this->hasMany( UserNewGroup::class);
    }
}
