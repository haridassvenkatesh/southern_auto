<?php
namespace App\model\master;
use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class customer_model extends Model
{
  public function count_gst_no($data)
    {
	  try
	  {
  		return DB::select('SELECT * from customer  where customer_id!=? and gst_no=? ',array($data['customer_id'],$data['gst_no']));
	  }
	  catch (\Exception $e)
      {
        return $e;			
	  }
    }

 public function customer_view($data)
   {
	 try
	   {
		 	$result = DB::table('customer')
            		  ->join('status', 'status.status_id', '=', 'customer.status')
            		  ->select('customer.customer_id','customer.company_name as customer_name','customer.gst_no','status.name as status_name','status.status_id','customer.contact_no1','customer.email1');

         if(!empty($data['search']))
		{
			 $result = $result->where('customer.company_name',  'LIKE' ,'%'.$data['search'].'%')
                	   ->orWhere('customer.gst_no',  'LIKE' ,'%'.$data['search'].'%')
                	   ->orWhere('customer.contact_no1',  'LIKE' ,'%'.$data['search'].'%')
                	   ->orWhere('customer.email1',  'LIKE' ,'%'.$data['search'].'%')
                	   ->orWhere('status.name',  'LIKE' ,'%'.$data['search'].'%');

		}
		if(!empty($data['order']))
		{
			if(!empty($data['sort']))
			{
				$result = $result->orderBy('customer.customer_id',$data['order']);
			}
			else
			{
				$result = $result->orderBy('customer.customer_id','desc');
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
			catch (\Exception $e)
        {
          return $e;
			
		}

	}

public function customer_view_tot($data){

	try{
			$result = DB::table('customer')
               ->join('status', 'status.status_id', '=', 'customer.status')
               ->select('customer.customer_id','customer.company_name as customer_name','customer.gst_no','status.name as status_name','status.status_id','customer.contact_no1','customer.email1');

         if(!empty($data['search']))
		{
			$result = $result->where('customer.company_name',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('customer.gst_no',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('customer.contact_no1',  'LIKE' ,'%'.$data['search'].'%')
                ->orWhere('customer.email1',  'LIKE' ,'%'.$data['search'].'%')
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
	catch (\Exception $e)
        {
          return $e;
			
		}

	}

	public function insert_customer($data){
		
		try{
			
		if($data['customer_id']>0){

		  if($data['image1']!=""){

                  $result = DB::table('customer')
                ->where('customer_id','=',$data['customer_id'])
                ->update(array(

                               'image'=>$data['image1'],

                )
                        );
             }

		$result= DB::table('customer')
		  		->where('customer_id','=',$data['customer_id'])
                ->update(array('company_name'=>$data['customer_name'],
                               'address'=>$data['address'],
                               'gst_no'=>$data['gst_no'],
                               'contact_no1'=>$data['phone_no1'],
                               'contact_no2'=>$data['phone_no2'],
                               'email1'=>$data['email_id1'],
                               'email2'=>$data['email_id2'],
                               'remarks'=>$data['remarks'],
                               'updated_date'=>$data['created_date'],
                               'updated_by'=>$data['user_id'],
                               'status'=>$data['status'],

                              ));

		$result=$data['customer_id'];
}
		else{

			$result= DB::table('customer')
                ->insertGetId(array('company_name'=>$data['customer_name'],
                               'image'=>$data['image1'],
                               'address'=>$data['address'],
                               'gst_no'=>$data['gst_no'],
                               'contact_no1'=>$data['phone_no1'],
                               'contact_no2'=>$data['phone_no2'],
                               'email1'=>$data['email_id1'],
                               'email2'=>$data['email_id2'],
                               'remarks'=>$data['remarks'],
                               'created_date'=>$data['created_date'],
                               'created_by'=>$data['user_id'],
                               'updated_date'=>$data['created_date'],
                               'updated_by'=>$data['user_id'],
                               'status'=>$data['status'],
                              ));

		}

		return $result;
			
		}
		catch (\Exception $e)
        {
          return $e;
			
		}
		
	}


public function update_contact_person($data){

	try{
		
			 $result = DB::table('customer_contact_person')
                ->where('company_id','=',$data['contact_customer_id'])
                ->update(array(

                               'status'=>"2",

                )
                        );

                return $result;
	}
	catch (\Exception $e)
    {
      return $e;
			
	}
	

}


public function insert_contact_person($data){
	
	try{
		
		$result= DB::table('customer_contact_person')
                ->insert(array('name'=>$data['contact_person_name'],
                               'company_id'=>$data['contact_customer_id'],
                               'phone_no'=>$data['contact_person_phone'],
                               'email'=>$data['contact_person_email'],
                               'designation'=>$data['contact_person_designation'],
                               'remarks'=>$data['contact_person_designation'],
                               'status'=>$data['status']

                              ));

                 return $result;
	}
	catch (\Exception $e)
    {
      return $e;
			
	}
	


}

public function get_edit_customer_list($data){
	
	try{
    return DB::select('SELECT * from customer a1 where a1.customer_id=?',array($data['customer_id']));
		}
	catch (\Exception $e)
    {
      return $e;
			
	}
	
}

public function get_edit_contact_person_list($data){
try{
    return DB::select('SELECT b1.* from customer a1 inner join customer_contact_person b1 on b1.company_id=a1.customer_id where a1.customer_id=? and b1.status=1',array($data['customer_id']));
	}
	catch (\Exception $e)
    {
      return $e;
			
	}
	
}

public function update_contact_person_individual($data){
    
    
	try{
		
			 $result = DB::table('customer_contact_person')
                ->where('contact_id','=',$data['contact_person_id'])
                ->update(array(

                               'name'=>$data['contact_person_name'],
                               'company_id'=>$data['contact_customer_id'],
                               'phone_no'=>$data['contact_person_phone'],
                               'email'=>$data['contact_person_email'],
                               'designation'=>$data['contact_person_designation'],
                               'remarks'=>$data['contact_person_designation'],
                               'status'=>$data['status']

                     )
                        );

                return $result;
	}
	catch (\Exception $e)
    {
      return $e;
			
	}
}
}
