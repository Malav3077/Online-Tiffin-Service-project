<?php

namespace App\Http\Controllers;

use App\Models\UserOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class UserOrderController extends Controller
{
   
       public function storeorder(Request $request)
    {
      $request->validate([
    'from_date' => 'required|date',
    'to_date' => 'required|date|after_or_equal:from_date',
    'contact' => 'required|max:10',
    'time' => 'required|date_format:H:i'
]);


        $userOrder = new UserOrder();
        $userOrder->user_id = Auth::id(); 
        $userOrder->customername = $request->input('customername');
        $userOrder->email = $request->input('email');
        $userOrder->contact = $request->input('contact');
        $userOrder->tiffintype = $request->input('tiffintype');
        $userOrder->cost = $request->input('cost');
        $userOrder->quantity = $request->input('quantity');
        $userOrder->total = $request->input('total');
        $userOrder->from_date = $request->input('from_date');
        $userOrder->to_date = $request->input('to_date');
        $userOrder->totalovercost = $request->input('totalovercost');
        $userOrder->time = $request->input('time');
        $userOrder->address = $request->input('address');

        $userOrder->save();  

        echo "<script type='text/javascript'>";
        echo "alert('Your Order is submitted..!!');";
        echo "</script>";

        $totalovercost = $request->input('totalovercost');

        return view('payment', ['totalovercost' => $totalovercost]);
    }

    public function showOrders()
    {
        $orders = UserOrder::where('user_id', Auth::id())->get(); 

        return view('myorders', compact('orders'));
    }


    
}



