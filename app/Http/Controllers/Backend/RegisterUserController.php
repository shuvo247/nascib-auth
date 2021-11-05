<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
Use Alert;
class RegisterUserController extends Controller
{
    public function registerUser(Request $request)
    {
        $user = new User();
        $user->registration_type = $request->registration_type;
        $user->full_name_in_bengali = $request->full_name_in_bengali;
        $user->full_name_in_english = $request->full_name_in_english;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->password = Hash::make($request['password']);
        $user->save();
        toast('Registration Successfully Done!','success');
        return back();
    }
}
