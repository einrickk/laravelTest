<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use App\Models\employee;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function home()
    {
        return view ('homepage');
    }
    public function index()
    {
        return view ('register');
    }
    public function store(RegisterRequest $request){
        $employee = new employee;
        $employee->email = $request->email;
        $hashedPassword = Hash::make($request->password);
        $employee->password = $hashedPassword;
        $employee->api_token = Str::random(60);
        $employee->save();
        // return 'Request was validated!';
        return redirect()->back()->withSuccess('User successfully registered');
    }
}
