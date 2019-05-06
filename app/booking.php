<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $table = 'bookings';
    public  $fillable = [
    	'firstName','lastName','email','roomType','checkIntime','timeIn','checkOuttime','timeOut','numOfguests'
    ];
}
