<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;

use App\User;
use App\Images;
use Illuminate\Support\Facades\Hash;
use Image;
use Redirect;

class bacha extends BaseController
{
    public function register(Request $request){

        $image = $request->file('myimage');
        $nam = $image->getClientOriginalName();

        $input['imageName'] = $nam;// . '.' . $image->getClientOriginalExtension();
        $dist_path = public_path('/me');
        $image->move($dist_path,$input['imageName']);
  
        
        $password = Hash::make($request->input('password1'));
        $result=DB::insert("insert into users(name,email,password) values(?,?,?)",[$request->input('name'),$request->input('email1'),$password]);
        
        $result1=DB::insert("insert into images(email,user_image) values(?,?)",[$request->input('email1'),$nam]);
        
        
        
        return redirect('/admin')->with('flash_message_success','Registered successfully now you can login');
    }
   public function login(Request $request){

       if($request->isMethod('post')){
        $data = $request->input();
     //   $user1 = DB::table('users')->where('email', $data['email'])->first();

        $image1 = DB::table('images')->where('email', $data['email'])->first();
      /*  echo $image1->email;
        die;
     */
    $myarray = [
        'email' => $image1->email,
        'user_image' => $image1->user_image
    ];
 //   print_r($myarray);
  //  die;
  
        if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
          //  return View::make('social.dashboard',['me' => $user1->email]);
          //   return view('social.dashboard',['me' => $user1->email]);
          $request->session()->put('user',$myarray);
          return Redirect::to('/admin/dashboard')->with('minearray',$request->session()->get('user'));
         //   return view('social.dashboard')->with('myimage',$image1->email);
        }else{
            return redirect('/admin')->with('flash_message_error','Invalid Username or Password');
        }
       }
       
       return view('social.login');
   }
   public function dashboard(){
       return view('social.dashboard');
   }
   public function settings(){
       return view('social.settings');
   }
   public function chkPassword(Request $request){
       
       $data = $request->all();
       $current_password = $data['current_pwd'];
       
       $check_password = User::where(['id'=>'42'])->first();
       if(Hash::check($current_password,$check_password->password)){
           echo "true";
           die;
       }else{
           echo "false";
           die;
       }
   }
   public function logout(){
 //   Session::flush();
    return redirect('/admin')->with('flash_message_success','Logout Successfully');   
    }
    public function updatepwd(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $check_password = User::where(['email'=>Auth::user()->email])->first();
            $current_password = $data['current_pwd'];
            if(Hash::check($current_password,$check_password->password)){
                $password = bcrypt($data['new_pwd']);
                User::where('id','42')->update(['password'=>$password]);
                return redirect('/admin/settings')->with('flash_message_success','Password Changes Successfully');
            }else{
                return redirect('/admin/settings')->with('flash_message_error','Password Update Failed');
            }
        }
    }
}
