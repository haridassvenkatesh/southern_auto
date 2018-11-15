<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;
use App\designation_model;
use DB;
use Illuminate\Validation\Rule;

class designation_controller extends Controller
{
    public function __construct()
    {
         date_default_timezone_set("Asia/Calcutta"); 
    }
    
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
        $designation_model = new designation_model();
        $data['designation_details'] = $designation_model ->getstatus();
        return view('master.designation.view_designation');
    }
    
    
    public function get_designation_details(){
        $designation_model = new designation_model();
        $data = $_GET;
        
      
		$list=$designation_model->designation_view($data);
		$list_tot=$designation_model->designation_view_tot($data);   
		
		//return $enq_list_tot;
		if($list!==false)
	   {    
		$tot_val=$list_tot; 
		$report = array('total' => $tot_val,'rows' => $list);
			  echo json_encode($report);
			  exit;
	   }
	   else
	   {
		$message =array();
			  $report  = array('total' => 0,'rows' => $message);
			  echo json_encode($report);
			  exit;     
	   }	
    }
    
      public function edit_designation(){
        
        return view('master.designation.edit_designation');
    }
    
    public function insert_designation(request $req){        
       
DB::beginTransaction();

try {
  
      $designation_model = new designation_model();
     $validator = Validator::make($req->all(), [  
                     
                     'designation_name' => 'required', 
                     'design_description' => 'required', 
                     'status' => 'required', 
                    
                ],[
                      'designation_name.required' => 'Designation Is Required.', 
                      'design_description.required' => 'Description Is Required.', 
                      'status.required' => 'Status Is Required.',
                                    
                 ]);
        
         if(!$validator->passes())
        {
            return response()->json(['error'=>$validator->errors()->all()]);
        } 
    
    $data['designation_name']=$req->designation_name;
    $data['description']=$req->design_description;
    $data['status']=$req->status;
    
    $insert_designation=$designation_model->insert_designation($data);
   
    DB::commit();
    return json_encode(array(
                'status' => 1,
                'message' => "success"
                
            ));;
    // all good
} catch (\Exception $e) {
    DB::rollback();
    // something went wrong
}
    }
    
}
