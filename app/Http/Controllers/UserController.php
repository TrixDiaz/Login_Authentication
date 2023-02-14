<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\View;

//Common routes naming 
//index - show all data or students
// show - show a single data or student
//create - show a form to a new user
//store - store a data 
//edit - show form to a data
//update - update a data 
//destroy - delete a data 

class UserController extends Controller
{
    
    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required', 'min:4', Rule::unique('users','username')],
            'email' => ['required','email', Rule::unique('users','email')],
            'role' => ['required'], 
            'password' => 'required|confirmed|min:6|same:password_confirmation'
        ]);
      
        //alternative
      //  $validated['password'] = Hash::make($validated['password'])
      $validated['password'] = bcrypt($validated['password']);
     
      $user = User::create($validated);

      auth()->login($user);

      return redirect('/')->with('success','Account Successfully Created!');
       

    }

    public function login()
    {
        return view('user.dashboard');
    }
 
    public function loginProcess(Request $request)
    {
         $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');
        
         if(auth()->attempt($credentials))
         {
            //  $request-session()->regenerate();
             return redirect('login')->with('message', 'Welcome Back');
         }
             return redirect('/')->with('error','Login failed Unknown username and Bad Password');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logout Successfully');
    }


}
