<?php

namespace App\Http\Requests;

use App\Models\Build;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBuildRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('build_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'additional_photos' => [
                'array',
            ],
            'documents' => [
                'array',
            ],
            'categories.*' => [
                'integer',
            ],
            'categories' => [
                'array',
            ],
            'timeframe' => [
                'string',
                'nullable',
            ],
            'slug' => [
                'string',
                'nullable',
            ],
            'customer_company' => [
                'string',
                'nullable',
            ],
            'customer_name' => [
                'string',
                'nullable',
            ],
            'customer_link' => [
                'string',
                'nullable',
            ],
            'customer_website' => [
                'string',
                'nullable',
            ],
        ];
    }
}
