<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dishdetails extends Controller
{

    // gujarati thali
    public function SG()
   {
    return view('smallguj');
   }
   public function MG()
   {
    return view('mediumguj');
   }
   public function LG()
   {
    return view('largeguj');
   }


//    punjabi thali



    public function SP()
   {
    return view('smallpun');
   }
   public function MP()
   {
    return view('mediumpun');
   }
   public function LP()
   {
    return view('largepun');
   }
}
