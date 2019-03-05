<?php

namespace App\Http\Controllers\master;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;
use App\model\master\designation_model;
use App\model\master\academic_model;
use App\model\common\common_model;
use DB;
use Illuminate\Validation\Rule;

class academic_controller extends Controller
{
    public function __construct()
    {
         date_default_timezone_set("Asia/Calcutta"); 
    }
    
      public function add_academic_inputs()
    {
          
            if(Session::get('user_id'))
                {
                    $flag =1;
                    foreach(Session::get('functionName') as $row)
                    {
                        if($row->function_name == "add_academic_inputs")
                        {
                           
                            $common_model = new common_model();
                            $data['status'] = $common_model ->getstatus(); 
                            return view('master.academic.add_academic')->with('data',$data);
                        }
        
                    }
        
                    if($flag==1)
                    {
                        return "u r unautherized";
                    }
                }
                else
                {
                    return view('login.login');
                }
          

        
    }
    
    public function view_academic_inputs(){
        
        
         if(Session::get('user_id'))
                {
                    $flag =1;
                    foreach(Session::get('functionName') as $row)
                    {
                        if($row->function_name == "view_academic_inputs")
                        {
                              return view('master.academic.view_academic');
                        }
        
                    }
        
                    if($flag==1)
                    {
                        return "u r unautherized";
                    }
                }
                else
                {
                    return view('login.login');
                }
      
     
    }
    
    
    public function get_academic_details(){
        $academic_model = new academic_model();
        $data = $_GET;
        
      
		$list=$academic_model->academic_view($data);
//        echo"<pre>";
//        var_dump($list);die;
		$list_tot=$academic_model->academic_view_tot($data);   
		
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
    
    public function insert_academic(request $req){  
//        var_dump($req->all());die;
        
        if(Session::get('user_id'))
                {
DB::beginTransaction();

try {
  
      $academic_model = new academic_model();
     
    $data['academic_id']=$req->academic_id;
    $data['academic_year']=$req->academic_year;
    $data['quotation_no']=$req->quotation_no;
    $data['q_start_no']=$req->q_start_no;
    $data['project_no']=$req->project_no;
    $data['proj_start_no']=$req->proj_start_no;
    $data['revenue_profit']=$req->revenue_profit;
    $data['created_date']=date("Y-m-d H:i:s");
    $data['status']=$req->status;
    $data['user_id']=Session::get('user_id');
    
     $validator = Validator::make($req->all(), [  
                     
                     'academic_year' => 'required', 
                     'quotation_no' => 'required', 
                     'q_start_no' => 'required', 
                     'project_no' => 'required', 
                     'proj_start_no' => 'required', 
                     'revenue_profit' => 'required', 
                     'status' => 'required', 
                    
                ],[
                      'academic_year.required' => 'Academic Year Is Required.', 
                      'quotation_no.required' => 'Quotation Start Number Is Required.', 
                      'q_start_no.required' => 'Quotation End Number Is Required.', 
                      'project_no.required' => 'Project Start Number Is Required.', 
                      'proj_start_no.required' => 'Project End Number Is Required.', 
                      'revenue_profit.required' => 'Revenue Profit Is Required.', 
                      'status.required' => 'Status Is Required.',
                                    
                 ]);
        
         if(!$validator->passes())
        {
            return response()->json(['error'=>$validator->errors()->all()]);
        } 
      
    if($data['academic_id']>0){
       
         $count_academic=$academic_model->count_academic($data);
//         var_dump($data);die;
     if(count($count_academic)>0){
         
          $validator = Validator::make($req->all(), [
              
              'academic_year' => 'unique:academic_year,year', 
             
                    
                    ],[
                       
                      'academic_year.unique' => 'Sorry, This Academic Year Is Already Exist.',
                 ]);
        
    
                if(!$validator->passes())
                    {
                        return response()->json(['error'=>$validator->errors()->all()]);
                    } 
        
         
     }
                
    }
    else{
          
          $validator = Validator::make($req->all(), [  
                     
                   
            'academic_year' => 'unique:academic_year,year', 
                     
                    
                ],[
                      'academic_year.unique' => 'Sorry, This Academic Year Is Already Exist.', 
                                                          
                 ]);
        
         if(!$validator->passes())
        {
            return response()->json(['error'=>$validator->errors()->all()]);
        } 
        
        

    }
  
    
    $insert_academic=$academic_model->insert_academic($data);
   
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
                else
                {
                    return view('login.login');
                }
    }
    
    public function edit_academic_inputs(request $req)
    {
        
        
         if(Session::get('user_id'))
                {
                    $flag =1;
                    foreach(Session::get('functionName') as $row)
                    {
                        if($row->function_name == "edit_academic_inputs")
                        {
                               $data['academic_year_id']=$req->academic_year_id;
                               $academic_model = new academic_model();
                               $common_model = new common_model();
                               $data['status'] = $common_model ->getstatus();        
                               $data['academic'] = $academic_model ->get_edit_academic_list($data);
//                            echo"<pre>";
//                            print_r($data['academic']);die;
                               return view('master.academic.edit_academic')->with('data',$data);

                        }
        
                    }
        
                    if($flag==1)
                    {
                        return "u r unautherized";
                    }
                }
                else
                {
                    return view('login.login');
                }
        
       
    }
    
}
