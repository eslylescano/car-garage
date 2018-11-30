<?php

namespace App\Http\Controllers;

use App\Service;
use App\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $services = User::find(1)->services;
        return $services;


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "hello from create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $service = new Service;
        $service->name=$request->input('name');
        $service->image=$request->input('image');
        $service->user_id=1;
        $service->description=$request->input('description');
        $service->save();
        return $service;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
        return "hello from show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
        return "hello from edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $service = Service::find($request->input('id'));
        $service->name=$request->input('name');
        $service->image=$request->input('image');
        $service->user_id=$request->input('user_id');
        $service->description=$request->input('description');
        $service->save();
        return $service;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $service = Service::find($id);
        $service->delete();
        return response()->json(['message' => 'Service deleted']);
    }
}
