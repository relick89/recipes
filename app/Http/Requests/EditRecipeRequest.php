<?php

namespace Recipes\Http\Requests;

use Recipes\Http\Requests\Request;

class EditRecipeRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'ingredient_list' => 'required',
            'description' => 'required',
        ];
    }
}
