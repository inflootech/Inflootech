<?php
namespace App\Modules\User\Controllers;
use App\Modules\User\Controllers\UserController;
use Illuminate\Http\Request;
use App\Modules\User\Models\User;
use Hash;
use Auth;
use Session;
use Maatwebsite\Excel\Facades\Excel;
use App\Modules\User\Controllers\BulkImport;

class UserController
{
    private $user;

    public function __construct(){
    	$this->user = new User();
    }
   public function index(){
    	return view('User::index');
    }

  	public function store(Request $request){
   		try{
	    	$data = $request->all();
	        $user = $this->user->saveUserData($data);
	        if ($user==1) {
                return view('User::login');
            }else{
                return redirect()->to('index');
            }
    		return $user;
	        // return redirect()->to('/games');
    	}catch(Exception $e){
    		return 'Message: ' .$e->getMessage();
    	}
    }

    public function login(){
    	return view('User::login');
    }
    public function saveData(Request $request){
        try{
            $loginData = $request->all();
            $checkUser = $this->user->checkExistingOrNot($loginData);
            if ($checkUser>0) {
                return response()->json(array("msg" => true));
            }else{
                return response()->json(array("msg" => false));
            }
        }catch(Exception $e){
            return 'Message:' .$e->getMessage();
        }
    }
    public function checkEmail(Request $request){
        $email = $request->input('email');
        $isExists = $this->user->checkEmailValidation($email);
        if($isExists){
            return response()->json(array("exists" => true));
        }else{
            return response()->json(array("exists" => false));
        }
    }
    public function getProfile(){
        return view('User::dashboard');
    }
    public function getMessages(){
        return view('User::chat');
    }
}