<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePackageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'services.*' => 'required|integer|exists:services,id',
            'cycle_id' => 'required|integer|exists:cycles,id',
            'amount' => 'required|numeric',
            'name' => 'required|string|max:255',
            'status' => 'required|string|in:active,inactive,deleted'
        ];
    }
}
