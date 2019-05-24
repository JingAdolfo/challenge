<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Http\Requests\CourseRequest;
use App\Http\Requests\CourseEditRequest;
use App\Http\Requests\DeleteRequest;

use Illuminate\Http\Request;
use Config;    
use Datatables;
use Hash;

class CourseController extends Controller {


	public function index()
	{
		return view('course/index');
	}

	public function getcreate()
	{
		$action = 0;

		return view('course/create',compact('action'));

	}

	public function postCreate(CourseRequest $course_request){

		$course = new Courses();
        $course->course_code = $course_request->course_code;
        $course->course_name = $course_request->course_name;
        $course->save();

        return redirect('course');
	}

	public function getEdit($id){

		$action = 1;
		$courses = Courses::find($id);
		return view('course/edit',compact('courses','action'));
	}

	public function postEdit(CourseEditRequest $course_edit_request,$id){

		$courses = Courses::find($id);
		$courses ->course_code = $course_edit_request->course_code;
		$courses ->course_name= $course_edit_request->course_name;
		$courses ->save();

		return redirect('course');
	}

		public function getDelete($id){

		$action = 2;
		$courses = courses::find($id);
		return view('course/delete',compact('courses','action'));
	}

	public function postDelete(DeleteRequest $request){

		$courses = courses::find($request->id);
		$courses ->delete();

		return redirect('course');
	}

	public function data()
    {   
        $course_list = Courses::select('id','course_code','course_name')->orderBy('course_name');
    
        return Datatables::of($course_list)
        	->add_column('actions', '<a href="{{{ URL::to(\'course/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm" ><span class="glyphicon glyphicon-pencil"></span>  {{ Lang::get("form.edit") }}</a>
                    <a href="{{{ URL::to(\'course/\' . $id . \'/delete\' ) }}}" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> {{ Lang::get("form.delete") }}</a>
                ')
            ->remove_column('id')
            ->make();
    }

}
