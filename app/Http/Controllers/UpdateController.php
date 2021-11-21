<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Traveller;

class UpdateController extends Controller
{
    public function updateRecord(Request $request){
        $validated = $request->validate([
            'mobilenumber' => ['required', 'numeric'],
            'firstname' => ['required', 'string'],
            'gender' => ['required'],
            'doorno' => ['required'],
            'streetname' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'country' => ['required'],
            'pincode' => ['required', 'numeric'],
            'degree' => ['required'],
            'branch' => ['required'],
        ]);
        dd($request);
        $data = Traveller::find($request->id);
        $data->email = $request->emailaddress;
        $data->username = $request->username;
        $data->mobile = $request->mobilenumber;
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->gender = $request->gender;
        $data->doorno = $request->doorno;
        $data->streetname = $request->streetname;
        $data->city = $request->city;
        $data->state = $request->state;
        $data->country = $request->country;
        $data->pincode = $request->pincode;
        $data->degree = $request->degree;
        $data->branch = $request->branch;
        $data->save();
        return redirect()->route('form.create');
    }
}
