<?php

namespace App\Http\Controllers\admin;

use App\User;
use App\Mail\RegisterMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('type','Admin')->get();
        return view('admin.user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required | min:6',
        ]);

        $user=new User();
        $user-> name = $request->name;
        $user-> email = $request->email;
        $user-> password = bcrypt($request->password);
        $user-> type = "Admin";

        $user->save();
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];
        Mail::to($request->email)->send(new RegisterMail($data));

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | unique:users,email,'.$user->id,
        ]);

        $user = User::find($user->id);
        $user-> name = $request->name;
        $user-> email = $request->email;
        if ($request->password) {
            $user-> password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'User detail edit successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        //redirect()->route('occasions.index');
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}
