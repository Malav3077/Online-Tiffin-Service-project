<?php

namespace App\Http\Controllers;

use App\Models\Admindetails;
use App\Models\UserOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminDetailsController extends Controller
{
    public function index()
    {
        // 
    }

    public function authing(Request $request)
    {
        $username = $request->input('uname');
        $password = $request->input('pass');

        $validUsername = "Malav@2001";
        $validPassword = "malav3077";

        if ($username === $validUsername && $password === $validPassword)
        {
            $rr = UserOrder::all();
            echo "<script>alert('Login Successful..✅✅')</script>";
            return view('adminorders', compact('rr'));
        } 
        else 
        { 
            echo "<script>alert('Wrong Username and Password. Try Again..!!😑')</script>";
            return view('admin');
        }
    }





public function allOrders()
{
    $orders = UserOrder::where('confirmed', false)->where('is_deleted', false)->get();
    return view('adminorders', ['rr' => $orders]);
}

public function confirmedOrders()
{
    $orders = UserOrder::where('confirmed', true)->where('is_deleted', false)->get();
    return view('confirms', ['rr' => $orders]);
}

public function deletedOrders()
{
    $deletedOrders = UserOrder::where('is_deleted', true)->get();
    return view('deletes', ['deletedOrders' => $deletedOrders]);
}

public function confirmOrderr($user_id)
{
    $order = UserOrder::findOrFail($user_id);
    $order->confirmed = true;
    $order->status = 'Success';
    $order->save();

    return redirect()->route('adminorders')->with('success', 'Order confirmed successfully.');
}


public function deleteOrder($user_id)
{
    $order = UserOrder::findOrFail($user_id);
    $order->is_deleted = true;
    $order->save();

    return redirect()->route('adminorders')->with('success', 'Order deleted successfully.');
}

 public function Adminlogout(Request $request)
    {
        $request->session()->invalidate();
        
        return redirect('admin');
    }


}