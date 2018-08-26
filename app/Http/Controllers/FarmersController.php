<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farmer;
use App\Detail;

class FarmersController extends Controller
{
    public function addFarmer(Request $request)
    {
        $farmer = new Farmer;
        $farmer->first = $request->first;
        $farmer->second = $request->second;
        $farmer->email = $request->email;
        $farmer->number = $request->number;
        $farmer->save();
        return view('home');

    }

    public function getFarmer()
    {
        $farmers = Farmer::all();
        return view('pages.getFarmer', compact('farmers'));

    }

    public function addDetails(Request $request)
    {
        $detail = new Detail;
        $detail->first = $request->first;
        $detail->second = $request->second;
        $detail->email = $request->email;
        $detail->password = $request->password;
        $detail->gender = $request->gender;
        $detail->colors = $request->colors;
        $detail->save();
        return view('home');
    }

    public function getDetails()
    {
        $details = Detail::all();
        return view('pages.getDetails', compact('details'));
    }

    /*update record*/
    public function farmer($id){
        $farmer=Farmer::where('id',$id)->first();
        return view('pages.updateFarmer',compact('farmer'));

    }

    /*update record*/
    public function update(Request $request){
        $id=$request->id;

        $farmer=Farmer::find($id);
        $farmer->first=$request->first;
        $farmer->second=$request->second;
        $farmer->email=$request->email;
        $farmer->number=$request->number;
        $farmer->save();

        return redirect()->back();
    }

    /*update details. display farmer */

    public function updateDetails($id){
        $detail=Detail::where('id',$id)->first();
        return view('pages.updateDetails',compact('detail')) ;

    }

    public function updateDetail(Request $request){
        $id=$request->id;

        $detail=Detail::find($id);
        $detail->first=$request->first;
        $detail->second=$request->second;
        $detail->email=$request->email;

        $detail->save();

        return redirect()->back();
    }
}
