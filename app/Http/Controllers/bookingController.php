<?php

namespace App\Http\Controllers;

use App\booking;

use App\contact;

use Illuminate\Http\Request;

use DB; 

use PDF;


//app('App\Http\Controllers\classController')->getroom();

use App\Http\Controllers\mediator;

//use App\lib\interface;

class bookingController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $mediator;

    public function index(Request $req)
    {
     // dd("welcome");
         $email = $req->input('email');
          $password = $req->input('pass');

          $r ="your email or password is not correct";


          if(($email == "admin@gmail.com")&&($password == "1234")){
             return view('master2');
          }else{
            return view('logi', ['r'=>$r]);
          }
    }

    /*public function __construct(mediator $mediator){
       $this->mediator=$mediator;
    }*/


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('student.create'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $req)
    {


          $firstName = $req->input('firstName');
          $lastName = $req->input('lastName');
          $email = $req->input('email');
          $roomType = $req->input('roomType');///////////////////
          $checkIntime = $req->input('checkIntime');
          $timeIn = $req->input('timeIn');
          $checkOuttime = $req->input('checkOuttime');
          $timeOut = $req->input('timeOut');
          $numOfguests = $req->input('numOfguests');

         // shapeFactory::getRoom($roomType);////////////////
         
         
     
          $data = array(

            "firstName"=>$firstName,
            "lastName"=>$lastName,
            "email"=>$email,
            "roomType"=>$roomType,//////////
            "checkIntime"=>$checkIntime,
            "timeIn"=>$timeIn,
            "checkOuttime"=>$checkOuttime,
            "timeOut"=>$timeOut,
            "numOfguests"=>$numOfguests,
          );

              $mediator = new mediator();
             return $mediator->connStore($data);
         // return mediator::connStore($data);

       //  $ids = \DB::table('bookings')->insertGetId($data);
        // return $id;
      //  return view('payment', ['ids'=>$ids]);
        
          
/*
           $f1 =  array( "firstName"=>$firstName);
           $f2 =  array( "lastName"=>$lastName);
           $f3 =   array( "email"=>$email);
           $f4 =   array( "roomType"=>$roomType);
           $f5 =   array( "checkIntime"=>$checkIntime);
           $f6 =  array( "timeIn"=>$timeIn);
           $f7 =  array(  "checkOuttime"=>$checkOuttime);
           $f8 =  array(  "timeOut"=>$timeOut);
           $f9 =  array( "numOfguests"=>$numOfguests);


          DB::table('bookings')->insert($f1);
          DB::table('bookings')->insert($f2);
          DB::table('bookings')->insert($f3);
          DB::table('bookings')->insert($f4);
          DB::table('bookings')->insert($f5);
          DB::table('bookings')->insert($f6);
          DB::table('bookings')->insert($f7);
          DB::table('bookings')->insert($f8);
          DB::table('bookings')->insert($f8);
          
          return view('master');
            */
       }


       public function contact(Request $req)
        {
          $FirstName = $req->input('FirstName');
          $LastName = $req->input('LastName');
          $phone = $req->input('phone');
          $Email = $req->input('Email');
          $Message = $req->input('Message');
          
          $data = array(

            "FirstName"=>$FirstName,
            "LastName"=>$LastName,
            "phone"=>$phone,
            "Email"=>$Email,
            "Message"=>$Message,
          );
         // \DB::table('contact')->insertGetId($data);
        //  return view('master');

           $mediator = new mediator();
         return  $mediator->connContact($data);
          //return mediator::connContact($data);
        }


   public function logi()
    {
      return view('logi');

    }       

    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Request $request)
    {
     DB::table('bookings')
     ->where('id',request('id'))
     ->where('email',request('email'))
     ->delete();
     // return back();
      return view('master');
       /*
      if (id::where('id', '=', Input::get('id'))->exists()) 
      {
        DB::table('bookings')->where($id, '=', 'id')->delete(); 
         
       }
       */
    }

/*
     public function destroy(Request $request)
    {

      
      

      if(DB::table('bookings')
     ->where('id',request('id'))
     ->where('email',request('email'))
     ->delete()== true){
     
     // return back();
       
       $sa3yd= "your booking canceled succsefuly ";
    //  return view('master',['sa3yd'=>$sa3yd]);
     // return view('destroy')->with($sa3yd); 
      return view('destroy',['sa3yd'=>$sa3yd]);
    }else{

      $sa3yd= "the id or email is not correct ";
     // return view('master', ['sa3yd'=>$sa3yd]);
    //  return view('destroy')->with($sa3yd); 
      return view('destroy', ['sa3yd'=>$sa3yd]);
    }

*/
    // to download the feedback in type pdf .. go to url -> /fun_pdf
    public function fun_pdf()
    {
      $customers=contact::all();
      $pdf=PDF::loadView('customerpdf', ['customers'=>$customers]);
      return $pdf->download('customerpdf.pdf');


      

    }
  
}