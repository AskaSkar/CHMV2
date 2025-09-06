<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use App\Models\LocationsEvent;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $events=Event::
        where('company_id',$user->company_id)
            ->orderBy('date_from','desc')
            ->get();
        $i=0;
        $seats['total'] =0;
        $seats['taken'] =0;
        $seats['unconfirmed'] =0;
        foreach ($events as $event) {
            $event_ar['events'][$i]['id']=$event->id_code;
            $event_ar['events'][$i]['date_from']=$event->date_from;
            $event_ar['events'][$i]['date_to']=$event->date_to;
            $event_ar['events'][$i]['name']=$event->name;
            $event_ar['events'][$i]['description']=$event->description;
            $event_ar['events'][$i]['image']=$event->logo_image_url;
            $event_ar['events'][$i]['seats']=$seats;
            $i++;
        }
        return $this->successResponse($event_ar);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($event_id_code)
    {
        $user = Auth::user();
        $event_id=json_decode(base64_decode($event_id_code))->id;
        $event=Event::where('id',$event_id)->first();
        $event_ar=array();
        if ($event !== null) {

            $event_ar['title'] = $event->name;
            $event_ar['date_from'] =$event->date_from;
            $event_ar['date_to'] =$event->date_to;
            $event_ar['image'] = $event->logo_image_url;
            $event_ar['name'] = $event->name;
            $event_ar['description'] = $event->description;
           // $event_ar['location']=$event->locations;



            if ($event->locations->count()>0) {
                $location_event = LocationsEvent::where('event_id', $event_id)->where('location_id', $event->locations[0]->id)->first();
                    $event_ar['location']['name'] = $event->locations[0]->loc_name;
                    $event_ar['location']['city'] = $event->locations[0]->loc_city;
                    $event_ar['location']['zip_code'] = $event->locations[0]->loc_zip_code;
                    $event_ar['location']['street'] = $event->locations[0]->loc_street;
                    $event_ar['location']['latitude'] = $event->locations[0]->lat;
                    $event_ar['location']['longitude'] = $event->locations[0]->lon;
                    $event_ar['location']['image'] = $event->locations[0]->image_url;
                    $event_ar['location']['phone'] = $event->locations[0]->loc_phone;
                    $event_ar['location']['email'] = $event->locations[0]->loc_email;
                    $event_ar['location']['www'] = $event->locations[0]->loc_web;
                    $event_ar['location']['header_description'] = $location_event->descr_header;
                    $event_ar['location']['description'] = $location_event->descr;
            } else {
                $event_ar['location']='';
            }
            $guardian_ar=array();
            $i=0;
            foreach ($event->guardians as $guardian ) {
                $user_guardian=User::where('id',$guardian->user_id)->first();
                $guardian_ar[$i]['name']=$user_guardian->firstname.' '.$user_guardian->lastname;
                $guardian_ar[$i]['email']=$user_guardian->email;
                $guardian_ar[$i]['phone']=$user_guardian->phone;
                $i++;
            }
            $event_ar['guardians']=$guardian_ar;
            $agenda_ar=array();
            $i=0;
            foreach ($event->agendas as $agenda) {
                $agenda_ar[$i]['id'] = $agenda->id_code;
                $agenda_ar[$i]['date'] = $agenda->date;
                $agenda_ar[$i]['day'] = $i+1;
                $agendaContent_ar=array();
                $y=0;
                foreach ($agenda->agendaContents as $agendaContent) {
                    $agendaContent_ar[$y]['time_from']=$agendaContent->time_from;
                    $agendaContent_ar[$y]['time_to']=$agendaContent->time_to;
                    $agendaContent_ar[$y]['place']=$agendaContent->where;
                    $agendaContent_ar[$y]['title']=$agendaContent->title;
                    $agendaContent_ar[$y]['speakers']=$agendaContent->speakers;
                    $agendaContent_ar[$y]['presenters']=$agendaContent->presenters;
                    $agendaContent_ar[$y]['description']=$agendaContent->description;
                    $agendaContent_ar[$y]['is_quiz']=$agendaContent->quiz;
                    $agendaContent_ar[$y]['is_online']=$agendaContent->online;
                    $y++;
                }
                $agenda_ar[$i]['content'] =$agendaContent_ar;
                $i++;
            };
            $event_ar['agenda']=$agenda_ar;





            if ($event->locations->count()>0) {
                $dinner_loc = $event->locations->where('is_restaurant', 1)->first();
                if ($dinner_loc->count() > 0) {
                    $dinner = LocationsEvent::where('event_id', $event_id)->where('location_id', $dinner_loc->id)->first();
                    $event_ar['dinner']['name'] = $dinner_loc->loc_name;
                    $event_ar['dinner']['city'] = $dinner_loc->loc_city;
                    $event_ar['dinner']['zip_code'] = $dinner_loc->loc_zip_code;
                    $event_ar['dinner']['street'] = $dinner_loc->loc_street;
                    $event_ar['dinner']['latitude'] = $dinner_loc->lat;
                    $event_ar['dinner']['longitude'] = $dinner_loc->lon;
                    $event_ar['dinner']['image'] = $dinner_loc->image_url;
                    $event_ar['dinner']['phone'] = $dinner_loc->loc_phone;
                    $event_ar['dinner']['email'] = $dinner_loc->loc_email;
                    $event_ar['dinner']['www'] = $dinner_loc->loc_web;
                    $event_ar['dinner']['header_description'] = $dinner->descr_header;
                    $event_ar['dinner']['description'] = $dinner->descr;
                } else {
                    $event_ar['dinner']='';
                }
            } else {
                $event_ar['dinner']='';
            }
            $matrial_ar=array();
            $i=0;
            if ($event->materials != null) {
                foreach ($event->materials as $matrial) {
                    $matrial_ar[$i]['id'] = $matrial->id_code;
                    $matrial_ar[$i]['name'] = $matrial->name;
                    $matrial_ar[$i]['file_type'] = $matrial->type;
                    if ($matrial->type==1 || $matrial->type==2 ) {
                        $matrial_ar[$i]['link'] = $matrial->link_url;
                    } else {
                        $matrial_ar[$i]['link'] = $matrial->link;
                    }
                    $matrial_ar[$i]['publication_date'] = $matrial->publication_date;
                    $i++;
                }
            }
            $event_ar['materials']=$matrial_ar;
            $photo_booth_ar=array();
            $i=0;
            if ($event->photoBooths != null) {
                foreach ($event->photoBooths as $photo_booth) {
                    $photo_booth_ar[$i]['id'] = $photo_booth->id_code;
                    $photo_booth_ar[$i]['image'] = $photo_booth->image_url;
                    $i++;
                }
            }
            $event_ar['photo_booth']=$photo_booth_ar;
        }
        return $this->successResponse($event_ar);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
