<?php

namespace App\Http\Controllers;


use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Mail\KonfirmasiEmail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Rules\UniqueEmail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;


class LoginController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('user/register', $data);
    }

    public function register_action(Request $request)
    {
       $validator = Validator::make($request->all(),[
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => ['required', new UniqueEmail], 
        'password' => 'required|min:6',
        'password_confirm' => 'required|min:6|required_with:password|same:password',
       ]);

       $validator->validate();

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'password_confirm' => Hash::make($request->password_confirm),
            
        ];

        $peserta = Peserta::create($data);

        // Kirim email konfirmasi
        Mail::to($data['email'])->send(new KonfirmasiEmail($peserta));


        return redirect()->route('pagebreak')->with('success', 'Registration success. Please login!');
    }


    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password],true)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } 

        return back()->withErrors([
            'password' => 'Wrong email or password',
        ]);
    }

    public function password()
    {
        $data['title'] = 'Change Password';
        return view('user/password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = Peserta::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password changed!');
    }

    public function logout(Request $request)
    {
        $data =  [
            'remember' => $request->remember,
        ];
        Auth::logout();
        if($request->remember){
            $request->session()->put('remember');
        }
        $request->session()->invalidate();
        $request->session()->regenerateToken();
       
        return redirect('/');
    }
}
