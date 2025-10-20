<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public $users = [
        ['name'=>'Mario', 'surname'=>'Rossi', 'role'=>'Senior Manager'],
        ['name'=>'Serena', 'surname'=>'Verdi', 'role'=>'HR'],
        ['name'=>'Valter', 'surname'=>'Bianchi', 'role'=>'Developer']
    ];
    public function homepage() {
    return view('welcome');
}

public function aboutUs(){
    $users = [
        ['name'=>'Mario', 'surname'=>'Rossi', 'role'=>'Senior Manager'],
        ['name'=>'Serena', 'surname'=>'Verdi', 'role'=>'HR'],
        ['name'=>'Valter', 'surname'=>'Bianchi', 'role'=>'Developer']
    ];
    return view('about-us', compact('users'));
}


public function aboutUsDetail($name){
     $users = [
        ['name'=>'Mario', 'surname'=>'Rossi', 'role'=>'Senior Manager'],
        ['name'=>'Serena', 'surname'=>'Verdi', 'role'=>'HR'],
        ['name'=>'Valter', 'surname'=>'Bianchi', 'role'=>'Developer']
    ];
    foreach($users as $user){
        if($name == $user['name']){
            return view('about-us-detail', ['user'=>$user]);
        }
    }
}


public function contactUs(Request $request){
    $user = $request->input('user');
    $email = $request->input('email');
    $message = $request->input('message');
    $user_data = compact('user', 'email', 'message');

    try{
       Mail::to($email)->send(new ContactMail($user_data));
    }catch(Exception $e){
        return redirect()->route('homepage')->with('emailError', 'errore, riprovare');
    }
     
    return redirect(route('homepage'))->with('emailSent', 'Hai inviato una email');
}

public function profile(){
    return view('user.profile');

}

public function posts(){
    return view('posts');   

}

public function contacts(){
    return view('contacts');   

}

}
