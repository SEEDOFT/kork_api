<?php

namespace App\Http\Requests\Event;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
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
            'event_name' => ['sometimes'],
            'event_type' => ['sometimes', 'max:20'],
            'description' => ['sometimes'],
            'location' => ['sometimes', 'string'],
            'poster_url' => ['sometimes', 'image'],
            'start_time' => ['sometimes', 'date'],
            'end_time' => ['sometimes', 'date'],
        ];
    }
}
