<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class dashboard extends Controller
{
    //
    public function get_login()
    {
        return view('admin.pages.login');
    }
    public function post_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "email" => ["required", Rule::exists("normal_users","email")],
            "password" => ["required",],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            if (!Auth::attempt($request->only('email', 'password'))) {
                return back()->withErrors(["error" => "User name and email not match"])->onlyInput('error');
            }
            return redirect()->route('get_dashboard');
        } catch (\Throwable $e) {
            return back()->withErrors(["error" => $e->getMessage()])->onlyInput('error');
        }
    }
    public function get_register()
    {
        return view('admin.pages.register');
    }

    public function post_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => ["required", "min:3", "max:20"],
            "email" => ["required", "unique:normal_users,email"],
            "username" => ["required", "min:3", "max:20"],
            "password" => ["required", "confirmed"],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $insert = DB::table('normal_users')->insert([
                "name" => $request->name,
                "email" => $request->email,
                "username" => $request->username,
                "password" => Hash::make($request->password),
            ]);
            if (Auth::attempt($request->only('email', 'password'))) {
                return redirect()->route('get_dashboard');
            }
            return back()->withErrors(["error" => "User name and email not match"])->onlyInput('error');
        } catch (\Throwable $e) {
            return back()->withErrors(["error" => $e->getMessage()])->onlyInput('error');
        }
    }
    public function get_dashboard()
    {
        return view('admin.pages.dashboard');
    }
    public function get_destroy_login()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('get_login');
    }
}
