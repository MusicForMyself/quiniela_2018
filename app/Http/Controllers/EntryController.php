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
        $user = \App\User::updateOrCreate([
                            "email" => $params->email
                        ],
                        [
                            "first_name" => $params->first_name,
                            "last_name" => $params->last_name
                        ]);
        if($user){
            return view('fill-picks', with($params));
        }
    }
    
    public static function postEntry( $agency = NULL ){
        $params = request()->all(['result_1', 'result_2', 'prop_1', 'prop_2']);
        $picks_encoded = json_encode($params);
        $user = \App\Entry::updateOrCreate([],
                                            [
                                                "first_name" => $params->first_name,
                                                "last_name" => $params->last_name
                                            ]);
        if($user){
            return view('thanks', with($params));
        }
    }
    
    public function showResults(){
    
    }
    
    public function fetchResults(){
    
    }
}
