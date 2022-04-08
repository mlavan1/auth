<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Validator;  
use Illuminate\Validation\Rule;

class MainController extends Controller
{
    public function saveDetails(Request $request)
    {
        $userInfo=Admin::where('email','=',$request->email);
        dd($userInfo);
        // $admin= new Admin;
        // $admin-> name   =   $request    ->input('inputName');
        // $admin-> email  =   $request    ->input('inputEmail');
        // $admin->password=   nullable();    
        // $admin-> save();
        // return response()->json(['success'=>'Book saved successfully.']);
    }
    public function login (){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function indexPage(){
        return view('auth.index');
    }
    public function profile(){
        $data=['LoginUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.profile',$data);
    }
    public function edit(){
        $details=User::all();
        return response()->json($details);
    }
    

    // REGISTRATION PAGE
    public function save(Request $request){
        $request->validate([
            'name'      =>  'required',
            'email'     =>  'required|email|unique:admins',
            'password'  =>  'required|min:5|max:12|confirmed',
            'password'  =>  'required|min:5|max:12|' 
        ]);

        

        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save= $admin->save();
        if ($save){
            return back()->with('success',"Registered Successfully");
        }
        else{
            return back()->with('error',"Invalid email or password");
        }
        //0776254981 // MIS Anton Number

        


    }

    // LOGIN PAGE
    public function check(Request $request){
        $request-> validate([
            'email'     =>  'required|email',
            'password'  =>  'required|min:5|max:12',
        ]);

        $userInfo= Admin::where('email','=',$request->email)->first();
        if (!$userInfo){
            return back()->with('fail','We do not recognize your email');
        }
        else{
            if (Hash::check($request->password,$userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('/admin/dashboard');
            }
            else{
                return back()->with('fail','Incorrect password, Please try again !');
            }
        }
    }

    public function dashboard(){
        $data=['LoginUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.dashboard',$data);
    }
    public function home(){
        $data=['LoginUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.home',$data);
    }
    public function contact(){
        $data=['LoginUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.contact',$data);
    }
    public function about(){
        $data=['LoginUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.about',$data);
    }

    public function logout(){
        if (session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/index');
        }
    }

    
}
