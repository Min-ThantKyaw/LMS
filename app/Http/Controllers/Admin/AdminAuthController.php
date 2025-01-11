<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function loginPage(){
        return view('admin.login');
    }

    public function loginAction(Request $request){
        return view('admin.index');
    }
}
