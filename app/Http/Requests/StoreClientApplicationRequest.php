<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientApplicationRequest extends FormRequest
{
    protected $redirectRoute = 'applications.create';
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
            'name' => ['required','string','max:20'],
            'phone' => ['required','string','max:20'],
            'company' => ['required','string','max:100'],
            'title' => ['required','string','max:255'],
            'message' => ['sometimes'],
            'attachment' => ['sometimes','image', 'mimes:jpg,png,jpeg,gif,svg']
        ];
    }
}
