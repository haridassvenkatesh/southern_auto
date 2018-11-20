<?php


namespace App\Http\Controllers\master;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;
use App\model\master\employee_model;
use App\model\master\designation_model;
use App\model\common\common_model;
use DB;
use Illuminate\Validation\Rule;

class employee_controller extends Controller
{
    public function __construct()
    {
         date_default_timezone_set("Asia/Calcutta"); 
    }
    
      public function add_employee()
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
                   $data['dsesignation'] = $common_model ->get_designation_details();
                   $data['status'] = $common_model ->getstatus();
            
//            var_dump($data['status']);die;
                    return view('master.employee.add_employee')->with('data',$data);
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
    
    public function insert_employee(request $req){
     DB::beginTransaction();

try {   
        $employee_model=new employee_model();
        $data['employee_id']=$req->employee_id;
        $data['employee_name']=$req->employee_name;
        $data['employee_unique_id']=$req->employee_unique_id;
        $data['designation_id']=$req->designation_id;
        $data['phone_no1']=$req->phone_no1;
        $data['phone_no2']=$req->phone_no2;
        $data['email_id']=$req->email_id;
        $data['status']=$req->status;
        $data['dob']=$req->dob;
        $data['doj']=$req->doj;
        $data['address']=$req->address;
        $data['remarks']=$req->remarks;
        $data['releaving_date']="";
        $data['created_date']=date("Y-m-d H:i:s");
        if($data['dob']!=""){
                     $data['dob'] = date("Y-m-d", strtotime($data['dob']));
                }
                    else{
                       $data['dob']="0000-00-00" ;
                    }
    
    if($data['doj']!=""){
                     $data['doj'] = date("Y-m-d", strtotime($data['doj']));
                }
                    else{
                       $data['doj']="0000-00-00" ;
                    }
  
    
        $user_image=$req->file('image1');
                    $data['image1']='';
        if($user_image != '')
        {
             $data['image_file_name']= uniqid().'_'.$data['employee_unique_id'] . '_' .$data['phone_no1'];
           
              $data['image1']= $user_image->move('photo',$data['image_file_name'].'.'.$user_image->guessExtension());

        }    
        
          $validator = Validator::make($req->all(), [  
                     
                     'employee_name' => 'required|regex:/^[A-Za-z.\-\s\&]+$/',
                     'employee_unique_id' => 'required', 
                     'designation_id' => 'required',                      
                     'phone_no1' => 'required|numeric|digits_between:10,15',
                     'email_id' => 'required|email', 
                     'dob' => 'required|', 
                     'doj' => 'required|', 
                     'address' => 'required|', 
                     'status' => 'required|numeric', 
                    
                ],[
                      'employee_name.required' => 'Employee Name Is Required.', 
                      'employee_unique_id.required' => 'Employee Id Is Required.', 
                      'designation_id.required' => 'Designation Is Required.', 
                      'phone_no1.required' => 'Phone No1 Is Required.', 
                      'email_id.required' => 'Email Id Is Required.', 
                      'dob.required' => 'DOB Is Required.', 
                      'doj.required' => 'DOJ Id Is Required.', 
                      'address.required' => 'Address Id Is Required.', 
                      'status.required' => 'Status Is Required.',
                                    
                 ]);
        
         if(!$validator->passes())
        {
            return response()->json(['error'=>$validator->errors()->all()]);
        } 
        
             
    if($data['employee_id']>0){
    
        
        
     $count_employee=$employee_model->count_employee_id($data);
     if(count($count_employee)>0){
         
          $validator = Validator::make($req->all(), [
              
              'employee_unique_id' => 'unique:employee,employee_unique_id', 
             
                    
                    ],[
                       
                      'employee_unique_id.unique' => 'Sorry, This Employee Id Is Already Exist.',
                 ]);
        
    
                if(!$validator->passes())
                    {
                        return response()->json(['error'=>$validator->errors()->all()]);
                    } 
        
         
     }
        
    $count_phone=$employee_model->count_employee_phone($data);
         if(count($count_phone)>0){
         
          $validator = Validator::make($req->all(), [
              
              'phone_no1' => 'unique:employee,phone_no1', 
             
                    
                    ],[
                       
                      'phone_no1.unique' => 'Sorry, This Phone No1 Is Already Exist.',
                 ]);
        
    
                if(!$validator->passes())
                    {
                        return response()->json(['error'=>$validator->errors()->all()]);
                    } 
        
         
     }
        
         $count_email=$employee_model->count_employee_email($data);
         if(count($count_email)>0){
         
          $validator = Validator::make($req->all(), [
              
              'email_id' => 'unique:employee,email', 
             
                    
                    ],[
                       
                      'email_id.unique' => 'Sorry, This Email Is Already Exist.',
                 ]);
        
    
                if(!$validator->passes())
                    {
                        return response()->json(['error'=>$validator->errors()->all()]);
                    } 
        
         
     }
                
    }
    else{
          
          $validator = Validator::make($req->all(), [
              
              'employee_unique_id' => 'unique:employee,employee_unique_id', 
              'phone_no1' => 'unique:employee,phone_no1', 
              'email_id' => 'unique:employee,email', 
             
                    
                    ],[
                       
                      'employee_unique_id.unique' => 'Sorry, This Employee Id Is Already Exist.',
                      'phone_no1.unique' => 'Sorry, This Phone No1 Is Already Exist.',
                      'email_id.unique' => 'Sorry, This Email Is Already Exist.',
                 ]);
        
        
         if(!$validator->passes())
        {
            return response()->json(['error'=>$validator->errors()->all()]);
        } 
        
        

    }
        
        
       
    $insert_employee_id=$employee_model->insert_employee($data);
    
    if($insert_employee_id>0){
        
        $data['insert_employee_id']=$insert_employee_id;
          $insert_login_id=$employee_model->insert_employee_login($data);
        
    }
   
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
    
    
    public function view_employee(){
      
      
        return view('master.employee.view_employee');
    }
    
    
    public function get_employee_details(){
        $employee_model=new employee_model();
        $data = $_GET;
        
      
		$list=$employee_model->employee_view($data);
		$list_tot=$employee_model->employee_view_tot($data);   
		
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
    
    public function edit_employee(request $req)
    {
        $data['employee_id']=$req->employee_id;
        $employee_model=new employee_model();
        $common_model = new common_model();
        $data['dsesignation'] = $common_model ->get_designation_details();
        $data['status'] = $common_model ->getstatus();
        $data['employee_details'] = $employee_model ->get_edit_employee_list($data);
        
//        var_dump( $data['employee_details']);die;
         return view('master.employee.edit_employee')->with('data',$data);
//        var_dump($data['designation']);die;
    }
    
}
