<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mailconroller extends Controller
{
    public function sendmail(Request $request){
    	$email = 'mooncseru14@gmail.com';
    	$sub = $request->input('subject');
    	$msg = $request->input('message');
    	mail($email,$sub,$msg);
    	return 'mail sent';
    }
}
