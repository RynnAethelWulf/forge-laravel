<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\flights;

class company extends Controller
{
    public function company(){

     $data = flights::all();
        return view ('compan')->with(flights::all());
    }
}
