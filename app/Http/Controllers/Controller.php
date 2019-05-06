<?php

namespace App\Http\Controllers;

use DB; 

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   /*  public function insert(Request $req)
    {
       $first_name = $req->input('first_name');
       $last_name = $req->input('last_name');
    

       $data = array(

           "first_name"=>$first_name,
            "last_name"=>$last_name
          );

       \DB::table('test')->insert($data);

       echo"succes";
       
        
    }*/
}
