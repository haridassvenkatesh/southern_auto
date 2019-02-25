<?php
namespace App\model\dashboard;
use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class dashboard_model extends Model
{

  public function get_enquiry_details(){

    return DB::select('');
  }


}
