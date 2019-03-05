<?php

namespace App\Http\Controllers\transaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;
use App\model\transaction\enquiry_model;
use App\model\common\common_model;
use DB;
use Illuminate\Validation\Rule;

class enquiry_controller extends Controller
{
    public function __construct()
    {
         date_default_timezone_set("Asia/Calcutta");
    }

    public function enquiry_master(){
         
         if(Session::get('user_id'))
                {
        $enquiry_model =new enquiry_model();
        $data['enquiry_source']=4;//enquiry status=4 -> created   
        $data['create_enquiry_count']=count($enquiry_model->create_enquiry_count($data));
        $data['enquiry_source']=5;//enquiry status=5---->Quoted
        $data['quoted_enquiry_count']=count($enquiry_model->create_enquiry_count($data));
        $data['enquiry_source']=6;//enquiry status=6---->Won 
        $data['won_enquiry_count']=count($enquiry_model->create_enquiry_count($data));
        $data['enquiry_source']=7;//enquiry status=7---->Lost
        $data['lost_enquiry_count']=count($enquiry_model->create_enquiry_count($data));
        $data['enquiry_source']=8;//enquiry status=8---->Closed
        $data['closed_enquiry_count']=count($enquiry_model->create_enquiry_count($data));
        $data['enquiry_source']=9;//enquiry status=8---->Closed
        $data['hold_enquiry_count']=count($enquiry_model->create_enquiry_count($data));
             
        return view('transaction.enquiry.enquiry_master')->with('data',$data);
         }
        else{
              return view('login.login');
        }
    }


  public function add_enquiry()
    {
 if(Session::get('user_id'))
                {
                   $common_model = new common_model();
                   $data['status'] = $common_model ->getstatus();
                   $data['business_vertical'] = $common_model ->getbusiness_vertical();
                   $data['enquiry_source'] = $common_model ->getenquiry_source();
                   $data['company_list'] = $common_model ->getcompany_list();
                   $data['employee_list'] = $common_model ->getemployee_list(); 
                   return view('transaction.enquiry.add_enquiry')->with('data',$data);
  }
        else{
              return view('login.login');
        }
    }


   public function get_contact_person(request $req){
       $data['compnay_id']=$req->company_id;
        $common_model = new common_model();
        $data['contact_person'] = $common_model ->getcontact_person($data);
       return $data;
   }


   public function get_contact_person_email(request $req){
       $data['contact_id']=$req->contact_id;
        $common_model = new common_model();
        $data['contact_person_email'] = $common_model ->get_contact_person_email($data);
       return $data;
   }

