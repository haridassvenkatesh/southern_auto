<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class designation_model extends Model
{
   public function getstatus(){
       
        return DB::select('SELECT * from status a where a.status = 1 and a.status_id in (1,2)');
   } 
    
    public function insert_designation($data){
       
        
        $result= DB::table('designation')
                ->insert(array('name'=>$data['designation_name'],
                               'description'=>$data['description'],
                               'parent_id'=>"0",
                               'created_by'=>"1",
                               'created_date'=>date("Y-m-d H:i:s"),
                               'status'=>$data['status']));
        
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
}
