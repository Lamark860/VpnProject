<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($_user)
    {
        $user = User::findOrFail($_user) ;

        return view('home',[
            'user' => $user,
        ]);
    }
}
