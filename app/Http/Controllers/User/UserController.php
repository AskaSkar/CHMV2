<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {

    }
    public function show()
    {
        $user = Auth::user();
        $id_json=json_encode(array('id' =>$user->id,'token'=> $user->last_token));
        $user_ar['id']=base64_encode($id_json);
        $user_ar['email']=$user->email;
        $user_ar['firstName']=$user->firstname;
        $user_ar['lasName']=$user->lastname;
        $user_ar['role']=$user->role;
        $user_ar['phone']=$user->phone;
        $user_ar['npwz']=$user->npwz;
        $user_ar['address']=$user->address;
        $user_ar['zip_code']=$user->zip_code;
        $user_ar['city']=$user->city;
        $user_ar['pesel']=$user->pesel;
        $user_ar['business']=$user->business;
        $user_ar['nip']=$user->nip;
        $user_ar['business_name']=$user->business_name;
        $user_ar['tax_office']=$user->tax_office;
        $user_ar['acceptance_of_the_rules']=$user->acceptance_of_the_rules;
        $user_ar['acceptance_of_the_privacy_policy']=$user->acceptance_of_the_privacy_policy;
        $user_ar['acceptance_of_receive_marketing_information']=$user->acceptance_of_receive_marketing_information;
        $groups='';
        foreach ($user->groups as $group) {
            if ($groups === '') {
                $groups=$group->name;
            } else {
                $groups = $groups . ', ' . $group->name;
            }
        };
        $user_ar['groups']=$groups;


        return $this->successResponse($user_ar);
    }
}
