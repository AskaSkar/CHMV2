<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePhotoBoothRequest;
use App\Http\Requests\UpdatePhotoBoothRequest;
use App\Models\Event;
use App\Models\PhotoBooth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PhotoBoothController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($event_id_code)
    {
        $user = Auth::user();
        if ($user !== null) {
            $event_id=json_decode(base64_decode($event_id_code))->id;

            $event=Event::where('id',$event_id)->first();

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
            return $this->successResponse($event_ar);
        }
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
    public function store(StorePhotoBoothRequest $request,$event_id_code)
    {
        $user = Auth::user();
        if ($user !== null) {
            if ($request->image !== null) {
                $event_id=json_decode(base64_decode($event_id_code));
                $mytime = Carbon::now()->timestamp;
                $file_name = 'image_photo_' . $mytime . '.jpg';
                Storage::disk('images')->put($file_name, base64_decode($request['image']));
                PhotoBooth::create([
                    'image' => $file_name,
                    'user_id' => $user->id,
                    'company_id' => $user->company_id,
                    'event_id' => $event_id->id,
                ]);
            }
        }
        return $this->emptyResponse();
    }

    /**
     * Display the specified resource.
     */
    public function show(PhotoBooth $photoBooth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($photo_booth_id_code)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePhotoBoothRequest $request, PhotoBooth $photoBooth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($photo_booth_id_code)
    {
        $user = Auth::user();
        $photo_booth_id=json_decode(base64_decode($photo_booth_id_code));
        $photo_booth=PhotoBooth::where('id',$photo_booth_id->id) -> first();
        if ($photo_booth != null) {
            if ($photo_booth->user_id != $user->id) {
                return $this->errorResponse([__('Permissions denied.')]);
            }
            if ($photo_booth->image !== null && Storage::disk('images')->exists($photo_booth->image)) {
                Storage::disk('images')->delete($photo_booth->image);
            }
            $photo_booth->delete();
        }
        return $this->emptyResponse();
    }
}
