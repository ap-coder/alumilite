<?php

namespace App\Http\Requests;

use App\Models\Snippet;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSnippetRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('snippet_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
