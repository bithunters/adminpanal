<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employees;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\view;
use Illuminate\Support\serviceprovider;


class employeeController extends Controller
{

    public function store(Request $request)
    {

        $this->validate($request, [

            'email' => 'unique:employees'

        ]);


        $table = new employees();
        $table->name = $request->input('name');
        $table->email = $request->input('email');
        $table->password = bcrypt($request->input('password'));

        $table->save();
        return redirect()->back()->with('message', 'Registered successfully');

    }

    public function come(Request $request)
    {

        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            return view('employee/myhome');
        }



        return redirect()->back()->with('message', 'incorrect username/password');
    }


    public function gethome()
    {
        return view('employee/myhome');
    }

    public function show()
    {
        $leave = leaves::get();
        return view('leaves.show',['leave'=> $leave]);


    }

}
