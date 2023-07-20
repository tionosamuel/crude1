<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Redirect;

class adminController extends Controller
{
    public function from_register(Request $request) 
    {
      if($request->session()->get('admin')){
        return redirect('/espace-membre')->with('status', 'Vous devez vous déconnecter avant de vous re-inscrire.');
      }
      
      return view('register');
    }
    
    public function from_login(Request $request) 
    {
      if($request->session()->get('admin')){
        return redirect('/espace-membre')->with('status', 'Vous devez vous déconnecter avant de vous re-connecter!');
      }
      return view('login');
    }

    public function traitement_register(Request $request)
    {
      $request->validate([
        'nom'=>'required',
        'prenom'=>'required',
        'email'=>'email|required|unique:admins',
        'password'=>'required|min:8', 
        
      ]);
      $admin = new admin();
      $admin->nom= $request->input('nom');
      $admin->prenom= $request->input('prenom');
      $admin->email= $request->input('email');
      $admin->password= bcrypt($request->input('password'));
      $admin->save();

      return redirect('/register')->with('status', 'votre compte a bien été crée .');
      
     
    }
    public function traitement_login(Request $request)
    {
        $request->validate([
            'email'=>'email|required|',
            'password'=>'required|min:8', 
            
          ]);  

          $admin = admin::where('email',$request->input('email'))->first();
          
          if($admin){
          if(Hash::check($request->input('password'), $admin->password)){

           $request->session()->put('admin', $admin);

           return redirect('/espace-membre');

          }else{
            return back()->with('status','identifiant ou Mot de passe incorrecte.');
          }
          }else{
            return back()->with('status','Desolé! vous n\'avez pas de compte avec cet email!');
          }
    }
    public function logout(Request $request) 
    {
    $request->session()->forget('admin');
    return redirect('/login')->with('status', 'Vous vous venez de vous déconnecter!');
    }
    
}
   