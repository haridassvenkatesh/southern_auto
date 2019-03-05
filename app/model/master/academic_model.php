<?php

namespace App\model\master;


use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class academic_model extends Model
{
    
    
    public function insert_academic($data){
//        var_dump($data);die;
        if($data['academic_id']>0){
            
              $result = DB::table('academic_year')
                ->where('id','=',$data['academic_id'])
                ->update(array('year'=>$data['academic_year'],
                               'quotation_no'=>$data['quotation_no'],
                               'q_start_no'=>$data['q_start_no'],
                               'project_no'=>$data['project_no'],
                               'proj_start_no'=>$data['proj_start_no'],
                               'revenue_profit'=>$data['revenue_profit'],                               
                               'created_by'=>$data['user_id'],
                               'created_date'=>$data['created_date'],                              
                               'status'=>$data['status']
                )
                        );
            
            
     
        }
        else
        {
             $result= DB::table('academic_year')
                ->insert(array('year'=>$data['academic_year'],
                               'quotation_no'=>$data['quotation_no'],
                               'q_start_no'=>$data['q_start_no'],
                               'project_no'=>$data['project_no'],
                               'proj_start_no'=>$data['proj_start_no'],
                               'revenue_profit'=>$data['revenue_profit'],                               
                               'created_by'=>$data['user_id'],
                               'created_date'=>$data['created_date'],                              
                               'status'=>$data['status']));
        
      
        }
       
         if($result){
           return "success";
       }
        else{
            return "failure";
        }
   } 
    
    public function academic_view($data){
        
//        $a= DB::select('SELECT * from academic_year  where id=1');
//        $data['id']=$a[0]->quotation_no;
//           print_r($data['id']);
//        die;
        
        $result = DB::table('academic_year')
              
            ->join('status', 'status.status_id', '=', 'academic_year.status')
            ->select('academic_year.year','academic_year.quotation_no','academic_year.project_no','academic_year.revenue_profit','academic_year.id as academic_year_id','status.name as status_name','status.status_id','academic_year.q_start_no','academic_year.proj_start_no');
        
         if(!empty($data['search']))
		{
			$result = $result->where('academic_year.year',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('academic_year.quotation_no',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('academic_year.q_start_no',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('academic_year.project_no',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('academic_year.proj_start_no',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('academic_year.revenue_profit',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('status.name',  'LIKE' ,'%'.$data['search'].'%');
               
		}
		if(!empty($data['order']))
		{
			if(!empty($data['sort']))
			{				
				$result = $result->orderBy('academic_year.id',$data['order']);
			}
			else
			{
				$result = $result->orderBy('academic_year.id','desc');
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
    
    public function academic_view_tot(){
        
          $result = DB::table('academic_year')
              
            ->join('status', 'status.status_id', '=', 'academic_year.status')
            ->select('academic_year.year','academic_year.quotation_no','academic_year.project_no','academic_year.revenue_profit','academic_year.id as academic_year_id','status.name as status_name','status.status_id','academic_year.q_start_no','academic_year.proj_start_no');
        
         if(!empty($data['search']))
		{
			$result = $result->where('academic_year.year',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('academic_year.quotation_no',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('academic_year.q_start_no',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('academic_year.project_no',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('academic_year.proj_start_no',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('academic_year.revenue_profit',  'LIKE' ,'%'.$data['search'].'%')
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
    
    public function get_edit_academic_list($data){
        
        return DB::select('SELECT * from academic_year  where id=?',array($data['academic_year_id']));
    }
    
    public function count_academic($data){
        
          return DB::select('SELECT * from academic_year  where id!=? and year=? ',array($data['academic_id'],$data['academic_year']));
    }
}
