<?php
namespace App\Http\Controllers\dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;
use App\model\dashboard\dashboard_model;
use App\model\transaction\enquiry_model;
use App\model\common\common_model;
use DB;
use Illuminate\Validation\Rule;

class dashboard_controller extends Controller
{
    public function __construct()
    {
        date_default_timezone_set("Asia/Calcutta");
    }
    
    public function view_dashboard1()
    {
         if(Session::get('user_id'))
                {      
        $data['from_date']="01-01-".date("Y");
        $data['To_date']="31-12-".date("Y");
       
        
        $dashboard_model   = new dashboard_model();
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
        $data['enquiry_source']=9;//enquiry status=9---->Hold
        $data['hold_enquiry_count']=count($enquiry_model->create_enquiry_count($data));
        return view('dashboard.old_dashboard_view')->with('data', $data);
             
       }
                else
                {
                    return view('login.login');
                }
    }

      public function view_dashboard()
    {
         if(Session::get('user_id'))
                {      
        $data['from_date']="01-01-".date("Y");
        $data['To_date']="31-12-".date("Y");
        $data['target_amount']=0;
        $data['total_revenue_invoice']=0;
        $data['total_revenue_po']=0;
        $data['total_revenue_lead']=0;
        
        $dashboard_model   = new dashboard_model();
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
        $data['enquiry_source']=9;//enquiry status=9---->Hold
        $data['hold_enquiry_count']=count($enquiry_model->create_enquiry_count($data));
             
        $data['year']=date('Y');
        //Target Amount       
     
         $data['target_amount']=$enquiry_model->target_amount_calculate($data);
             
        //Total Revenue Invoice             
         $data['total_revenue_invoice']=$enquiry_model->total_revenue_invoice($data);
             
        //Total Revenue PO     
         $data['total_revenue_po']=$enquiry_model->total_revenue_po($data);
             
        //Total Revenue Lead     
         $data['total_revenue_lead']=$enquiry_model->total_revenue_lead($data);
             
        //Quarterly Report
//         $data['total_quartely_report']=$enquiry_model->total_quartely_report($data);
             
        return view('dashboard.dashboard_view')->with('data', $data);
             
       }
                else
                {
                    return view('login.login');
                }
    }

}
