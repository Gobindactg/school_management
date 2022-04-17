<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use File;
use Image;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm() {
        return view('Frontend.auth.register');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //         if ($request->hasFile('profile_image')) {
    //             //   //insert that image
    //             $image = $request->file('profile_image');
    //             $img = time() . '.' . $image->getClientOriginalExtension();
    //             $location = public_path('Frontend/studentImage/' . $img);
    //             Image::make($image)->save($location);
    //             $student->image = $img;
    //             $student->save();
    //         }
    //     ]);
    // }
    public function create(Request $request){

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->institution_category = $request->category;
        $user->password = Hash::make($request->password);
        if ($request->hasFile('user_image')) {
            //insert that image
            $image = $request->file('user_image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('Frontend/UserImage' . $img);
            Image::make($image)->save($location);

            $user->image = $img;
        }
            $user->save();
            session()->flash('success', 'Your Registation Complete Successfully !! Please Login');
            return redirect('/login');
      
    }
}
