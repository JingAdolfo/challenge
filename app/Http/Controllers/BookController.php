<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Http\Requests\BookRequest;
use App\Http\Requests\BookEditRequest;
use App\Http\Requests\DeleteRequest;

use Illuminate\Http\Request;
use Config;    
use Datatables;
use Hash;

class BookController extends Controller {


	public function index()
	{
		return view('book/index');
	}

	public function getcreate()
	{
		$action = 0;

		return view('book/create',compact('action'));

	}

	public function postCreate(BookRequest $book_request){

		$book = new Books();
        $book->book_name = $book_request->book_name;
        $book->book_pcs = $book_request->book_pcs;
        $book->author_name = $book_request->author_name;
        $book->index_no = $book_request->index_no;
        $book->save();

        return redirect('book');
	}

	public function getEdit($id){

		$action = 1;
		$books = Books::find($id);
		return view('book/edit',compact('books','action'));
	}

	public function postEdit(BookEditRequest $book_edit_request,$id){

		$book = new Books();
        $book->book_name = $book_edit_request->book_name;
        $book->book_pcs = $book_edit_request->book_pcs;
        $book->author_name = $book_edit_request->author_name;
        $book->index_no = $book_edit_request->index_no;
        $book->save();

		return redirect('book');
	}

		public function getDelete($id){

		$action = 2;
		$books = Books::find($id);
		return view('book/delete',compact('books','action'));
	}

	public function postDelete(DeleteRequest $request){

		$books = Books::find($request->id);
		$books ->delete();

		return redirect('book');
	}

	public function data()
    {   
        $book_list = Books::select('id','book_name','book_pcs','author_name','index_no')->orderBy('book_name');
    
        return Datatables::of($book_list)
        	->add_column('actions', '<a href="{{{ URL::to(\'book/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm" ><span class="glyphicon glyphicon-pencil"></span>  {{ Lang::get("form.edit") }}</a>
                    <a href="{{{ URL::to(\'book/\' . $id . \'/delete\' ) }}}" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> {{ Lang::get("form.delete") }}</a>
                ')
            ->remove_column('id')
            ->make();
    }

}
