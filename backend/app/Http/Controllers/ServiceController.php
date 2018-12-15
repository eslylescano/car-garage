<?php

namespace App\Http\Controllers;

use App\Service;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $requestType=$request->input('type');
        $userId=1;

        if($requestType==1){
            // return DB::table('services')
            // ->where('user_id',$userId)
            // ->join('data_services', 'services.data_service_id', '=', 'data_services.id')
            // ->get();
            return DB::select('select s.id,ds.name,ds.image,s.description from services as s inner join data_services as ds on s.data_service_id=ds.id');
        }

        if($requestType==2){
            return DB::select('select ds.id,ds.name,ds.image from data_services as ds where ds.id NOT IN (select s.data_service_id from services as s where user_id='.$userId.')');
        }



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
        $service->data_service_id=$request->input('data_service_id');
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
