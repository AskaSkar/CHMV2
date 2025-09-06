<?php

namespace App\Http\Controllers\UserNew;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserNewGroupRequest;
use App\Http\Requests\UpdateUserNewGroupRequest;
use App\Models\Group;
use App\Models\UserNew;
use App\Models\UserNewGroup;
use Illuminate\Support\Facades\Auth;

class UserNewGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $i=0;
        $groups_arr=array();
        foreach ($user->groups as $group) {
            $groups_arr[$i]['id'] =$group ->id_code;
            $groups_arr[$i]['name'] =$group ->name;
            $i++;
        }
        $array['groups']=$groups_arr;
        return $this->successResponse($array);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserNewGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($group_id_code)
    {
        $user = Auth::user();
        $group_id=json_decode(base64_decode($group_id_code))->id;
        $user_news_group=UserNewGroup::where('group_id',$group_id)->get();
        $i=0;
        $news_ar=array();
        foreach ($user_news_group as $user_new_group) {
            $new=UserNew::where('id',$user_new_group->user_new_id)->first();
            $news_ar[$i]['id'] = $new->id_code;
            $news_ar[$i]['publish_date'] = $new->publish_date.' '.$new->publish_time;
            $news_ar[$i]['title'] = $new->title;
            $news_ar[$i]['description'] = $new->message;
            if ($new->userNewBookmarks->count()>0) {
                $news_ar[$i]['isBookmarked'] = true;
            } else {
                $news_ar[$i]['isBookmarked'] = false;
            }
            //$news_ar[$i]['user'] = $new->users->firstname.' '.$new->users->lastname;
            $news_ar[$i]['author']['id']=$new->users->id_code;
            $news_ar[$i]['author']['name'] = $new->users->firstname.' '.$new->users->lastname;
            $groups='';
            foreach ($new->users->groups as $group) {
                if ($groups === '') {
                    $groups=$group->name;
                } else {
                    $groups = $groups . ', ' . $group->name;
                }
            };
            $news_ar[$i]['author']['groups'] = $groups;

            $news_ar[$i]['read_count'] = $new->userNewReads->count();
            $news_ar[$i]['reactions_count'] = $new->userNewLikes->count();
            $news_ar[$i]['comments_count'] = $new->comments->count();
            $news_ar[$i]['image'] = $new->picture_url;
            $i++;

        }
        $array['news']=$news_ar;
        return $this->successResponse($array);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserNewGroup $userNewGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserNewGroupRequest $request, UserNewGroup $userNewGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserNewGroup $userNewGroup)
    {
        //
    }
}
