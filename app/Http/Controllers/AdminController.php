<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        /*$this->middleware('auth', ['except' => ['getLogin', 'postLogin']]);
        $this->middleware('admin', ['except' => ['getLogin', 'postLogin']]);*/
    }

    public function getLogin()
    {
        return view('admin.login');
    }

    public function getDashboard()
    {
        return view('admin.dashboard');
    }

    public function getUserCredit()
    {
        return view('admin.manageUserCredit');
    }

    public function getUserProfile()
    {
        return view('admin.manageUserProfile');
    }

    public function getUserNew()
    {
        return view('admin.manageUserNew');
    }

    public function getTradeActive()
    {
        return view('admin.manageTradeActive');
    }

    public function getTradeAll()
    {
        return view('admin.manageTradeAll');
    }

    public function getTradeDetail()
    {
        return view('admin.manageTradeDetail');
    }
}
