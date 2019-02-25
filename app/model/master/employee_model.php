<?php
namespace App\model\master;
use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class employee_model extends Model
{
 
    public function count_employee_id($data){

         return DB::select('SELECT * from employee  where employee_id!=? and employee_unique_id=? ',array($data['employee_id'],$data['employee_unique_id']));
    } 
    
    public function count_employee_phone($data){
        
         return DB::select('SELECT * from employee  where employee_id!=? and phone_no1=? ',array($data['employee_id'],$data['phone_no1']));
    }
    public function count_employee_email($data){
        
         return DB::select('SELECT * from employee  where employee_id!=? and email=? ',array($data['employee_id'],$data['email_id']));
    }
    
    public function insert_employee($data){
       
      
         if($data['employee_id']>0){
//               var_dump($data);die;
             if($data['image1']!=""){
                 
                  $result = DB::table('employee')
                ->where('employee_id','=',$data['employee_id'])
                ->update(array(
                                
                               'photo'=>$data['image1'],
                               
                )
                        );
             }
             
              $result = DB::table('employee')
                ->where('employee_id','=',$data['employee_id'])
                ->update(array(
                                'name'=>$data['employee_name'],
//                               'employee_unique_id'=>$data['employee_unique_id'],                               
                               'designation_id'=>$data['designation_id'],
                               'address'=>$data['address'],
                               'phone_no1'=>$data['phone_no1'],
                               'phone_no2'=>$data['phone_no2'],
                               'email'=>$data['email_id'],
                               'dob'=>$data['dob'],
                               'doj'=>$data['doj'],
//                               'releaving_date'=>$data['releaving_date'],
                                'updated_date'=>$data['created_date'],
                               'updated_by'=>$data['user_id'],
                               'remark'=>$data['remarks'],
                               'status'=>$data['status']
                )
                        );
            
            $result=$data['employee_id'];
     
        }
        else
       {         //var_dump($data);
             $result= DB::table('employee')
                ->insertGetId(array('name'=>$data['employee_name'],
                               'employee_unique_id'=>$data['employee_unique_id'],
                               'photo'=>$data['image1'],
                               'designation_id'=>$data['designation_id'],
                               'address'=>$data['address'],
                               'phone_no1'=>$data['phone_no1'],
                               'phone_no2'=>$data['phone_no2'],
                               'email'=>$data['email_id'],
                               'dob'=>$data['dob'],
                               'doj'=>$data['doj'],
//                               'releaving_date'=>$data['releaving_date'],
                               'created_date'=>$data['created_date'],
                               'created_by'=>$data['user_id'],
                               'updated_date'=>$data['created_date'],
                               'updated_by'=>$data['user_id'],
                               'remark'=>$data['remarks'],
                               'status'=>$data['status']
                              
                              ));
        
      
        }
        
//        var_dump($result);
        return $result;
        

    }
    
    
    public function insert_employee_login($data){

     
        
        $count=  DB::table('user_login')
                ->select('login_id')
                ->where('user_id','=',$data['insert_employee_id'])->get();
        $password=$data['employee_unique_id'].'#';

             if(count($count)>0)
        {
         
         
          $result = DB::table('user_login')
                ->where('user_id','=',$data['insert_employee_id'])
                ->update(array(
//                                'user_name'=>$data['employee_unique_id'],
//                               'password'=>md5($data['employee_unique_id']),
//                               'password'=>password_hash($data['employee_unique_id'], PASSWORD_DEFAULT),
                               'designation_id'=>$data['designation_id'],                               
                               'created_date'=>$data['created_date'],                               
                               'status'=>$data['status']
                              
                )
                        );
     }
    else{
        
       
         $result= DB::table('user_login')
                ->insertGetId(array('user_id'=>$data['insert_employee_id'],
                               'user_name'=>$data['employee_unique_id'],
                                    'password'=>md5($password),
//                               'password'=>password_hash($data['employee_unique_id'], PASSWORD_DEFAULT),
                               'designation_id'=>$data['designation_id'],                               
                               'created_date'=>$data['created_date'],                               
                               'status'=>$data['status']
                              
                              ));
        
             
        }
    
        return $result ;
        
    }
    
    
    public function employee_view($data){
           
        $result = DB::table('employee')
              
            ->join('status', 'status.status_id', '=', 'employee.status')           
            ->join('designation', 'designation.designation_id', '=', 'employee.designation_id')   
            ->where('employee.designation_id','!=','1')
            ->select('employee.employee_id','employee.name as employee_name','employee.employee_unique_id','designation.name as designation_name','status.name as status_name','status.status_id','employee.phone_no1','employee.email');
        
         if(!empty($data['search']))
		{
			$result = $result->where('employee.name',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('employee.employee_unique_id',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('employee.phone_no1',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('employee.email',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('status.name',  'LIKE' ,'%'.$data['search'].'%');
               
		}
		if(!empty($data['order']))
		{
			if(!empty($data['sort']))
			{				
				$result = $result->orderBy('employee.employee_id',$data['order']);
			}
			else
			{
				$result = $result->orderBy('employee.employee_id','desc');
			}    
		}
		
		if(!empty($data['offset']))
		{ 
			$result = $result->offset($data['offset']);
		}
		
		if(!empty($data['limit']))
		{ 
			$result = $result->limit($data['limit']);
		}
		
		return $result->get();
    }
    
    
      public function employee_view_tot(){
        
          $result = DB::table('employee')
              
            ->join('status', 'status.status_id', '=', 'employee.status')           
            ->join('designation', 'designation.designation_id', '=', 'employee.designation_id')           
            ->select('employee.employee_id','employee.name as employee_name','employee.employee_unique_id','designation.name as designation_name','status.name as status_name','status.status_id','employee.phone_no1','employee.email');
        
         if(!empty($data['search']))
		{
			$result = $result->where('employee.name',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('employee.employee_unique_id',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('employee.phone_no1',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('employee.email',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('status.name',  'LIKE' ,'%'.$data['search'].'%');
               
		}
        if($result -> count())
		{
			return $result -> count();						
		}
		else
		{
			return false;
		}
    }
    
       
    public function get_edit_employee_list($data){
        
        return DB::select('SELECT employee_id,name,employee_unique_id,photo,designation_id,address,phone_no1,phone_no2,email,DATE_FORMAT(dob,"%d-%m-%Y") as dob,DATE_FORMAT(doj,"%d-%m-%Y") as doj ,DATE_FORMAT(releaving_date,"%d-%m-%Y") as rel_date,created_date,remark,status from employee where employee_id=?',array($data['employee_id']));
    }
    
}
