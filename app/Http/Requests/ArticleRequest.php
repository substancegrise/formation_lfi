<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends Request
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
            'titre' => 'required|string',
            'date_event'=> 'required|after:today',
            'article_category_id' => 'required|integer',
            'status' => 'in:published,unpublished',
            'content'=> 'required|string',
            'adresse' => 'required|string',
            'description' => 'required|string',
            'picture' => 'image|max:3000'
        ];
    }
}
