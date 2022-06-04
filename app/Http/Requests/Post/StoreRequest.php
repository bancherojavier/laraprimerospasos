<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    protected function prepareForValidation()
    {
        $this->merge([
            //'slug' => Str::slug($this->title) 
            'slug' => str($this->title)->slug()
        ]);
    }

    public function rules()
    {
        return [

            'title' => 'required|min:5|max:500',
            'content' => 'required|min:7|max:500',
            'category_id' => 'required|integer',
            'slug' => 'required|min:5|max:500|unique:posts',
            'description' => 'required|min:7',
            'posted' => 'required',
            
        ];
    }
}
