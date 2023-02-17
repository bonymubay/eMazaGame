<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class contrologenerico extends Controller
{
    public function landing (request $request)
    {
    return view (view: 'landing');
    }

    public function genereteToken(Request $request){

       //dd('genereteToken',$request-> all());
       //verificar se o user eh administrador

       if(auth()->user()->hasRole('admin')) {

       $user= User::find(auth()->id());

       $tokenName= $request->name? $request->name: $user->name.'\'s Token';

        $token= $user-> createToken($tokenName)-> accessToken;

                 // return redirect()-> to('/admin/oauth-access-tokens');

                  return view ('displayTokens', compact('token'));
        }

        else
        dd("Erro: Usuario nao tem Permisao para gerar Token")->with(['token'=>$token]);


    }

 }
