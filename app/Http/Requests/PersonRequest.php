<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest {

	/**
	 *Get the validation rules that apply to the request.
	 *
	 *@return array
	 */

	public function rules()
	{
		return [
			'first_name' => 'required|unique:persons',
			'last_name' => 'required',
			'middle_initial' => 'required',
			'age' => 'required',
			'address' => 'required',
			'gender_id' => 'required',
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