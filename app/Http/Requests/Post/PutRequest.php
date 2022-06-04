<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class PutRequest extends FormRequest
{
  
    public function rules()
    {
        return [

            'title' => 'required|min:5|max:500',
            'content' => 'required|min:7|max:500',
            'category_id' => 'required|integer',
            'slug' => 'required|min:5|max:500|unique:posts,slug,'.$this->route('post')->id,
            //'slug' => 'required|min:5|max:500|unique:posts',
            'description' => 'required|min:7',
            'posted' => 'required',
            'image' => 'mimes:jpeg,jpg,bmp,png|max:10240',
            
        ];
    }
}
