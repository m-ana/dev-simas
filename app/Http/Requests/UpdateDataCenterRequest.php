<?php

namespace App\Http\Requests;

use App\Models\DataCenter;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDataCenterRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('data_center_edit');
    }

    public function rules()
    {
        return [
            'nama' => [
                'string',
                'max:50',
                'nullable',
            ],
        ];
    }
}
