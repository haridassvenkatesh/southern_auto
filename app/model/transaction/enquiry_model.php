<?php

namespace App\model\transaction;
use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class enquiry_model extends Model
{
    
    public function get_count_enquiry($data){

        return DB::select('SELECT id FROM enquiry order by id desc limit 1 ');
    }
    
    public function update_enquiry_product_details($data){
        
         $result = DB::table('enquiry_product')
                ->where('enquiry_id','=',$data['enquiry_product_id'])
                ->update(array(
                                
                               'status'=>"2",
                               
                )
                        );

                return $result;
    }
    
    
public function insert_enquiry_product_details($data){

		$result= DB::table('enquiry_product')
                ->insert(array('enquiry_id'=>$data['enquiry_product_id'],
                               'product_name'=>$data['product_name'],
                               'qty'=>$data['quantity'],
                               'price'=>$data['price'],
                               'amount'=>$data['amount'],                               
                               'status'=>"1"                             
                              
                              ));

                 return $result;

       
}
    
   public  function insert_enquiry_details($data){
       
//       var_dump($data);die;
       
        if($data['enquiry_id']>0){
            
              $result = DB::table('enquiry')
                ->where('id','=',$data['enquiry_id'])
                ->update(array(
                                'company_id'=>$data['company_name'],
                               'contact_id'=>$data['contact_person'],
                               'business_vertical'=>$data['business_vertical'],
                               'enquiry_source'=>$data['enquiry_source'],
                               'refered_by'=>$data['refered_by'],
                               'allotted_to'=>$data['allotted_to'],
                               'remarks'=>$data['remarks'],
                               'enquiey_date'=>$data['enquiry_date'],
                               'timestamp'=>date("Y-m-d H:i:s"),
                               'enquiry_status'=>$data['enquiry_status'],
                               'amo_with_out_tax'=>$data['total_price'],
                               'discount'=>$data['discount_percentage'],
                               'discount_value'=>$data['discount_value'],
                               'gst_percent'=>$data['gst_percentage'],
                               'gst_value'=>$data['gst_value'],
                               'net_value'=>$data['net_total']
                )
                        );
            
            $result=$data['enquiry_id'];
     
        }
        else
        {
//            var_dump($data);die;
            
             $result= DB::table('enquiry')
                ->insertGetId(array(
                               'enquiry_id'=>$data['enquiry'],
                               'company_id'=>$data['company_name'],
                               'contact_id'=>$data['contact_person'],
                               'business_vertical'=>$data['business_vertical'],
                               'enquiry_source'=>$data['enquiry_source'],
                               'refered_by'=>$data['refered_by'],
                               'allotted_to'=>$data['allotted_to'],
                               'remarks'=>$data['remarks'],
                               'enquiey_date'=>$data['enquiry_date'],
                               'created_date'=>date("Y-m-d H:i:s"),
                               'created_by'=>"1",
                               'timestamp'=>date("Y-m-d H:i:s"),
                               'enquiry_status'=>$data['enquiry_status'],
                               'status'=>"1",
                               'amo_with_out_tax'=>$data['total_price'],
                               'discount'=>$data['discount_percentage'],
                               'discount_value'=>$data['discount_value'],
                               'gst_percent'=>$data['gst_percentage'],
                               'gst_value'=>$data['gst_value'],
                               'net_value'=>$data['net_total']
                              ));
        
      
        }
       
         return $result;
   }
    
    public function enquiry_view($data){
        
        
       
          $result = DB::table('enquiry')
              
            ->join('status', 'status.status_id', '=', 'enquiry.enquiry_status')           
            ->join('customer', 'customer.customer_id', '=', 'enquiry.company_id')           
            ->join('customer_contact_person', 'customer_contact_person.contact_id', '=', 'enquiry.contact_id')           
            ->join('business_vertical', 'business_vertical.vertical_id', '=', 'enquiry.business_vertical')           
            ->join('enquiry_source', 'enquiry_source.id', '=', 'enquiry.enquiry_source')           
            ->join('employee', 'employee.employee_id', '=', 'enquiry.allotted_to')      
              
              
            ->select('enquiry.id as enquiry','enquiry.enquiry_id as enquiry_id','customer.company_name','customer_contact_person.name as customer_contact_person','business_vertical.name as business_vertical','enquiry_source.name as enquiry_source','employee.name as employeename','enquiry.enquiey_date','status.name as status_name','enquiry.net_value','status.status_id','customer_contact_person.email as email_id','customer_contact_person.phone_no');
        
         if(!empty($data['search']))
		{
			
               $result =  $result->where('enquiry.enquiry_id',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('customer.company_name',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('customer_contact_person.name',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('business_vertical.name',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('enquiry_source.name',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('employee.name',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('customer_contact_person.email',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('customer_contact_person.phone_no',  'LIKE' ,'%'.$data['search'].'%')
//                ->orWhere('enquiry.enquiey_date',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere(DB::raw("(DATE_FORMAT(enquiry.enquiey_date,'%d-%m-%Y'))"), 'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('status.name',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('enquiry.net_value',  'LIKE' ,'%'.$data['search'].'%');
               
               
		}
		if(!empty($data['order']))
		{
			if(!empty($data['sort']))
			{				
				$result = $result->orderBy('enquiry.enquiry_id',$data['order']);
			}
			else
			{
				$result = $result->orderBy('enquiry.enquiry_id','desc');
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
    
        public function enquiry_view_tot($data){
       
            $result = DB::table('enquiry')
              
            ->join('status', 'status.status_id', '=', 'enquiry.enquiry_status')           
            ->join('customer', 'customer.customer_id', '=', 'enquiry.company_id')           
            ->join('customer_contact_person', 'customer_contact_person.contact_id', '=', 'enquiry.contact_id')           
            ->join('business_vertical', 'business_vertical.vertical_id', '=', 'enquiry.business_vertical')           
            ->join('enquiry_source', 'enquiry_source.id', '=', 'enquiry.enquiry_source')           
            ->join('employee', 'employee.employee_id', '=', 'enquiry.allotted_to')      
              
              
            ->select('enquiry.id as enquiry','enquiry.enquiry_id as enquiry_id','customer.company_name','customer_contact_person.name as customer_contact_person','business_vertical.name as business_vertical','enquiry_source.name as enquiry_source','employee.name as employeename','enquiry.enquiey_date','status.name as status_name','enquiry.net_value','status.status_id','customer_contact_person.email as email_id','customer_contact_person.phone_no');
        
         if(!empty($data['search']))
		{
			
              $result =   $result->where('enquiry.enquiry_id',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('customer.company_name',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('customer_contact_person.name',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('business_vertical.name',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('enquiry_source.name',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('employee.name',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('customer_contact_person.email',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('customer_contact_person.phone_no',  'LIKE' ,'%'.$data['search'].'%')
//                ->orWhere('enquiry.enquiey_date',  'LIKE' ,'%'.$data['search'].'%')
                 ->orWhere(DB::raw("(DATE_FORMAT(enquiry.enquiey_date,'%d-%m-%Y'))"), 'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('status.name',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('enquiry.net_value',  'LIKE' ,'%'.$data['search'].'%');
               
               
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
    
    public function get_edit_enquiry_details($data){
        
        return DB::select('SELECT id as enquiry,enquiry_id,company_id,contact_id,business_vertical,enquiry_source,refered_by,allotted_to,remarks,DATE_FORMAT(enquiey_date,"%d-%m-%Y") as enquiey_date,enquiry_status,amo_with_out_tax,discount,discount_value,gst_percent,gst_value,net_value from enquiry where id=?',array($data['enquiry_id']));
    }
    
    public function get_edit_enquiry_product_details($data){
        
        return DB::select('SELECT * from enquiry_product where enquiry_id=? and status=1',array($data['enquiry_id']));
    }
    
    public function get_contact_person_list($data){
        
            return DB::select('select c1.contact_id,c1.name from enquiry a1 
            inner join customer b1 on b1.customer_id=a1.company_id
            inner join customer_contact_person c1 on c1.company_id=b1.customer_id
            where a1.id=? and b1.status=1 and c1.status=1',array($data['enquiry_id']));
    }
    public function get_contact_person_email($data){
        
            return DB::select('select c1.email from enquiry a1 
            inner join customer b1 on b1.customer_id=a1.company_id
            inner join customer_contact_person c1 on c1.company_id=b1.customer_id
            where a1.id=? and b1.status=1 and c1.status=1 and c1.contact_id=a1.contact_id',array($data['enquiry_id']));
    }
    
}
