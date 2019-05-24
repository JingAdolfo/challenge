<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest {

	/**
	 *Get the validation rules that apply to the request.
	 *
	 *@return array
	 */

	public function rules()
	{
		return [
			'course_code' => 'required',
			'course_name' => 'required',
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