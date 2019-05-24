<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Hash;
use Config;
class RegisterController extends Controller {

	
	public function index()
	{
		return view('auth.register');
	}
	
	public function postRegister(RegisterRequest $register_request)
	{
		$user = new Users();
        $user->name = $register_request->name;
        $user->email = $register_request->email;
        $user->password = Hash::make($register_request->password);
        $user->confirmation_code = md5(microtime().Config::get('app.key'));
        $user->save();

        return redirect('auth/login');
	}
}
