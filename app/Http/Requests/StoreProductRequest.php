<?php

namespace App\Http\Requests;
namespace App\Http\Requests\Users;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreProductRequest extends FormRequest
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
            'name'=>'required|max:225|unique:products',
            'description'=>'required',
            'price'=>'required|max:10',
            'stock'=>'required|max:6',
            'discount'=>'required|max:2',
        ];
    }
}