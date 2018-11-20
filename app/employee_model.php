<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class employee_model extends Model
{
   public function get_designation_details(){
       
        return DB::select('SELECT * from designation a where a.status = 1');
   } 
    
    public function insert_designation($data){
       
        if($data['designation_id']>0){
            
              $result = DB::table('designation')
                ->where('designation_id','=',$data['designation_id'])
                ->update(array(
                                'name'=>$data['designation_name'],
                               'description'=>$data['description'],
                               'status'=>$data['status']
                )
                        );
            
            
     
        }
        else
        {
             $result= DB::table('designation')
                ->insert(array('name'=>$data['designation_name'],
                               'description'=>$data['description'],
                               'parent_id'=>"0",
                               'created_by'=>"1",
                               'created_date'=>date("Y-m-d H:i:s"),
                               'status'=>$data['status']));
        
      
        }
       
         if($result){
           return "success";
       }
        else{
            return "failure";
        }
   } 
    
    public function designation_view($data){
           
        $result = DB::table('designation')
              
            ->join('status', 'status.status_id', '=', 'designation.status')           
            ->select('designation.designation_id','designation.name as designation_name','designation.description','status.name as status_name','status.status_id');
        
         if(!empty($data['search']))
		{
			$result = $result->where('designation.name',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('designation.description',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('status.name',  'LIKE' ,'%'.$data['search'].'%');
               
		}
		if(!empty($data['order']))
		{
			if(!empty($data['sort']))
			{				
				$result = $result->orderBy('designation.designation_id',$data['order']);
			}
			else
			{
				$result = $result->orderBy('designation.designation_id','desc');
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
    
    public function designation_view_tot(){
        
         $result = DB::table('designation')
              
            ->join('status', 'status.status_id', '=', 'designation.status')           
            ->select('designation.designation_id','designation.name as designation_name','designation.description','status.name as status_name','status.status_id');
        
         if(!empty($data['search']))
		{
			$result = $result->where('designation.name',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('designation.description',  'LIKE' ,'%'.$data['search'].'%')
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
    
    public function get_edit_designation_list($data){
        
        return DB::select('SELECT * from designation  where designation_id=?',array($data['designation_id']));
    }
    
    public function count_designation($data){
        
          return DB::select('SELECT * from designation  where designation_id!=? and name=? ',array($data['designation_id'],$data['designation_name']));
    }
}
