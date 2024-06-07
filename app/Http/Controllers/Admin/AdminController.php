<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware("role:admin");
    }
    public function index()
    {
        $users = User::all();
        return view("admin.home", compact('users'));
    }

}


