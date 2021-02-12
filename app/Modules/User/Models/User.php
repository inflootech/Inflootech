<?php
namespace App\Modules\User\Models;
 use App\Modules\User\Models\User;
use DB;
use Illuminate\Support\Facades\Hash;
use Session;
class User 
{
    
    
    protected $table = 'users';
    protected $fillable = [
        'name', 'email',
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'fname','lname','email', 'password',
    // ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
    
    /**
     * Add a mutator to ensure hashed passwords
     */
    // public function setPasswordAttribute($password)
    // {
    //     $this->attributes['password'] = bcrypt($password);
    // }
    public function saveUserData($data){
    	$data  = array(
          'first_name'  => $data['firstname'],
          'last_name'    =>$data['firstname'],
          'user_type'    =>$data['user_type'],
          'email_id'         =>$data['email'],
          'user_pws'  =>Hash::make($data['password']),
          'created_at'=>date('Y-m-d H:i:s'),
          'updated_at'=>date('Y-m-d H:i:s'),
          'created_by'=>"rajradclief",
          'updated_by'=>"rajradclief",
      	);
    	$query = DB::table('users')->insert($data);
      return $query;
    }
    public function checkExistingOrNot($loginData){
      $query =DB::table('users')->select('*')
                                ->where('email_id','=',$loginData['email'])
                                ->first();
      if(!empty($query)) {
        $match = Hash::check($loginData['password'],$query->user_pws);
        if ($match==1) {
          $userID = Session::put('users_id', $query->id);
          return 1;
        }else{
          return 0;
        }
      }else{        
        return 0;
      }
    }
    public function checkEmailValidation($email){
      $query =DB::table('users')->select('email_id')
                                ->where('email_id','=',$email)
                                ->first();
      return $query;                         
    }
}


