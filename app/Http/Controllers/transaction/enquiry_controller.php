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

      return view('transaction.enquiry.enquiry_master');
    }


      public function add_enquiry()
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
                   $data['status'] = $common_model ->getstatus();
                   $data['business_vertical'] = $common_model ->getbusiness_vertical();
                   $data['enquiry_source'] = $common_model ->getenquiry_source();
                   $data['company_list'] = $common_model ->getcompany_list();
                   $data['employee_list'] = $common_model ->getemployee_list();

      // var_dump($data);die;
                    return view('transaction.enquiry.add_enquiry')->with('data',$data);
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
        $data['refered_by']="";
        $data['remarks']="";
        $data['total_price']="0.00";
        $data['discount_percentage']="0.00";
        $data['discount_value']="0.00";
        $data['gst_percentage']="0.00";
        $data['gst_value']="0.00";
        $data['net_total']="0.00";
        $data['enquiry']="";
        $data['enquiry_status']=1;
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


        $validator = Validator::make($req->all(), [

                   'company_name' => 'required|numeric',
                   'contact_person' => 'required',
                   'business_vertical' => 'required',
                   'enquiry_source' => 'required|numeric',
                   'allotted_to' => 'required',
                   'enquiry_date' => 'required',
                   'total_price' => 'required|numeric',
                   'discount_percentage' => 'required|numeric|max:100|min:0',
                   'discount_value' => 'required|numeric',
                   'gst_percentage' => 'required|numeric|max:100|min:0',
                   'gst_value' => 'required|numeric',
                   'net_total' => 'required|numeric',

              ],[
                    'company_name.required' => 'Company Name Is Required.',
                     'contact_person.required' => 'Contact Person  Is Required.',
                    'business_vertical.required' => 'Business Vertical Is Required.',
                     'enquiry_source.required' => 'Enquiry Source Is Required.',
                     'allotted_to.required' => 'Allotted To Is Required.',
                    'enquiry_date.required' => 'Enquiry Date Is Required.',
                    'total_price.required' => 'Total Price Id Is Required.',
                    'discount_percentage.required' => 'Discount Percentage Is Required.',
                    'discount_value.required' => 'Discount Value Is Required.',
                    'gst_percentage.required' => 'Gst pPercentage Is Required.',
                    'gst_value.required' => 'Gst Value Is Required.',
                    'net_total.required' => 'Net Total Is Required.',

               ]);

       if(!$validator->passes())
      {
          return response()->json(['error'=>$validator->errors()->all()]);
      }
// var_dump($req->commonItems);die;
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


    if($data['enquiry_id']>0){
        $data['enquiry_status']=$req->status;
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
                            'message' => "Enquiry Cannot Created "
                        ));
    }

} catch (\Exception $e) {
    DB::rollback();
    // something went wrong
}
    }

    public function view_enquiry(){
  return view('transaction.enquiry.view_enquiry');
}

    public function get_enquiry_details(){
        $enquiry_model =new enquiry_model();
        $data = $_GET;


    $list=$enquiry_model->enquiry_view($data);
    $list_tot=$enquiry_model->enquiry_view_tot($data);

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

    public function edit_enquiry(request $req){

                   $common_model = new common_model();
                   $enquiry_model =new enquiry_model();
                   $data['enquiry_id']=$req->enquiry_id;
                   $data['status'] = $common_model ->getstatus();
                   $data['business_vertical'] = $common_model ->getbusiness_vertical();
                   $data['enquiry_source'] = $common_model ->getenquiry_source();
                   $data['company_list'] = $common_model ->getcompany_list();
                   $data['employee_list'] = $common_model ->getemployee_list();
                   $data['enquiry_status'] = $common_model ->get_enquiry_status();
                   $data['contact_person'] = $enquiry_model ->get_contact_person_list($data);                   $data['contact_person_email'] = $enquiry_model ->get_contact_person_email($data);

                   $data['enquiry_details']=$enquiry_model->get_edit_enquiry_details($data);                   $data['enquiry_product_details']=$enquiry_model->get_edit_enquiry_product_details($data);


//       var_dump($data['enquiry_details']);
//       var_dump($data['enquiry_product_details']);
//        die;
                    return view('transaction.enquiry.edit_enquiry')->with('data',$data);
    }
}
