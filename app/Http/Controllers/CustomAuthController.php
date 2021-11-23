<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('homePage.auth.login');
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Ingreso correcto');
        }

        return redirect("login")->withSuccess('Los datos de ingreso no son validos');
    }



    public function registration()
    {
        return view('homePage.auth.registration');
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'area' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Bienvenido');
    }

    public function recoveryPassword()
    {
        return view('homePage.auth.recoveryPassword');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ]);

        $credentials = User::where('email', '=', $request->email)->first();

            if ($credentials == NULL){
                return redirect("recovery")->withSuccess('Los datos de ingreso no son validos');
            } else {
                $credentials = $request->only('email', 'password');
                DB::connection('mysql')->table('users')
                    ->where('email', '=', $credentials['email'])
                    ->update(['password' => Hash::make($credentials['password'])]);


                if (Auth::attempt($credentials)) {
                    return redirect()->intended('dashboard')
                                ->withSuccess('Ingreso correcto');
                }
            }
        return redirect("recovery")->withSuccess('Los datos de ingreso no son validos');
    }


    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'area' => $data['area'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboardPage/dashboard');
        }

        return redirect("login")->withSuccess('Esta página es privada');
    }


    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
