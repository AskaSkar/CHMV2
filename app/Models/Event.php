<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Auth;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = array(
        'id',
        'name',
        'date_from',
        'date_to',
        'bg_image',
        'logo_image',
        'icon_color',
        'txt_light_color',
        'txt_dark_color',
        'bg_light_color',
        'bg_dark_color',
        'user_info1_txt',
        'user_info2_txt',
        'company_id',
        'published',
        'data_publication',
        'description',
        'eventscol',
        'date_registration_representative',
        'status',
        'participants_total',
        'inside',
        'info',
        'coordinator_id',
        'events_type_id',
        'events_area_id',
        'location_id',
        'data_publication_to',
        'date_registration_representative_to',
        'with_hotel',
        'with_scientific_society',
        'additional_registration_end_date',
        'btn_visible',
        'is_online',
        'number_registrations_central',
        'photobooth_access',
        'photobooth_liked_strat_date',
        'photobooth_liked_strat_time',
        'photobooth_liked_end_date',
        'photobooth_liked_end_time',
        'photobooth_liked_max_count',
    );
    protected $appends = [
        'logo_image_url',
        'id_code',
    ];

    protected $hidden = [
        'logo_image',
    ];
    public function getLogoImageUrlAttribute()
    {
        if (!$this->logo_image) {
            return null;
        }

        return asset('images'.DIRECTORY_SEPARATOR.$this->logo_image);
    }
    public function getIdCodeAttribute()
    {
        $user = Auth::user();
        $id_json=json_encode(array('id' =>$this->id,'token'=> $user->last_token));
        return base64_encode($id_json);
    }
    public function locations():BelongsToMany {
        return $this->belongsToMany( Location::class,'locations_events','event_id','location_id');
    }
    public function agendas() {
        return $this->hasMany(Agenda::class);
    }
    public function materials() {
        return $this->hasMany(Material::class);
    }
    public function photoBooths() {
       return $this->hasMany( PhotoBooth::class);
    }
    public function guardians() {
        return $this->hasMany(Guardian::class);
    }
}
