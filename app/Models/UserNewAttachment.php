<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserNewAttachment extends Model
{
    /** @use HasFactory<\Database\Factories\UserNewAttachmentFactory> */
    use HasFactory;
    protected $fillable = [
        'id',
        'company_id',
        'user_new_id',
        'title',
        'link',
        'picture',
        'file_type',
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
}
