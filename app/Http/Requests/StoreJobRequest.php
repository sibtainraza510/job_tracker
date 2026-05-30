<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
{
    return [
        'title' => [
            'required',
            'string',
            'max:255',
            'min:3',
        ],

        'company_name' => [
            'required',
            'string',
            'max:255',
        ],

        'location' => [
            'nullable',
            'string',
            'max:255',
        ],

        'salary' => [
            'nullable',
            'numeric',
            'min:0',
        ],

        'status' => [
            'required',
            'in:pending,applied,interview,rejected,offer,ghosted',
        ],

        'application_url' => [
            'nullable',
            'url',
            'max:500',
        ],

        'applied_at' => [
            'nullable',
            'date',
        ],

        'notes' => [
            'nullable',
            'string',
            'max:5000',
        ],
    ];
}

public function messages(): array
{
    return [
        'title.required' => 'Job title is required.',
        'status.in' => 'Invalid status selected.',
        'salary.numeric' => 'Salary must be numeric.',
    ];
}
}