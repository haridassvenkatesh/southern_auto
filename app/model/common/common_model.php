<?php

namespace App\model\common;


use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class common_model extends Model
{
   public function get_designation_details(){
       
        return DB::select('SELECT * from designation a where a.status = 1');
   } 

    public function getstatus(){
       
        return DB::select('SELECT * from status a where a.status = 1 and a.status_id in (1,2)');
   } 
    
    public function getbusiness_vertical(){
        
         return DB::select('SELECT * from business_vertical a where a.status = 1');
    }
    
    public function getenquiry_source(){
        
          return DB::select('SELECT * from enquiry_source a where a.status = 1');
    }
    
    public function getcompany_list(){
        
         return DB::select('SELECT * from customer a where a.status = 1');
    }
    
    public function getemployee_list(){
        
         return DB::select('SELECT * from employee a where a.status = 1');
        
    }
    
    public function getcontact_person($data){

          return DB::select('SELECT * from customer_contact_person a1 where a1.company_id=? and a1.status=1',array($data['compnay_id']));
    }

    public function get_contact_person_email($data){
            
            return DB::select('SELECT * from customer_contact_person a1 where a1.contact_id=? and a1.status=1',array($data['contact_id']));
    }
    
    public function get_enquiry_status(){
        
        return DB::select('SELECT * from status a where a.status = 1 and a.parent_id=3');
    }
}
