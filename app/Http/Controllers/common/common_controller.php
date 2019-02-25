<?php


namespace App\Http\Controllers\common;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;
use App\model\common\common_model;
use DB;
use Illuminate\Validation\Rule;

class common_controller extends Controller
{
    public function __construct()
    {
         date_default_timezone_set("Asia/Calcutta"); 
    }
    
   //CHANGE PASSWORD
	
   public function change_password(){
	   
         if(Session::get('user_id'))
                {
			 		$common_model =new common_model();
			        $data['user_id']=Session::get('user_id');
			        $data['user_details']=$common_model->get_user_details($data);
			        return view('master.password.change_password')->with('data',$data);
	     	 }
        else{
              return view('login.login');
        }
   }
	
	public function update_password(request $req){
		
		 $validator = Validator::make($req->all(), [  
                     
                     'emp_id' => 'required',
                     'old_password' => 'required', 
			 		 'new_password' => 'required|min:3|max:10|different:old_password',
			 		 'confirm_password' => 'required|same:new_password|min:3|max:10'
                    
                ],[
                      'emp_id.required' => 'Employee Id Is Required.', 
                      'old_password.required' => 'Old Password Is Required.', 
                      'new_password.required' => 'New Password Is Required.', 
                      'new_password.min' => 'New Password Must Be At Least 3 Characters.', 
                      'new_password.max' => 'New Password May Not Be Greater Than 10 Characters.', 
                      'new_password.different' => 'New Password Must Be Different With Old Password.', 
                      'confirm_password.required' => 'Confirm Password Is Required.',                 
                      'confirm_password.same' => 'New Password and Confirm Password Must Be Same.',                 
                      'confirm_password.min' => 'Confirm Password Must Be At Least 3 Characters.',                 
                      'confirm_password.max' => 'Confirm Password May Not Be Greater Than 10 Characters.',                 
                                    
                 ]);
        
         if(!$validator->passes())
        {
            return response()->json(['error'=>$validator->errors()->all()]);
        }
		
		$common_model =new common_model();
		$data['created_date']=date("Y-m-d H:i:s");
		$data['emp_id']=$req->emp_id;
		$data['old_password']=md5($req->old_password);
		$data['new_password']=md5($req->new_password);
		$data['confirm_password']=md5($req->confirm_password);		
		$check_condition=$common_model->check_condition($data);
		if(count($check_condition)>0){
			$update_password=$common_model->update_password($data);
			if($update_password==true){
			    return json_encode(array(
                'status' => 1,
                'message' => "Updated Password Successfully."
                
            ));
			}
			else{
			return json_encode(array(
                'status' => 0,
                'message' => "Please Try Again."
                
            ));
			}
		}
		else{
			    return json_encode(array(
                'status' => 2,
                'message' => "Invalid Old Password."
                
            ));
		}
		
		
		
		
		
	}
    
}
