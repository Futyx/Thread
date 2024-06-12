<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $findAdmin = Admin::where('email', $request->email)->first();

        
        $checkAdminPass = \Hash::check($request->password, $findAdmin->password);


        if ($checkAdminPass) {
             echo 'hiiii Admin :' . $findAdmin->name;
            \Auth::guard('admin')->login($findAdmin, true);
             echo auth('admin')->user()->email;
             
         } else {
             echo 'wrong pass ';
         }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('admin.profile');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
