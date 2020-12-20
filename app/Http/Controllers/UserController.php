<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function register(Request $request)
    {
          $request['password'] = Hash::make($request->password);
          $userModel = new User();
          $userData = $userModel->getUser($request->email);
          if(count($userData) == 0)
          {
          $data = $userModel->addUser($request->all());
          $response['message'] = "User Registration Successfully";
          $response['data'] = $request->all();
          $response['status'] = 1;
          } else
          {
          $response['status'] = 0;
          $response['message'] = "Email Already Exists!";
          }
          return response()->json($response);
    }
    
}
