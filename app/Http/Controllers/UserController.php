<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Customer;
use Auth;

class UserController extends Controller
{
    public function manageUser() {
//        $users=User::all();
//        $users=User::simplePaginate(10);
        $users=User::paginate(10);
        return view('admin.user.manageUser', ['users'=>$users]);
    }

   	public function customerHome() {
        return view('frontEnd.user.customerHome');
    }

    public function customerLogin(){
    	return view('frontEnd.user.customerLogin');
    }

    public function customerLoginPost(Request $request){
    	$this->validate($request, [
    		'email' => 'email|required',
    		'password' => 'required'
    	]);
    	// if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
    	// 	return view('frontEnd.user.customerHome');
    	// }
    	return redirect()->back();
    }

    public function customerRegistration(){
    	return view('frontEnd.user.customerRegistration');
    }

    public function customerRegistrationPost(){
    	
    }

    public function customerProfile() {
        return view('frontEnd.user.customerProfile');
    }

}
