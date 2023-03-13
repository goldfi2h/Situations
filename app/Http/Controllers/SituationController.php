<?php

namespace App\Http\Controllers;

use App\Models\Situation;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SituationController extends Controller
{
    public static function all(){
        return Situation::all();
    }
    
    public static function findme()
    {
        $situations=Situation::all();
        
        $a = 0;
        foreach($situations as $situation)
        {
            $a=$a+1;
        }
        $a=$a+1;
        $rand= rand(1,$a);
        $situationone=Situation::find($rand);
        return $situationone;
    }
    public static function findme4()
    {
        
    }

    public static function newID()
    {
        $situations=Situation::all();
        
        $a = 0;
        foreach($situations as $situation)
        {
            $a=$a+1;
        }
        $a=$a+1;
        $rand= rand(1,$a);
        return $rand;
    }

    public static function findentry($situation)
    {
        $situations=Situation::all();
        $theentry = $situation->entries()->get();
        return $theentry;
    }
    
}
