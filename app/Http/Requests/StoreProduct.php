<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->isAdmin() || $this->user()->isModerator();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $validation = [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ];

        if ($this->method() === "POST") {
            $validation['image'] = 'required|image|max:2048';
        }

        return $validation;
    }
}
