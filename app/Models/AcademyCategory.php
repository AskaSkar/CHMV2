<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class AcademyCategory extends Model
{
    /** @use HasFactory<\Database\Factories\AcademyCategoryFactory> */
    use HasFactory;
    protected $fillable = array(
        'parent_category_id',
        'lp',
        'name',
        'type',
        'company_id',
    );
    protected $appends = [
        'id_code',
    ];
    public function getIdCodeAttribute()
    {
        $user = Auth::user();
        $id_json=json_encode(array('id' =>$this->id,'token'=> $user->last_token));
        return base64_encode($id_json);
    }
}
