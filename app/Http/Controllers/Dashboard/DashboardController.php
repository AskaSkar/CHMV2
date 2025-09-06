<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\MaterialType;
use App\Http\Controllers\Controller;
use App\Models\AcademyMaterial;
use App\Models\Event;
use App\Models\Material;
use App\Models\Message;
use App\Models\UserNew;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $user = Auth::user();
        $news=UserNew::
            where('company_id',$user->company_id)
            ->orderBy('publish_date','desc')->orderBy('publish_time','desc')->limit(3)->get();
        $i=0;
        $news_ar=array();
        foreach ($news as $new) {
            $news_ar[$i]['id'] = $new->id_code;
            $news_ar[$i]['publish_date'] = $new->publish_date.' '.$new->publish_time;
            $news_ar[$i]['title'] = $new->title;
            $news_ar[$i]['image'] = $new->picture_url;
            $i++;
        }
       // $curr_date=Carbon::now();
        $events=Event::
            where('company_id',$user->company_id)
            ->whereDate('date_to','>=',Carbon::today())
            ->orderBy('date_from','desc')
            ->limit(3)
            ->get();
        $i=0;
        $event_ar=array();
        foreach ($events as $event) {
            $event_ar[$i]['id']=$event->id_code;
            $event_ar[$i]['date_from']=$event->date_from;
            $event_ar[$i]['date_to']=$event->date_to;
            $event_ar[$i]['name']=$event->name;
            $event_ar[$i]['image']=$event->logo_image_url;
            $i++;
        }

        $matrials=Material::orderBy('publication_date','desc')->limit(3)->get();
        $i=0;
        $matrial_ar=array();
        foreach ($matrials as $matrial) {
            $matrial_ar[$i]['id']=$matrial->id_code;
            $matrial_ar[$i]['name']=$matrial->name;
            $matrial_ar[$i]['file_type'] =  $matrial->type;
            if ($matrial->type==1 || $matrial->type==2 ) {
                $matrial_ar[$i]['link'] = $matrial->link_url;
            } else {
                $matrial_ar[$i]['link'] = $matrial->link;
            }
            $matrial_ar[$i]['publication_date']=$matrial->publication_date;
            if ($matrial->event_id != NULL) {
                $matrial_ar[$i]['type'] = MaterialType::EVENT_MATERIAL->value;
                $mat_event=Event::find($matrial->event_id);
                $matrial_ar[$i]['event_title']=$mat_event->name;
                $matrial_ar[$i]['date_from']=$mat_event->date_from;
                $matrial_ar[$i]['date_to']=$mat_event->date_to;
            } else {
                $matrial_ar[$i]['type'] = MaterialType::GENERAL_MATERIAL->value;
            }
            $i++;
        }
        $academy_materials=AcademyMaterial::where('company_id',$user->company_id)
            ->orderBy('publication_date','desc')
            ->limit(3)
            ->get();
        $i=0;
        $academy_matrial_ar=array();
        foreach ($academy_materials as $academy_material) {
            $academy_matrial_ar[$i]['id']=$academy_material->id_code;
            $academy_matrial_ar[$i]['name']=$academy_material->name;
            $academy_matrial_ar[$i]['file_type']=$academy_material->type;
            $academy_matrial_ar[$i]['link']=$academy_material->link_url;
            $academy_matrial_ar[$i]['publication_date']=$academy_material->publication_date;
            $i++;
        }
        $array['news']=$news_ar;
        $array['events']=$event_ar;
        $array['materials']=$matrial_ar;
        $array['academy']=$academy_matrial_ar;
        return $this->successResponse($array);
    }
}
