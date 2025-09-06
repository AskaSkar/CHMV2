<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class LoginApiController extends Controller
{
    public function loginViaApi(LoginRequest $request)
    {
        if (!auth()->attempt($request->validated())) {
            return $this->errorResponse([__('The provided credentials do not match our records.')]);
        }
        $token = $request->user()->createToken('auth', ['user-auth']);
        $array['token']=$token->plainTextToken;
        $user= Auth::user();
        $id_json=json_encode(array('id' =>$user->id,'token'=> $token->plainTextToken));
        $user_ar['id']=base64_encode($id_json);
        $user_ar['email']=$user->email;
        $user_ar['firstName']=$user->firstname;
        $user_ar['lasName']=$user->lastname;
        $user_ar['role']=$user->role;
        $user_ar['admin']=$user->admin;
        $user_ar['news_editor']=$user->news_editor;
        $user_ar['photo_booths_editor']=$user->photo_booths_editor;
        $array['user']=$user_ar;

        $user->last_token=$token->plainTextToken;
        $user->save();
        return $this->successResponse($array);
    }
    public function getAuthUserData(): \Illuminate\Http\JsonResponse
    {
        $user = Auth::user();
        $id_json=json_encode(array('id' =>$user->id,'token'=> $user->last_token));
        $user_ar['id']=base64_encode($id_json);
        $user_ar['email']=$user->email;
        $user_ar['firstName']=$user->firstname;
        $user_ar['lasName']=$user->lastname;
        $user_ar['role']=$user->role;
        $user_ar['admin']=$user->admin;
        $user_ar['news_editor']=$user->news_editor;
        $user_ar['photo_booths_editor']=$user->photo_booths_editor;
        return $this->successResponse($user_ar);
    }
}

