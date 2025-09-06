<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class AcademyMaterial extends Model
{
    /** @use HasFactory<\Database\Factories\AcademyMaterialFactory> */
    use HasFactory;
    protected $fillable = array(
        'id',
        'company_id',
        'id_academy_category',
        'name',
        'type',
        'lp',
        'link',
        'tags',
        'qrcode',
        'therapeutic_area',
        'group_id',
        'rating',
        'publication_date',
    );
    protected $appends = [
        'picture_url',
        'id_code',
    ];
    protected $hidden = [
        'link',
    ];
    public function getLinkUrlAttribute()
    {
        if (!$this->link) {
            return null;
        }
        return asset('academy'.DIRECTORY_SEPARATOR.$this->link);
    }
    public function getIdCodeAttribute()
    {
        $user = Auth::user();
        $id_json=json_encode(array('id' =>$this->id,'token'=> $user->last_token));
        return base64_encode($id_json);
    }
    public function reads() {
        return $this->belongsTo(MessageUserRead::class);
    }
}
