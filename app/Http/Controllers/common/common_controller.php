<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;
use App\employee_model;
use App\designation_model;
use DB;
use Illuminate\Validation\Rule;

class common_controller extends Controller
{
    public function __construct()
    {
         date_default_timezone_set("Asia/Calcutta"); 
    }
    
    public function get_status()
    {
        
    }
    
}
