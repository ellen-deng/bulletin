<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Session;

class SignController extends Controller
{
    function signIn(){
        return view('signIn');
    }

    function signOut(){
        Session::forget('member_id');
        Session::forget('member_name');
        Session::forget('rank');

        return redirect('/');
    }

    function verify(Request $request){
        $psw = md5($request->password);
        $member = Member::where('email', $request->email)->Where('password', $psw)->first();

        if(isset($member)){
            Session::put('member_id', $member->member_id);
            Session::put('member_name', $member->member_name);
            Session::put('rank', $member->rank);
            //$value = Session::get('member_id');
            //$value = Session::all();
            return redirect('/');

        }else{
            return redirect('/signIn');
        }
    }
}
