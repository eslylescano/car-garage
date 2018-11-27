<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "hola";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $user = User::find($id);
        $user->name=$request->input('name');
        /*$user->last_name=$request->input('last_name');
        $user->phone=$request->input('phone');
        $user->image=$request->input('image');
        $user->country=$request->input('country');
        $user->city=$request->input('city');
        $user->address=$request->input('address');
        $user->post_code=$request->input('post_code');
        $user->facebook=$request->input('facebook');
        $user->twiter=$request->input('twiter');
        $user->youtube=$request->input('youtube');*/
        $user->save();
        return json_encode($user);
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
        return User::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $user = User::find($id);
        $user->name=$request->input('name');
        $user->last_name=$request->input('last_name');
        $user->phone=$request->input('phone');
        $user->image=$request->input('image');
        $user->country=$request->input('country');
        $user->city=$request->input('city');
        $user->address=$request->input('address');
        $user->post_code=$request->input('post_code');
        $user->facebook=$request->input('facebook');
        $user->twiter=$request->input('twiter');
        $user->youtube=$request->input('youtube');
        $user->save();
        return json_encode($user);
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
