<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Traveller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(auth()->user());
        $data = Traveller::get();
        return view('listRecord', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'emailaddress' => ['required', 'email', 'max:180'],
            'username' => ['required', 'unique:travellers,username', 'max:180'],
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
            'clg_id' => ['required'],
            'password' => ['required'],
            'cfrm_password' => ['required', 'same:password']
        ]);

        $data = new Traveller();
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

        $getImage = $request->file('clg_id');
        $renameImage = time() . '.' . $getImage->getClientOriginalExtension();
        $destination = public_path('college_id');
        $getImage->move($destination, $renameImage);

        $data->college_id_card = $renameImage;
        $data->passedout = $request->passedout;
        $data->password = Hash::make($request->password);
        $data->save();
        // Traveller::auth()->attempt([
        //     'username' => $request->username,
        //     'password' => Hash::make($request->password),
        // ]);
        return redirect()->route('form.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Traveller::where('id',$id)->delete();
        return redirect()->route('form.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Traveller::where('id',$id)->first();
        // dd($data);
        return view('editRecord', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