    public function insert_enquiry(request $req){
			
 if(Session::get('user_id'))
                {
        DB::beginTransaction();

try {
        $enquiry_model =new enquiry_model();
        $data['enquiry_id']=$req->enquiry_id;
        $data['company_name']=0;
        $data['contact_person']=0;
        $data['business_vertical']=0;
        $data['enquiry_source']=0;
        $data['allotted_to']=0;
        $data['enquiry_date']="";
        $data['quoted_date']="";
        $data['refered_by']="";
        $data['project_name']="";
        $data['remarks']="";
        $data['quotation_no']="";
        $data['po_no']="";
        $data['po_date']="";
        $data['project_no']="";
        $data['total_price']="0.00";
        $data['discount_percentage']="0";
        $data['discount_value']="0.00";
        $data['gst_percentage']="0";
        $data['gst_value']="0.00";
        $data['net_total']="0.00";
        $data['enquiry']="";
        $data['enquiry_status']=1;
        $data['invoice_no']="";
        $data['invoice_date']="";
        $data['transporter']="";
        $data['delivery_date']="";
        $data['lr_no']="";
        $data['user_id']=Session::get('user_id');
        $data['created_date']=date("Y-m-d H:i:s");
        if($req->company_name!=""){
           $data['company_name']=$req->company_name;
        }

         if($req->contact_person!=""){
           $data['contact_person']=$req->contact_person;
        }

        if($req->business_vertical!=""){
           $data['business_vertical']=$req->business_vertical;
        }

        if($req->enquiry_source!=""){
           $data['enquiry_source']=$req->enquiry_source;
        }

        if($req->allotted_to!=""){
           $data['allotted_to']=$req->allotted_to;
        }

         if($req->enquiry_date!=""){
           $data['enquiry_date']=date("Y-m-d", strtotime($req->enquiry_date));
        }

         if($req->refered_by!=""){
           $data['refered_by']=$req->refered_by;
        }
       if($req->project_name!=""){
           $data['project_name']=$req->project_name;
        }
         if($req->remarks!=""){
           $data['remarks']=$req->remarks;
        }
         if($req->total_price!=""){
           $data['total_price']=round($req->total_price,2);
        }
         if($req->discount_percentage!=""){
           $data['discount_percentage']=round($req->discount_percentage,2);
        }

        if($req->discount_value!=""){
           $data['discount_value']=round($req->discount_value,2);
        }
        if($req->gst_percentage!=""){
           $data['gst_percentage']=round($req->gst_percentage,2);
        }
        if($req->gst_value!=""){
           $data['gst_value']=round($req->gst_value,2);
        }
        if($req->net_total!=""){
           $data['net_total']=round($req->net_total,2);
        }
		
	if($req->quoted_date!=""){
		 $data['quoted_date']=date("Y-m-d", strtotime($req->quoted_date));
	}
    if($req->quotation_no!=""){
		 $data['quotation_no']=$req->quotation_no;
	}
     if($req->po_no!=""){
		 $data['po_no']=$req->po_no;
	}
    if($req->po_date!=""){
		 $data['po_date']=date("Y-m-d", strtotime($req->po_date));
	}
     if($req->project_no!=""){
		 $data['project_no']=$req->project_no;
	}
       if($req->delivery_date!=""){
		 $data['delivery_date']=date("Y-m-d", strtotime($req->delivery_date));
	}  
    
 if($req->invoice_no!=""){
		 $data['invoice_no']=$req->invoice_no;
	}
    if($req->invoice_date!=""){
		 $data['invoice_date']=date("Y-m-d", strtotime($req->invoice_date));
	}
    if($req->transporter!=""){
		 $data['transporter']=$req->transporter;
	}
    if($req->lr_no!=""){
		 $data['lr_no']=$req->lr_no;
	}
    

        $validator = Validator::make($req->all(), [

                   'company_name' => 'required|numeric',
                   'contact_person' => 'required',
                   'business_vertical' => 'required',
                   'enquiry_source' => 'required|numeric',
                   'project_name' => 'required',
                   'allotted_to' => 'required',
                   'enquiry_date' => 'required',
                   'status' => 'required|numeric',


              ],[
                     'company_name.required' => 'Company Name Is Required.',
                     'contact_person.required' => 'Contact Person  Is Required.',
                     'business_vertical.required' => 'Business Vertical Is Required.',
                     'enquiry_source.required' => 'Enquiry Source Is Required.',
                     'project_name.required' => 'Project Name Is Required.',
                     'allotted_to.required' => 'Allotted To Is Required.',
                     'enquiry_date.required' => 'Enquiry Date Is Required.',
                     'enquiry_date.required' => 'Enquiry Date Is Required.',
                     'status.required' => 'Enquiry Status Is Required.',


               ]);

       if(!$validator->passes())
      {
          return response()->json(['error'=>$validator->errors()->all()]);
      }

	  if($req->status==5){
		  $validator = Validator::make($req->all(), [

                   'quotation_no' => 'required',
                   'quoted_date' => 'required',


              ],[
                   
                     'quotation_no.required' => 'Quoted Number Is Required.',
                     'quoted_date.required' => 'Quoted Date Is Required.',


               ]);

       if(!$validator->passes())
      {
          return response()->json(['error'=>$validator->errors()->all()]);
      }

	  }
	  if($req->status==6){
		  $validator = Validator::make($req->all(), [

                    
                   'quotation_no' => 'required',
                   'quoted_date' => 'required',
                   'po_no' => 'required',
                   'po_date' => 'required',
                   'delivery_date' => 'required',
                   'project_no' => 'required',


              ],[
                   
                     'quotation_no.required' => 'Quoted Number Is Required.',
                     'quoted_date.required' => 'Quoted Date Is Required.',
                     'po_no.required' => 'Po Number Is Required.',
                     'po_date.required' => 'Po Date Is Required.',
                     'delivery_date.required' => 'Delivery Date Is Required.',
                     'project_no.required' => 'Project Number Is Required.',


               ]);

       if(!$validator->passes())
      {
          return response()->json(['error'=>$validator->errors()->all()]);
      }

	  }
      if($req->status==8){
		  $validator = Validator::make($req->all(), [

                    
                   'quotation_no' => 'required',
                   'quoted_date' => 'required',
                   'po_no' => 'required',
                   'po_date' => 'required',
                   'project_no' => 'required',
                   'delivery_date' => 'required',
                   'invoice_no' => 'required',
                   'invoice_date' => 'required',
                   'transporter' => 'required',
                   'lr_no' => 'required',


              ],[
                   
                     'quotation_no.required' => 'Quoted Number Is Required.',
                     'quoted_date.required' => 'Quoted Date Is Required.',
                     'po_no.required' => 'Po Number Is Required.',
                     'po_date.required' => 'Po Date Is Required.',
                     'project_no.required' => 'Project Number Is Required.',
                     'delivery_date.required' => 'Delivery Date Is Required.',
                     'invoice_no.required' => 'Invoice Number Is Required.',
                     'invoice_date.required' => 'Invoice Date Is Required.',
                     'transporter.required' => 'Transporter Is Required.',
                     'lr_no.required' => 'LR Number Is Required.',


               ]);

       if(!$validator->passes())
      {
          return response()->json(['error'=>$validator->errors()->all()]);
      }

	  }
      foreach($req->commonItems as $row)
                    {


                      $validator = Validator::make($row, [

                        'product_name' => 'required',
                        'quantity' => 'required',
                        'price' => 'required|numeric',
                        'amount' => 'required|numeric',

                         ],[
                           'product_name.required' => 'Product Name Is Required.',
                           'quantity.required' => 'Quantity Is Required.',
                           'price.required' => 'Price Is Required.',
                           'amount.numeric' => 'Amount Is Number.',



                          ]);




                        if(!$validator->passes())
                        {
                            return response()->json(['error'=>$validator->errors()->all()]);
                        }
                    }
	
	      	$validator = Validator::make($req->all(), [

                  
                   'total_price' => 'required|numeric',
                   'net_total' => 'required|numeric',    
               


              ],[
                    'total_price.required' => 'Total Price Id Is Required.',                   
                    'net_total.required' => 'Net Total Is Required.',     
                  

               ]);

       if(!$validator->passes())
      {
          return response()->json(['error'=>$validator->errors()->all()]);
      }
  $data['enquiry_status']=$req->status;

    if($data['enquiry_id']==0){
        
       
      
            $get_count_enquiry=$enquiry_model->get_count_enquiry($data);

            if(count($get_count_enquiry)>0){
                foreach($get_count_enquiry as $row){

                    $data['enquiry']="ENQ000".($row->id+1);
                }
            }else{
                $data['enquiry']="ENQ0001";
            }
    }

    $insert_enquiry_value=$enquiry_model->insert_enquiry_details($data);
    if($insert_enquiry_value>0){
               $data['enquiry_product_id']=$insert_enquiry_value;
               $update_product = $enquiry_model->update_enquiry_product_details($data);

            foreach($req->commonItems as $ci)
                {

                    $data['product_name']=$ci['product_name'];
                    $data['quantity']=$ci['quantity'];
                    $data['price']=$ci['price'];
                    $data['amount']=$ci['amount'];
                    $insert_product = $enquiry_model->insert_enquiry_product_details($data);
                    if($insert_product==false){
                       DB::rollback();
                        return json_encode(array(
                            'status' => 0,
                            'message' => "Enquiry Cannot Created "
                        ));
                    }

                }
           DB::commit();
           return json_encode(array(
                'status' => 1,
                'message' => "Enquiry Created Successfully"

            ));

    }
    else{

        DB::rollback();
                        return json_encode(array(
                            'status' => 0,
                            'message' => "Enquiry Cannot Created"
                        ));
    }

} catch (\Exception $e) {
    DB::rollback();
    // something went wrong
}
     }
        else{
              return view('login.login');
        }
    }

public function view_enquiry(){
   if(Session::get('user_id'))
                {
        $data['enquiry_status']=4;
       $data['status_name']="New Enquiry";
  return view('transaction.enquiry.view_enquiry')->with('data',$data);
        }
                else
                {
                    return view('login.login');
                }
} 
public function view_enquiry_quoted(){
   if(Session::get('user_id'))
                {
      $data['status_name']="Quoted Enquiry";
        $data['enquiry_status']=5;
  return view('transaction.enquiry.view_enquiry')->with('data',$data);
        }
                else
                {
                    return view('login.login');
                }
    
}
public function view_enquiry_converted(){
  if(Session::get('user_id'))
                {
       $data['status_name']="Projects";
        $data['enquiry_status']=6;
  return view('transaction.enquiry.view_enquiry')->with('data',$data);
     }
                else
                {
                    return view('login.login');
                }
}
public function view_enquiry_lost(){
  if(Session::get('user_id'))
                {
        $data['enquiry_status']=7;
       $data['status_name']="Lost Enquiry";
  return view('transaction.enquiry.view_enquiry')->with('data',$data); }
                else
                {
                    return view('login.login');
                }
}
    public function view_enquiry_closed(){
  if(Session::get('user_id'))
                {
        $data['enquiry_status']=8;
       $data['status_name']="Closed Projects";
  return view('transaction.enquiry.view_enquiry')->with('data',$data); }
                else
                {
                    return view('login.login');
                }
}
    public function view_enquiry_hold(){
  if(Session::get('user_id'))
                {
        $data['enquiry_status']=9;
       $data['status_name']="Hold Projects";
  return view('transaction.enquiry.view_enquiry')->with('data',$data); }
                else
                {
                    return view('login.login');
                }
}
public function view_total_enquiry(){
    if(Session::get('user_id'))
                {
        $data['enquiry_status']=0;
         $data['status_name']="All Enquiry";
        return view('transaction.enquiry.view_enquiry')->with('data',$data); }
                else
                {
                    return view('login.login');
                }
}
    public function get_enquiry_details(request $req){
     
        
        $enquiry_model =new enquiry_model();
        $data['sourceid']=$req->sourceid;       
        $data = $_GET; 
        if( $data['sourceid']!=0){
            
        $list=$enquiry_model->enquiry_view($data);
//            echo"<pre>";
//            print_r($list);
        $list_tot=$enquiry_model->enquiry_view_tot($data);
       }
        else{
            
             $list=$enquiry_model->enquiry_view1($data);
             $list_tot=$enquiry_model->enquiry_view_tot1($data);
        }
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

    public function edit_enquiry(request $req){
  if(Session::get('user_id'))
                {
                   $common_model = new common_model();
                   $enquiry_model =new enquiry_model();
                   $data['enquiry_id']=$req->enquiry_id;
                   $data['status'] = $common_model ->getstatus();
                   $data['business_vertical'] = $common_model ->getbusiness_vertical();
                   $data['enquiry_source'] = $common_model ->getenquiry_source();
                   $data['company_list'] = $common_model ->getcompany_list();
                   $data['employee_list'] = $common_model ->getemployee_list();
                   $data['enquiry_status'] = $common_model ->get_enquiry_status();
                   $data['contact_person'] = $enquiry_model ->get_contact_person_list($data);
                   $data['contact_person_email'] = $enquiry_model ->get_contact_person_email($data);
                   $data['cur_quotation_no']=$enquiry_model->cur_quotation_no($data);
                   $data['cur_project_no']=$enquiry_model->cur_project_no($data);
                   $data['enquiry_details']=$enquiry_model->get_edit_enquiry_details($data);
                   $data['enquiry_product_details']=$enquiry_model->get_edit_enquiry_product_details($data);
//var_dump($data['cur_quotation_no']);die;
                    return view('transaction.enquiry.edit_enquiry')->with('data',$data);
         }
                else
                {
                    return view('login.login');
                }
    }
}
