<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function show()
{
    return view('auth.change-password');
}
public function update(Request $request)
{
 $request->validate([
    'current_password' => 'required|current_password',
    'password' => 'required|string|min:8|confirmed',
]);
$request->user()->update([
    'password' => Hash::make($request->password),
]);
return redirect('/products')->with('status', 'Password changed successfully!');   
}
}
