<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Persons;
use App\Models\Gender;
use App\Http\Requests\PersonRequest;
use App\Http\Requests\PersonEditRequest;
use App\Http\Requests\DeleteRequest;

use Illuminate\Http\Request;
use Config;    
use Datatables;
use Hash;

class PersonController extends Controller {


	public function index()
	{
		return view('person/index');
	}

	public function getcreate()
	{
		$action = 0;
		$gender_list = Gender::all();
		return view('person/create',compact('action','gender_list'));

	}

	public function postCreate(PersonRequest $person_request){

		$persons = new Persons();
        $persons->first_name = $person_request->first_name;
        $persons->last_name = $person_request->last_name;
        $persons->middle_initial = $person_request->middle_initial;
        $persons->age = $person_request->age;
        $persons->address = $person_request->address;
        $persons->gender_id = $person_request->gender_id;
        $persons->save();

        return redirect('person');
	}

	public function getEdit($id){

		$action = 1;
		$persons = Persons::find($id);
		$gender_list = Gender::all();
		return view('person/edit',compact('persons','action','gender_list'));
	}

	public function postEdit(PersonEditRequest $person_edit_request,$id){

		$persons = Persons::find($id);
        $persons->first_name = $person_edit_request->first_name;
        $persons->last_name = $person_edit_request->last_name;
        $persons->middle_initial = $person_edit_request->middle_initial;
        $persons->age = $person_edit_request->age;
        $persons->address = $person_edit_request->address;
        $persons->gender_id = $person_edit_request->gender_id;
		$persons ->save();

		return redirect('person');
	}

		public function getDelete($id){

		$action = 2;
		$persons = Persons::find($id);
		$gender_list = Gender::all();
		return view('person/delete',compact('persons','action','gender_list'));
	}

	public function postDelete(DeleteRequest $request){

		$persons = Persons::find($request->id);
		$persons ->delete();

		return redirect('person');
	}

	public function data()
    {   
        $person_list = Persons::Join('gender','persons.gender_id','=','gender.id')
        						->select('persons.id','persons.first_name','persons.last_name','persons.middle_initial','persons.age','persons.address','gender.gender_name')
        						->orderBy('last_name');
    
        return Datatables::of($person_list)
        	->add_column('actions', '<a href="{{{ URL::to(\'person/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm" ><span class="glyphicon glyphicon-pencil"></span>  {{ Lang::get("form.edit") }}</a>
                    <a href="{{{ URL::to(\'person/\' . $id . \'/delete\' ) }}}" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> {{ Lang::get("form.delete") }}</a>
                ')
        	->edit_column('first_name','{{{$last_name.", ".$first_name." ".$middle_initial}}}')
            ->remove_column('middle_initial','last_name','id')
            ->make();
    }

}
