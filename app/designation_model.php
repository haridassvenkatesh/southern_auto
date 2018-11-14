<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class designation_model extends Model
{
   public function getstatus(){
       
        return DB::select('SELECT * from status a where a.status = 1 and a.status_id in (1,2)');
   } 
}
