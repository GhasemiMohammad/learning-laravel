<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
//        $user = User::find(107);
//        dd($user->address);
//        $address = Address::find(17);
//        dd($address->user->name);
//          $user = User::find(38);
//          dd($user->info);
        $country = Country::find(2);
        dd($country->posts);
//        return view('welcome');
    }
}
