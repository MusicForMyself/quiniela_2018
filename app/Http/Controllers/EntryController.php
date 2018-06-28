<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class entryController extends Controller
{
    //
    
    public static function showEnterForm( $agency = NULL ){
        return view('enter')->with(compact('agency'));
    }
    
    public static function postProfile( $agency = NULL ){
        $params = request()->all(['first_name', 'last_name', 'email', 'account', 'position']);
        $_params = (object) $params;
        $user = \App\User::updateOrCreate([
                                    "email"         => $_params->email
                                ],
                                [
                                    "first_name"    => $_params->first_name,
                                    "last_name"     => $_params->last_name,
                                    "account"       => $_params->account,
                                    "position"      => $_params->position
                                ]);
        if($user){
            return view('fill-picks' )->with(compact( ['params', 'agency'] ));
        }
    }
    
    public static function postEntry( $agency = NULL ){
        
        $params = request()->all(['result_1_a', 'result_1_b', 'result_2_a', 'result_2_b', 'prop_1_1', 'prop_1_2', 'prop_1_3', 'prop_2_1', 'prop_2_2', 'prop_2_3', 'user', 'agency']);
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
    
    public static function fetchResults( $agency = NULL ){
        
        $csvExporter = new \Laracsv\Export();
        $users = User::leftJoin("entries", "users.id", "=", "entries.user_id")
                        ->where("entries.selection", "LIKE", "%{$agency}%")
                        ->get();
        foreach ( $users as $eachUser ){
            $score = 0;
            $picks = json_decode($eachUser->selection);
            // Primer partido
            if( intval($picks->result_1_a)  > intval($picks->result_1_b) )
                $score ++;
            if( intval($picks->result_1_a) === 2  && intval($picks->result_1_b) === 1 )
                $score = $score + 3;
            if( intval($picks->prop_1_1) === 19 )
                $score = $score + 5;
            if( intval($picks->prop_1_2) === 1 )
                $score = $score + 3;
            if( intval($picks->prop_1_3) === 2 )
                $score = $score + 3;
            // Segundo partido
            if( intval($picks->result_2_a) < intval($picks->result_2_b) )
                $score ++;
            if( intval($picks->result_2_a) === 0  && intval($picks->result_2_b) === 3 )
                $score = $score + 3;
            if( intval($picks->prop_2_1) === 21 )
                $score = $score + 5;
            if( intval($picks->prop_2_2) === 0 )
                $score = $score + 3;
            if( intval($picks->prop_2_3) === 3 )
                $score = $score + 3;
    
            $eachUser->score = $score;
        }
        return $csvExporter->build($users, ['email', 'first_name', 'last_name', 'score', 'created_at'])
                    ->download($agency . '-results.csv');;
    }
}
