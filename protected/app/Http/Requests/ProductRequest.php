<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request {

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
            //
            'category_id'       => 'required',
            'title'             => 'required',
            'caption'           => 'required',
            'description'       => 'required',
            'image'             => 'mimes:jpeg,jpg,png|max:2000'
        ];
    }

    public function messages() {
        return [
            'category_id.required'  => 'Lengkapi Kategori Produk.',
            'title.required'        => 'Lengkapi Nama Produk.'
        ];
    }

}
