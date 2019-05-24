<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductEditRequest;
use App\Http\Requests\DeleteRequest;

use Illuminate\Http\Request;
use Config;    
use Datatables;
use Hash;

class ProductController extends Controller {


	public function index()
	{
		return view('product/index');
	}

	public function getcreate()
	{
		$action = 0;

		return view('product/create',compact('action'));

	}

	public function postCreate(ProductRequest $product_request){

		$product = new Products();
        $product->product_name = $product_request->product_name;
        $product->price = $product_request->price;
        $product->save();

        return redirect('product');
	}

	public function getEdit($id){

		$action = 1;
		$products = Products::find($id);
		return view('product/edit',compact('products','action'));
	}

	public function postEdit(ProductEditRequest $product_edit_request,$id){

		$products = Products::find($id);
		$products ->product_name = $product_edit_request->product_name;
		$products ->price = $product_edit_request->price;
		$products ->save();

		return redirect('product');
	}

		public function getDelete($id){

		$action = 2;
		$products = Products::find($id);
		return view('product/delete',compact('products','action'));
	}

	public function postDelete(DeleteRequest $request){

		$products = Products::find($request->id);
		$products ->delete();

		return redirect('product');
	}

	public function data()
    {   
        $product_list = Products::select('id','product_name','price')->orderBy('product_name');
    
        return Datatables::of($product_list)
        	->add_column('actions', '<a href="{{{ URL::to(\'product/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm" ><span class="glyphicon glyphicon-pencil"></span>  {{ Lang::get("form.edit") }}</a>
                    <a href="{{{ URL::to(\'product/\' . $id . \'/delete\' ) }}}" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> {{ Lang::get("form.delete") }}</a>
                ')
            ->remove_column('id')
            ->make();
    }

}
