<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\login_model; 
use Hash;
use Session;
class login_controller extends Controller
{
     private $browser;
    
   public function __construct()
    {
        /* For get browser name */
        if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE)
            $this->browser = 'Internet explorer';
        elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) //For Supporting IE 11
            $this->browser = 'Internet explorer';
        elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE)
            $this->browser = 'Mozilla Firefox';
        elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE)
            $this->browser = 'Google Chrome';
        elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== FALSE)
            $this->browser = "Opera Mini";
        elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== FALSE)
            $this->browser = "Opera";
        elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE)
            $this->browser = "Safari";
        else
            $this->browser = 'Something else'; 
    }
    
    public function login_submit(request $req)
    {
        $login_model = new login_model();
       $data['username']=$req->username;
        $data['password']=$req->password;
        $result = $login_model->login($data);
        
       	if(empty($data['username']) && empty($data['password']))
       	{
		return "Please enter username and password"; 		
       	}
        if(empty($data['username']))
       	{
		return "Please enter username"; 		
       	}
       	if(empty($data['password']))
       	{
		return "Please enter password";
       	}
      
        //echo "<pre>";
        //print_r($result);die;
        $flag = 1;
        foreach($result as $row)
        {
        $flag = 0;
            if(Hash::check($data['password'], $row->user_password))
            {               
                $data['user_group_id']=$row->user_group;
                $data['user_name']=$row->user_first_name;
//               
                $result1 = $login_model->get_menu($data);
                Session::put('functionName', $result1);
                Session::put('user_group_id', $data['user_group_id']);
                Session::put('user_name', $data['user_name']);
                
                Session::put('employee_id', $row->id);// vel
                Session::put('empID', $row->empID);// vel
                
                //return Session::get('functionName');
                $req->session()->put('user_id',$data['username']);
                

                $result2['message'] = 'success';
                if($data['user_group_id']==10){
                     $result2['Menu'] = 'dashboard';
                }
                else if($data['user_group_id']==11){
                     $result2['Menu'] = 'manager_dashboard';
                }
                else if($data['user_group_id']==12){
                     $result2['Menu'] = 'employee_dashboard';
                }
               else if($data['user_group_id']==86){
                     $result2['Menu'] = 'commonuser_dashboard';
               }
                $result2['functionName'] = $result1;
                return $result2;
            }
            else
            {
                //$aud_failure_session = $login_model->aud_failure_session($data);
                return "Please enter Valid username and password";
                //return view('login');
            }            
        }
        
        if($flag == 1)
        {
        return "Please enter Valid username and password";
        }
    }
    public function login(request $req)
    {         
        if(!Session::get('user_id'))
        {
            $req->session()->forget('user_id');
            return view('master.login.login');        
        }
        else
        { 
            if(Session::get('user_group_id') == 10){
             return view('master.dashboard.dashboard');  
        }
         else if(Session::get('user_group_id') == 11){
              return view('master.dashboard.manager_dashboard');  
         }
         else if(Session::get('user_group_id') == 12){
              return view('master.dashboard.employee_dashboard');  
         }
           
        }
    }
    
    public function logout(request $req)
    {         
        
            $req->session()->forget('user_id');
            return view('master.login.login');        
        
    }
    
    
     
    public function l1()
    {
        $login_model = new login_model();
        $result = $login_model->login(1);
        return $result;
    }
    
    
}
