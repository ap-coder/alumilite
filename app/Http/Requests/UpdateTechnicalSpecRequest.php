<?php

namespace App\Http\Requests;

use App\Models\TechnicalSpec;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTechnicalSpecRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('technical_spec_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'value' => [
                'string',
                'nullable',
            ],
            'icon_class' => [
                'string',
                'nullable',
            ],
        ];
    }
}
