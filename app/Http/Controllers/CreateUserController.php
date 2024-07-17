<?php

namespace App\Http\Controllers;

use App\Models\CreateUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;


class CreateUserController extends Controller
{
    

 public function store(Request $request) {
    $user = new CreateUser();
    $user->user_id = $request->input('user_id');
    $user->full_name = $request->input('full_name');
    $user->contact_number = $request->input('contact_number');
    $user->address = $request->input('address');
    $user->email = $request->input('email');
    $user->password = Hash::make($request->input('password')); // Hash the password before saving
    $user->save();

    // Store user details in session
    session([
        'customername' => $user->full_name,
        'email' => $user->email,
        'contact' => $user->contact_number,
        'address' => $user->address
    ]);

    echo "<script type='text/javascript'>";
    echo "alert('Account Created Successfully!!');";
    echo "</script>";

    return view('onlylogin');
}

    






public function userlogin(Request $red) {
    $email = $red->email;
    $password = $red->password;


    $user = CreateUser::where('email', $email)->first();

    if (!$user || !Hash::check($password, $user->password)) {
        return redirect()->route('login')->with('error', 'Invalid Email or Password!');
    }

   
    Auth::login($user);

  
    $red->session()->put('user', $user->user_id);
    $red->session()->put('user', $user->email);


    $welcomeMessage = "Welcome, " . $user->full_name . "!";
    echo "<script type='text/javascript'>";
    echo "alert('$welcomeMessage');";
    echo "setTimeout(function() { window.location.href = 'userhome'; }, 5);"; 
    echo "</script>";
}



public function showForm(Request $request)
{
    if ($request->session()->has('user')) {
        // User is logged in, redirect to smallgujform
        return view('smallgujform');
    } else {
        // User is not logged in, redirect to create account page
        return view('createaccount');
    }
}


public function handlePayment(Request $request)
{

  Session::put('payment_success',true);
    return redirect()->route('userhome');
}




public function logout(Request $request)
{
    $request->session()->invalidate();
    return redirect('login');
}





}



