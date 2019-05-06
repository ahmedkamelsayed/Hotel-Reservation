<?php

namespace App\http\controller;


use App\cate;

interface roomFactory
{
  public createRoom();
}


class single implements roomFactory
{
  public createPhone()
  {
    
  }
}

class double implements roomFactory
{
  public createPhone()
  {
    
  }
}

class suit implements roomFactory
{
  public createPhone()
  {
    
  }
}


public static shapeFactory
{
   public  getroom($room){
     if($room == null) return null;
     if($room == "Single Room") return single::createPhone();
     if($room == "Double") return double::createPhone();
     if($room == "Suit") return suit::createPhone();

   }

}
