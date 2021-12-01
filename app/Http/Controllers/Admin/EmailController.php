<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index()
    {
        return view('admin.email.admin_email');
    }
    public function userEmail()
    {
        $userEmails = User::all();
        return view('admin.email.user_email',[
            'userEmails' => $userEmails,
        ]);
    }
}
