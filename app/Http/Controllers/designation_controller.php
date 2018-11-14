<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;
use App\designation_model;
use DB;
class designation_controller extends Controller
{
      public function add_designation()
    {
//        if(Session::get('user_id'))
//        {           
//            $flag =1;
//            foreach(Session::get('functionName') as $row)
//            {
//                if($row->function_name == "add_designation")
//                {
//                  var_dump("kavith");
                    $designation_model = new designation_model();
                   $data['status'] = $designation_model ->getstatus();
            
//            var_dump($data['status']);die;
                    return view('master.designation.add_designation')->with('data',$data);; 
//                }
//                
//            }
//            
//            if($flag==1)
//            {
//                return "u r unautherized";
//            }
//        }
//        else
//        {
            return view('master.login.login');
      //  }
        
    }
    
    public function view_designation(){
        
        return view('master.designation.view_designation');
    }
    
      public function edit_designation(){
        
        return view('master.designation.edit_designation');
    }
    
}
