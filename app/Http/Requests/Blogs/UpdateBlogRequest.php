<?php

namespace App\Http\Requests\Blogs;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
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
    public function rules()
    {
        return [
        'title.*' => ['required','max:255'],
        'sub_title.*' => ['required','max:255'],
        'title_tow.*' => ['required','max:255'],
        'sub_title_tow.*' => ['required','max:255'],
        'title_three.*' => ['required','max:255'],
        'sub_title_three.*' => ['required','max:255'],
        'title_four.*' => ['required','max:255'],
        'sub_title_four.*' => ['required','max:255'],
        'description.*' => ['required','max:5000'],
        'sub_description.*' => ['required','max:5000'],
        'button.*' => ['required','max:255'],
        'sub_button.*' => ['required','max:255'],
        'date.*' => ['required','max:255'],
        'button.*' => ['required','max:255'],
        'map' => ['required','max:255'],
        'route' => ['required','max:255'],
        'sort' => ['required','max:255'],
        'facebook' => ['required','max:255'],
        'twitter' => ['required','max:255'],
        'instagram' => ['required','max:255'],
        'status' => ['required','max:255'],
        'image'  =>'nullable|image',
        'image2'  =>'nullable|image',
        ];
    }
}
