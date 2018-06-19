<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class entryController extends Controller
{
    //
    
    public static function showEnterForm( $agency = NULL ){
        return view('enter')->with(compact('agency'));
    }
    
    public static function postProfile( $agency = NULL ){
        $params = request()->all(['first_name', 'last_name', 'email']);
        $_params = (object) $params;
        $user = \App\User::updateOrCreate([
                                    "email"         => $_params->email
                                ],
                                [
                                    "first_name"    => $_params->first_name,
                                    "last_name"     => $_params->last_name
                                ]);
        if($user){
            return view('fill-picks' )->with(compact( ['params', 'agency'] ));
        }
    }
    
    public static function postEntry( $agency = NULL ){
        
        $params = request()->all(['result_1', 'result_2', 'prop_1_1', 'prop_1_2', 'prop_2_1', 'prop_2_2', 'user']);
        $user  = \App\User::where("email", $params['user'])->first();
        $picks_encoded = json_encode($params);
        $entry = \App\Entry::updateOrCreate([
                                                "user_id" => $user->id
                                            ],
                                            [
                                                "selection" => $picks_encoded
                                            ]);
        if($entry){
            return view('thanks')->with(compact(['params','user']));
        }
    }
    
    public function showResults(){
    
    }
    
    public function fetchResults(){
    
    }
}