<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function showUserWeb($user_id)
    {
      $user = User::where('id', $user_id)->first();
      return view('user', ['user' => $user] );
    }
}
