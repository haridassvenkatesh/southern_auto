<?php

namespace App\Http\Controllers\login;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\login\login_model; 
use Hash;
use Session;
use Illuminate\Support\Facades\Validator;
class login_controller extends Controller
{
    
    public function login_submit(request $req)
    {
        
           $validator = Validator::make($req->all(), [  
                     
                     'username' => 'required', 
                     'password' => 'required', 
                    
                    
                ],[
                      'username.required' => 'UserName Is Required.', 
                      'password.required' => 'Password Is Required.', 
                     
                                    
                 ]);
        
         if(!$validator->passes())
        {
            return response()->json(['error'=>$validator->errors()->all()]);
        } 
       
        
        $login_model = new login_model();
        $data['username']=$req->username;
        $data['password']=md5($req->password);
        $login_submit=$login_model->login_submit($data);
        if(count($login_submit)>0){
            foreach($login_submit as $row){
            $password=$row->password;
            if($data['password']==$password){
                
                $designation_id=$row->designation_id;
                Session::put('designation_id', $designation_id);                
                Session::put('user_id', $row->user_id);
                Session::put('user_name', $row->user_name);
                Session::put('emp_name', $row->employee_name);
                
                //Get Function List
                
                $function_name=$login_model->get_function_name($designation_id);
                Session::put('functionName', $function_name);
                   return json_encode(array(
                'status' => 1,
                'message' => "Login Success"
                
            ));
                
                
            }
                else{
                    return json_encode(array(
                'status' => 0,
                'message' => "Invalid Password"
                
            ));
                }
                
            }
        }
        else{
             return json_encode(array(
                'status' => 0,
                'message' => "Invalid UserName"
                
            ));
        }
      
       
 
    }
   
    
    public function login(request $req)
    {         
        if(!Session::get('user_id'))
        {
//            $req->session()->forget('designation_id');
//            $req->session()->forget('user_id');
//            $req->session()->forget('user_name');
//            $req->session()->forget('functionName');
//            
            return view('login.login');        
        }
        else
        { 
          return view('dashboard.dashboard_view');
        }
    }
    
    public function logout(request $req)
    {         
        
           $req->session()->forget('designation_id');
            $req->session()->forget('user_id');
            $req->session()->forget('user_name');
            $req->session()->forget('functionName');
            return view('login.login');        
        
    }
    
    
     
    public function l1()
    {
        $login_model = new login_model();
        $result = $login_model->login(1);
        return $result;
    }
    
    
}
