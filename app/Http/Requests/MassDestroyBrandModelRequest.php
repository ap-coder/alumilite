<?php

namespace App\Http\Requests;

use App\Models\BrandModel;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyBrandModelRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('brand_model_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:brand_models,id',
        ];
    }
}
