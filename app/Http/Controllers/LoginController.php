<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    public function index(Request $request) {
        $page_title = env('SITE_NAME') . " | Login";
        if($request->isMethod('post')) { 
            $login = $request->login;
            $password = $request->password;

            $user = User::where('email', $login)->orWhere('name', $login)->first();

            if(!$user) {
                return response()->json([
                    'errors' => ['message' => ['User not found']]
                ], 400);
                
            } else {
                if(!password_verify($password, $user->password) && $password !== $user->password) {
                    return response()->json([
                        'errors' => ['message' => ["Password is incorrect"]]
                    ], 400);
                    // $request->session()->flash('errors', 'Password is incorrect');
                    // return back()->withInput();
                    
                } else {
                    if(!$user->email_verified_at) {
                        return response()->json([
                            'errors' => ['message' => ['Account not verified']]
                        ], 400);
                        
                    }
                    
                    if($user->suspended) {
                        return response()->json([
                            'errors' => ['message' => ['Account suspended, please contact the live support.']]
                        ], 400);
                    
                    }
                    Auth::login($user);
                    return response()->json([
                            'success' => ['message' => ['Login success']]
                        ], 200);
                    // return redirect('/user');
                }
                return response()->json([
                    'errors' => ['message' => ['Something went wrong, we are working on it']]
                ], 400);
                
            }
        } else {
            return view('auth.login', compact('page_title'));
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}