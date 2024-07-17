<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderForm extends Controller
{
        // gujarati thali
     public function SGO()     //sgo = small gujarati order (Function name )
   {
    return view('smallgujform');
   }
   public function MGO()
   {
    return view('mediumgujform');
   }
   public function LGO()
   {
    return view('largegujform');
   }





      // Punjabi thali
     public function SPO()     //sgo = small gujarati order (Function name )
   {
    return view('smallpunform');
   }
   public function MPO()
   {
    return view('mediumpunform');
   }
   public function LPO()
   {
    return view('largepunform');
   }





}
