<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use App\Models\employee;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view ('dashboard');
    }
    public function order(RegisterRequest $request){
        $employee = new employee;
        $employee->email = $request->email;
        $hashedPassword = Hash::make($request->password);
        $employee->password = $hashedPassword;
        $employee->save();
        // return 'Request was validated!';
        return redirect()->back()->withSuccess('User successfully registered');
    }
}
