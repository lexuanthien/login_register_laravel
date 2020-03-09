<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class PageController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ], [
            'name.required' => 'Bạn chưa nhập Name',
            'email.required' => 'Bạn chưa nhập Email.',
            'password.required' => 'Bạn chưa nhập Password.'
        ]);
            
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        if ($user)
            return redirect()->route('login');

    }

    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request) //chu y auth va Authenticatable ben model User
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Bạn chưa nhập Email.',
            'password.required' => 'Bạn chưa nhập Password.'
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($data)) {
            return view('home');
        } else {
            return redirect()->route('login')->with('thongbao', 'Đăng Nhập Thất Bại: Sai Email hoặc Mật Khẩu');
        }
    }

    function Logout(Request $request) {
        Auth::logout();
        return back();
    }
}
