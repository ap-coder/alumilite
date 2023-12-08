<?php

namespace App\Http\Requests;

use App\Models\Review;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateReviewRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('review_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'body' => [
                'required',
            ],
            'website' => [
                'string',
                'nullable',
            ],
            'rating' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'signiture' => [
                'string',
                'nullable',
            ],
            'signiture_company' => [
                'string',
                'nullable',
            ],
            'photo' => [
                'array',
            ],
        ];
    }
}
