<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Models\Message;
use App\Models\MessageUserRead;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //if ($exception instanceof \Illuminate\Session\TokenMismatchException) {
        //    return response()->json(['error' => 'token_expired'], 401);
        //}
        $user = Auth::user();
        $messages=Message::
        where('company_id',$user->company_id)
            ->orderBy('publish_date','desc')->orderBy('publish_time','desc')->get();

        $i=0;

        foreach ($messages as $message) {
            if (MessageUserRead::where('user_id',$user->id)->where('message_id',$message->id)->count()>0) {
                $is_read=true;
            } else {
                $is_read=false;
            }
            $messages_ar[$i]['id']=$message->id_code;
            $messages_ar[$i]['publish_date']=$message->publish_date;
            $messages_ar[$i]['publish_time']=$message->publish_time;
            $messages_ar[$i]['title']=$message->title;
            $messages_ar[$i]['picture']=$message->picture_url;
            $messages_ar[$i]['is_read']=$is_read;
            $i++;
        }
        $array['messages']=$messages_ar;
        return $this->successResponse($array);
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
    public function store(StoreMessageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($message_id_code)
    {
        $user = Auth::user();
        $message_id=json_decode(base64_decode($message_id_code))->id;
        $message=Message::where('id',$message_id)->first();
        $messages_ar['id']=$message->id_code;
        $messages_ar['title']=$message->title;
        $messages_ar['message']=$message->message;
        $messages_ar['publish_date']=$message->publish_date;
        $messages_ar['publish_time']=$message->publish_time;
        $messages_ar['picture']=$message->picture_url;
        if ($message->event_id !== null) {
            $id_event_code=base64_encode(json_encode(array('id' => $message->event_id, 'token' => $user->last_token)));
        } else {
            $id_event_code= null;
        }

        if ($message->material_id !== null) {
            $id_material_code=base64_encode(json_encode(array('id' => $message->material_id, 'token' => $user->last_token)));
        } else {
            $id_material_code= null;
        }
        if ($message->academy_material_id !== null) {
            $id_academy_material_code=base64_encode(json_encode(array('id' => $message->academy_material_id, 'token' => $user->last_token)));
        } else {
            $id_academy_material_code= null;
        }
        $messages_ar['event_id']=$id_event_code;
        $messages_ar['material_id']=$id_material_code;
        $messages_ar['academy_material_id']=$id_academy_material_code;
        $is_read=true;
        if (MessageUserRead::where('user_id',$user->id)->where('message_id',$message->id)->count()>0) {

        } else {
            MessageUserRead::create([
                'user_id' => $user->id,
                'message_id' => $message_id,
                'company_id' => $user->company_id,
            ]);
        }
        $messages_ar['is_read']=$is_read;
       return $this->successResponse($messages_ar);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
