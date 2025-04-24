<?php

namespace App\Http\Requests\Courses;

use Illuminate\Foundation\Http\FormRequest;

class CourseCategorySaveRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => ['required', 'image', 'max:3000'],
            'name' => ['required', 'string', 'max:255', 'unique:course_categories,name'],
            'icon' => ['required', 'string', 'max:40'],
            'show_at_trading' => ['nullable', 'boolean'],
            'status' => ['nullable', 'boolean'],
        ];
    }
}
