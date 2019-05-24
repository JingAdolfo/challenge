<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest {

	/**
	 *Get the validation rules that apply to the request.
	 *
	 *@return array
	 */

	public function rules()
	{
		return [
			'book_name' => 'required|unique:books',
			'book_pcs' => 'required',
			'author_name' => 'required',
			'index_no' => 'required',
		];
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}
} 