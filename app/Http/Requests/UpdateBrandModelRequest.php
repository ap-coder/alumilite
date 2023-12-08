<?php

namespace App\Http\Requests;

use App\Models\BrandModel;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBrandModelRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('brand_model_edit');
    }

    public function rules()
    {
        return [
            'model' => [
                'string',
                'nullable',
            ],
            'description' => [
                'string',
                'nullable',
            ],
        ];
    }
}
