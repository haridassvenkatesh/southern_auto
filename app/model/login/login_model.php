<?php
namespace App\model\login;
use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class login_model extends Model
{

  public function login_submit($data){
      
        return DB::select('SELECT a1.user_name,a1.designation_id,a1.password,a1.user_id,b1.name as employee_name from                    user_login a1 inner join employee b1 on b1.employee_unique_id=a1.user_name
                           where a1.status=1 and b1.status=1 and  a1.user_name=? LIMIT 1',array($data['username']));
   
  }

    public function get_function_name($designation_id){
         return DB::select('SELECT a1.function_name FROM employee_restriction a1 
                            inner join controller b1 on b1.id=a1.controller_id
                            where a1.status=1 and a1.role_id=? and b1.status=1',array($designation_id));
    }

}
