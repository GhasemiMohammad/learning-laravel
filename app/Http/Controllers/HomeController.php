<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
//        $user = User::find(107);
//        dd($user->address);
        $address = Address::find(17);
        dd($address->user->name);
        return view('welcome');
    }
}
