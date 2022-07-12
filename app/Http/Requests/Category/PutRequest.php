<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;


class PutRequest extends FormRequest
{
  
    public function rules()
    {
        return [

            'title' => 'required|min:5|max:500',
            'slug' => 'required|min:5|max:500|unique:categories,slug,'.$this->route('category')->id,
            //'slug' => 'required|min:5|max:500|unique:posts',

        ];
    }
}
