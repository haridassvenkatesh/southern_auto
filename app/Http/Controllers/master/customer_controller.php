<?php
namespace App\Http\Controllers\master;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;
use App\model\master\customer_model;
use App\model\common\common_model;

use DB;
use Illuminate\Validation\Rule;

class customer_controller extends Controller
{
    public function __construct()
    {
        date_default_timezone_set("Asia/Calcutta");
    }

    public function add_customer()
    {
                if(Session::get('user_id'))
                {
//                    $flag =1;
//                    foreach(Session::get('functionName') as $row)
//                    {
//                        if($row->function_name == "add_customer")
//                        {
                        $common_model   = new common_model();
                        $data['status'] = $common_model->getstatus();        
                        return view('master.customer.add_customer')->with('data', $data);
//                        }
        
//                    }
//        
//                    if($flag==1)
//                    {
//                        return "u r unautherized";
//                    }
                }
                else
                {
                    return view('login.login');
                }
    }

public function view_customer(){
    
       if(Session::get('user_id'))
                {
//                    $flag =1;
//                    foreach(Session::get('functionName') as $row)
//                    {
//                        if($row->function_name == "view_customer")
//                        {
                            return view('master.customer.view_customer');
//                        }
//        
//                    }
//        
//                    if($flag==1)
//                    {
//                        return "u r unautherized";
//                    }
                }
                else
                {
                    return view('login.login');
                }
    
  
}

public function get_customer_details(){
        $customer_model=new customer_model();
        $data = $_GET;


    $list=$customer_model->customer_view($data);
    $list_tot=$customer_model->customer_view_tot($data);

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
    public function insert_customer(request $req)
    {

 if(Session::get('user_id'))
                {
        DB::beginTransaction();

        try {

            $customer_model        = new customer_model();
            $data['customer_id']   = $req->customer_id;
            $data['customer_name'] = "";
            $data['gst_no']        = "";
            $data['phone_no1']     = "";
            $data['phone_no2']     = "";
            $data['email_id1']     = "";
            $data['email_id2']     = "";
            $data['address']       = "";
            $data['remarks']       = "";
            $data['status']        = "";
            $data['user_id']        = Session::get('user_id');
            if ($req->customer_name != "") {
                $data['customer_name'] = $req->customer_name;
            }

            if ($req->gst_no != "") {
                $data['gst_no'] = $req->gst_no;
            }

            if ($req->phone_no1 != "") {
                $data['phone_no1'] = $req->phone_no1;
            }

            if ($req->phone_no2 != "") {
                $data['phone_no2'] = $req->phone_no2;
            }
            if ($req->email_id1 != "") {
                $data['email_id1'] = $req->email_id1;
            }
            if ($req->email_id2 != "") {
                $data['email_id2'] = $req->email_id2;
            }
            if ($req->address != "") {
                $data['address'] = $req->address;
            }
            if ($req->remarks != "") {
                $data['remarks'] = $req->remarks;
            }
            if ($req->status != "") {
                $data['status'] = $req->status;
            }

            $data['created_date'] = date("Y-m-d H:i:s");



        $validator = Validator::make($req->all(), [

                     'customer_name' => 'required',
                     'phone_no1' => 'required|numeric|digits_between:10,15',
                     'email_id1' => 'required|email',
                     'address' => 'required',
                     'status' => 'required',


                ],[
                      'customer_name.required' => 'Customer Name Is Required.',
                      'phone_no1.required' => 'Phone No1 Is Required.',
                      'phone_no1.numeric' => 'Phone No1 Must be a Number.',
                      'phone_no1.digits_between' => 'Phone No1 Must be between 10 and 15 digits.',
                      'email_id1.required' => 'Email Id1 Is Required.',
                      'email_id1.email' => 'Invalid EmailId1 Format.',
                      'address.required' => 'Address Is Required.',
                      'status.required' => 'Status Is Required.',

                 ]);

         if(!$validator->passes())
        {
            return response()->json(['error'=>$validator->errors()->all()]);
        }


        if($data['gst_no']!=""){

             $validator = Validator::make($req->all(), [

                     'gst_no' => 'regex:/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/',

                ],[
                      'gst_no.regex' => 'Invalid GST No Format.',

                 ]);

         if(!$validator->passes())
        {
            return response()->json(['error'=>$validator->errors()->all()]);
        }

        }



            if($data['phone_no2']!=""){

             $validator = Validator::make($req->all(), [

                     'phone_no2' => 'numeric|digits_between:10,15',

                ],[
                       'phone_no2.numeric' => 'Phone No2 Must be a Number.',
                      'phone_no2.digits_between' => 'Phone No2 Must be between 10 and 15 digits.',

                 ]);

         if(!$validator->passes())
        {
            return response()->json(['error'=>$validator->errors()->all()]);
        }
            }


            if($data['email_id2']!=""){

             $validator = Validator::make($req->all(), [

                     'email_id2' => 'email',

                ],[
                      'email_id2.email' => 'Invalid EmailId2 Format.',


                 ]);

         if(!$validator->passes())
        {
            return response()->json(['error'=>$validator->errors()->all()]);
        }
            }


            if($data['customer_id']>0){




$count_gst_no=$customer_model->count_gst_no($data);
if(count($count_gst_no)>0){

  $validator = Validator::make($req->all(), [

          'gst_no' => 'unique:customer,gst_no',

     ],[
           'gst_no.unique' => 'Sorry, This GSTNo Is Already Exist.',

      ]);

          if(!$validator->passes())
              {
                  return response()->json(['error'=>$validator->errors()->all()]);
              }


}


            }

            else{

        //          $validator = Validator::make($req->all(), [
        //
        //              'phone_no1' => 'unique:customer,contact_no1',
        //              'email_id1' => 'unique:customer,email1',
        //
        //
        //         ],[
        //               'phone_no1.unique' => 'Sorry, This PhoneNo1 Is Already Exist.',
        //               'email_id1.unique' => 'Sorry, This EmailId1 Is Already Exist.',
        //
        //
        //          ]);
        //
        //  if(!$validator->passes())
        // {
        //     return response()->json(['error'=>$validator->errors()->all()]);
        // }
        //

        //
        //
        //     if($data['phone_no2']!=""){
        //
        //      $validator = Validator::make($req->all(), [
        //
        //              'phone_no2' => 'unique:customer,contact_no2',
        //
        //         ],[
        //                 'phone_no2.unique' => 'Sorry, This PhoneNo2 Is Already Exist.',
        //
        //          ]);
        //
        //  if(!$validator->passes())
        // {
        //     return response()->json(['error'=>$validator->errors()->all()]);
        // }
        //     }
        //


        //     if($data['email_id2']!=""){
        //
        //      $validator = Validator::make($req->all(), [
        //
        //              'email_id2' => 'unique:customer,email2',
        //
        //         ],[
        //                 'email_id2.unique' => 'Sorry, This EmailId2 Is Already Exist.',
        //
        //          ]);
        //
        //  if(!$validator->passes())
        // {
        //     return response()->json(['error'=>$validator->errors()->all()]);
        // }
        //     }




        if($data['gst_no']!=""){

             $validator = Validator::make($req->all(), [

                     'gst_no' => 'unique:customer,gst_no',

                ],[
                      'gst_no.unique' => 'Sorry, This GSTNo Is Already Exist.',

                 ]);

         if(!$validator->passes())
        {
            return response()->json(['error'=>$validator->errors()->all()]);
        }

        }


            }



                  foreach($req->commonItems as $row)
                                {


                                  $validator = Validator::make($row, [

                                    'contact_person_name' => 'required',
                                    'contact_person_designation' => 'required',
                                    'contact_person_phone' => 'required|numeric|digits_between:10,15',
                                      'contact_person_email' => 'required|email',

                                     ],[
                                       'contact_person_name.required' => 'Contact Person Name Is Required.',
                                       'contact_person_designation.required' => 'Contact Person Designation Is Required.',
                                       'contact_person_phone.required' => 'Contact Person Phone Number Is Required.',
                                       'contact_person_phone.numeric' => 'Contact Person Phone Number Must Be Number.',
                                       'contact_person_phone.digits_between' => 'Contact Person Phone Number Between 10 to 15.',
                                       'contact_person_email.email' => 'Contact Person Email Is Invalid Format.',


                                      ]);




                                    if(!$validator->passes())
                                    {
                                        return response()->json(['error'=>$validator->errors()->all()]);
                                    }
                                }
            $user_image = $req->file('image1');

            $data['image1'] = '';
            if ($user_image != '') {
                $data['image_file_name'] = uniqid() . '_' . $data['customer_name'] . '_' . $data['phone_no1'];

                $data['image1'] = $user_image->move('photo\customer', $data['image_file_name'] . '.' . $user_image->guessExtension());

            }


            $insert_customer_id = $customer_model->insert_customer($data);


            if($insert_customer_id>0){

              $data['contact_customer_id']=$insert_customer_id;
               $insert_contact_person = $customer_model->update_contact_person($data);

                   foreach($req->commonItems as $ci)
                {

                    $data['contact_person_name']=$ci['contact_person_name'];
                    $data['contact_person_designation']=$ci['contact_person_designation'];
                    $data['contact_person_phone']=$ci['contact_person_phone'];
                    $data['contact_person_email']=$ci['contact_person_email'];
                    $data['contact_person_id']=$ci['contact_person_id'];
                    if($ci['contact_person_id']==0){
                           $insert_contact_person = $customer_model->insert_contact_person($data);
                    }
                    else{
                           $insert_contact_person = $customer_model->update_contact_person_individual($data);
                    }
                 
                    if($insert_contact_person==false){
                       DB::rollback();
                        return json_encode(array(
                            'status' => 0,
                            'message' => "Customer Cannot Created "
                        ));
                    }

                }

              DB::commit();
              return json_encode(array(
                'status' => 1,
                'message' => " Customer Created successfully"

            ));


            }

            else{

               DB::rollback();
              return json_encode(array(
                'status' => 0,
                'message' => "Customer Cannot Created "
              ));
            }


        }
        catch (\Exception $e) {
            DB::rollback();
            // something went wrong
        }
      }
                else
                {
                    return view('login.login');
                }
    }


    public function edit_customer(request $req)
    {
        
        
       if(Session::get('user_id'))
                {
//                    $flag =1;
//                    foreach(Session::get('functionName') as $row)
//                    {
//                        if($row->function_name == "edit_customer")
//                        {
                           
                            $data['customer_id']=$req->customer_id;
                            $customer_model = new customer_model();
                            $common_model = new common_model();
                            $data['status'] = $common_model ->getstatus();
                            $data['customer_details'] = $customer_model ->get_edit_customer_list($data);
                            $data['contact_person_details'] = $customer_model ->get_edit_contact_person_list($data);
                            return view('master.customer.edit_customer')->with('data',$data);
//                        }
//        
//                    }
//        
//                    if($flag==1)
//                    {
//                        return "u r unautherized";
//                    }
                }
                else
                {
                    return view('login.login');
                }
    
        
        

    }


}
