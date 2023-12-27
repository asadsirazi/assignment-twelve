<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBusRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $current_user_role = \App\Enums\UserRole::tryFrom(auth()->user()->user_role);

        if('admin' === strtolower($current_user_role->name)) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:200',
            'type' => 'nullable|integer',
            'status' => 'nullable|integer',
            'seat_capacity' => 'required|integer'
        ];
    }
}
