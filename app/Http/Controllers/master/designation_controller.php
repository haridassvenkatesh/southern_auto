<?php

namespace App\Http\Controllers\master;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;
use App\model\master\designation_model;
use App\model\common\common_model;
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
                    $common_model = new common_model();
                   $data['status'] = $common_model ->getstatus();
            
//            var_dump($data['status']);die;
                    return view('master.designation.add_designation')->with('data',$data);
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
    
//      public function edit_designation(){
//        
//        return view('master.designation.edit_designation');
//    }
    
    public function insert_designation(request $req){        
       
DB::beginTransaction();

try {
  
      $designation_model = new designation_model();
     
    $data['designation_name']=$req->designation_name;
    $data['designation_id']=$req->designation_id;
    $data['description']=$req->design_description;
    $data['created_date']=date("Y-m-d H:i:s");
    $data['status']=$req->status;
    
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
       
    if($data['designation_id']>0){
       
         $count_designation=$designation_model->count_designation($data);
     if(count($count_designation)>0){
         
          $validator = Validator::make($req->all(), [
              
              'designation_name' => 'unique:designation,name', 
             
                    
                    ],[
                       
                      'designation_name.unique' => 'Sorry, This Designation Name Is Already Exist.',
                 ]);
        
    
                if(!$validator->passes())
                    {
                        return response()->json(['error'=>$validator->errors()->all()]);
                    } 
        
         
     }
                
    }
    else{
          
          $validator = Validator::make($req->all(), [  
                     
                   
            'designation_name' => 'unique:designation,name', 
                     
                    
                ],[
                      'designation_name.unique' => 'Sorry, This Designation Name Is Already Exist.', 
                                                          
                 ]);
        
         if(!$validator->passes())
        {
            return response()->json(['error'=>$validator->errors()->all()]);
        } 
        
        

    }
  
    
    $insert_designation=$designation_model->insert_designation($data);
   
    DB::commit();
    return json_encode(array(
                'status' => 1,
                'message' => "success"
                
            ));
    // all good
} catch (\Exception $e) {
    DB::rollback();
    // something went wrong
}
    }
    
    public function edit_designation(request $req)
    {
        $data['designation_id']=$req->designation_id;
        $designation_model = new designation_model();
        $common_model = new common_model();
        $data['status'] = $common_model ->getstatus();        
        $data['designation'] = $designation_model ->get_edit_designation_list($data);
         return view('master.designation.edit_designation')->with('data',$data);
//        var_dump($data['designation']);die;
    }
    
}
