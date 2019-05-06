<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mediator extends Controller
{
     public function connStore($data)
    {
        $ids = \DB::table('bookings')->insertGetId($data);
        // return $id;
        return view('payment', ['ids'=>$ids]);
    }


    public function connContact($data)
    {
    	
        \DB::table('contact')->insertGetId($data);
          return view('master');
    }

}
