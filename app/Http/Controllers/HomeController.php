<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Country;
use App\Models\User;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Image;
use App\Models\Car;
use App\Models\Age;
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
//        $country = Country::find(2);
//        dd($country->posts);

//        *** Many To Many relations ***

//        $post= Post::find(1);
//        dd($post->tags);
//        $tag = Tag::find(1);
//        dd($tag->posts);

////      *** one to one polymorphic
//        $user = User::find(2);
//        dd($user->image);
//        $images = Image::find(1);
//        dd($images->imageable->name);

//        *** one to many polymorphic
//        $user = USer::find(2);
//        dd($user->ages);
//          $car = Car::find(3);
//          dd($car->ages);
        $age = age::find(1);
        dd($age->ageable);
    }

}
