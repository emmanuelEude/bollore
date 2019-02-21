<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medecin;
use App\User;
use Validator, DB, Hash, Mail;


class MedecinController extends Controller
{
    public function store(Request $request){

        $user = User::create(['name' => $request->name, 'email' => $request->email, 'password' => Hash::make($request->password),'token'=>str_random(30),'role'=>'medecin']);
        $medecin=Medecin::create([
            'nom'=>$request->name,
            'qualification'=>$request->qualification,
            'NOD'=>$request->NOD,
            'tel'=>$request->tel,
            'adresse'=>$request->adresse,
            'email'=>$request->email,
            'departement'=>$request->departement,
            'user_id'=>$user->id
        ]);
        $medecin=Medecin::with('user')->find($medecin->id);

        return response()->json(['success' => true, 'data'=> [ 'medecin' => $medecin ]], 200);
    }

    public function update(Request $request,Medecin $medecin){

        $medecin->update([
            'nom'=>$request->name,
            'qualification'=>$request->qualification,
            'NOD'=>$request->NOD,
            'tel'=>$request->tel,
            'adresse'=>$request->adresse,
            'email'=>$request->email,
            'departement'=>$request->departement,
            'user_id'=>$user->id
        ]);
        $medecin=Medecin::with('user')->find($medecin->id);

        return response()->json(['success' => true, 'data'=> [ 'medecin' => $medecin ]], 200);
    }
    public function update_compte(Request $request,User $user){

     
        $user->update(['email' => $request->email, 'password' => Hash::make($request->password)]);
        $medecin=Medecin::with('user')->where('user_id',$user->id)->first();

        return response()->json(['success' => true, 'data'=> [ 'medecin' => $medecin ]], 200);
    }
}
