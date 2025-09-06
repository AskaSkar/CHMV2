<?php

namespace App\Http\Requests\UserNew;

use App\Enums\LikeType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
class StoreUserNewLikeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            'reaction_type'         => ['required', 'integer',sprintf('in:%s', implode(',', array_map(fn (LikeType $item) => $item->value, LikeType::cases())))],
        ];
    }
}
