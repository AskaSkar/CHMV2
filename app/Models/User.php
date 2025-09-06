<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use OpenApi\Attributes as OAT;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    use Notifiable;
    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'firstname',
        'lastname',
        'email',
        'password',
        'last_token',
        'phone',
        'company_id',
        'npwz',
        'address',
        'zip_code',
        'city',
        'pesel',
        'business',
        'nip',
        'business_name',
        'tax_office',
        'acceptance_of_the_rules',
        'acceptance_of_the_privacy_policy',
        'acceptance_of_receive_marketing_information',
        'admin',
        'news_editor',
        'photo_booths_editor'
    ];
    protected $appends = [
        'id_code',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function groups():BelongsToMany {
        return $this->belongsToMany(Group::class,'group_users','user_id','group_id');
    }
    public function getIdCodeAttribute()
    {
        $user = Auth::user();
        $id_json=json_encode(array('id' =>$this->id,'token'=> $user->last_token));
        return base64_encode($id_json);
    }
}
