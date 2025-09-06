<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ChangePassword;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use OpenApi\Attributes as OAT;

class PasswordController extends Controller
{
    #[OAT\Put(
        path: '/api/auth/change-password',
        operationId: 'password',
        security: [['bearerToken' => []]],
        requestBody: new OAT\RequestBody(
            required: true,
            content: [
                new OAT\JsonContent(
                    properties: [
                        new OAT\Property(property: 'current_password', type: 'string'),
                        new OAT\Property(property: 'password', type: 'string'),
                        new OAT\Property(property: 'password_confirmation', type: 'string'),
                    ]
                ),
            ]
        ),
        tags: ['Auth'],
        responses: [
            new OAT\Response(
                response: 204,
                description: 'Success',
            ),
        ]
    )]
    public function update(ChangePassword $request): JsonResponse
    {
        $auth = Auth::user();
        // The passwords matches
        if (!Hash::check($request->validated()['current_password'], $auth->password)) {
            return $this->errorResponse([__('Current Password is Invalid')]);
        }

        // Current password and new password same
        if (0 == strcmp($request->validated()['current_password'], $request->validated()['password'])) {
            return $this->errorResponse([__('New Password cannot be same as your current password.')]);
        }

        $user = User::find($auth->id);
        $user->password = Hash::make($request->validated()['password']);
        $user->save();

        return $this->emptyResponse();
    }
}
