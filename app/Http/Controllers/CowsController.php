<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cow;
class CowsController extends Controller
{
    public function addCow(Request $request){
        $cow=new Cow;
        $cow->name=$request->name;
        $cow->dob=$request->dob;
        $cow->save();
        return view('pages.addCow');

    }


    public function getCows()
    {
        $cows = Cow::all();
        return view('pages.getCows',compact('cows'));
    }

    /*update cow*/
    public function cow($id){
        $cow=Cow::where('id', $id)->first();

        return view('pages.updateCow',compact('cow'));
    }

    /*update cow details*/

    public function updateCow(Request $request){
        $id=$request->id;

        $cow=Cow::find($id);
        $cow->name=$request->name;
        $cow->dob=$request->dob;
        $cow->save();

        return redirect()->back();
    }

}
