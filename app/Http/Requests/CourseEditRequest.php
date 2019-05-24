<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseEditRequest extends FormRequest {
	public function rules()
	{
		return [
			
		];
	}

	public function authorize()
	{
		return true;
	}
}