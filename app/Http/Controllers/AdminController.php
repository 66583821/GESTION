<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Role;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

class AdminController extends Controller
{
     public function loginPage(){
        return view('admin');
     }
    public function adminStore(Request $request){
       $credentials = $request->validate([
       'email' => "Required| email",
        'password' => "Required",
       ]);
       if(Auth::attempt($credentials)&& Auth::user()->role_id ===1)
         $request->session()->regenerate();
      return redirect()->route('gerantstore');
    }
    

    public function gerantstore(){
      // $gerants=User::where('role_id',2)->get();
      $gerants=user::all();
       //   return ('listegerant');
       return view('listegerant',compact('gerants'));
  
    }
    public function Ajout(){
      return view('Ajout');
    }
    public function AjoutTraitement(Request $request)
    {
        $util = new User();
        $util->nom = $request->input('name');
        $util->prenom = $request->input('prenom');
        $util->email = $request->input('email');
        $util->password = $request->input('password');
        $util->role_id = 1;
         $util->password = bcrypt('12345678');
        

        $util->save();
        
        $util = Role::select('id')->where('libele', 'gerant')->first();
        // $util->roles()->attach($util);
        // $util->role = 'gerant';
        $util->update();
        if ($util) {
            return redirect('gerantstore')->with('status', );
            // return back()->with('ok', 'enregistré avec succes.');
        } else {
            return back()->with('non_ok', "Une erreur s'est produite et l'enregistrement à échoué.");
        }
        
    }
    public function listeproduit(){
      $produits =Produit::all();
      return view('listeproduit',compact("produits"));
    }

}
