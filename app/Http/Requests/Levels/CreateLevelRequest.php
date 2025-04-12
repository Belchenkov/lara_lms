<?php

namespace App\Http\Requests\Levels;

use Illuminate\Foundation\Http\FormRequest;

class CreateLevelRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:3', 'max:255', 'unique:course_levels,name'],
        ];
    }
}
