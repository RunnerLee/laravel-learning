<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\Category;
use Gate;

class StoreArticleRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_id'       => 'required|int',
            'title'             => 'required|mix:255|min:2',
            'original_content'  => 'required|min:2',
        ];
    }
}
