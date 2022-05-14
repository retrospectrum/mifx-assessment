<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostBookRequest extends FormRequest
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
        // @TODO implement
        return [
            'isbn' => 'required|max:13|string|numeric',
            'title' => 'required|string',
            'description' => 'required|string',
            'author.id' => 'required|int[]',
            'published_year' => 'required|digits:4'
        ];
    }
}
