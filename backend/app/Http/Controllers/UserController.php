<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Service;
use Illuminate\Support\Facades\DB;

class UserController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return User::find(1);

        // $directory = public_path().'/img/svg';
        // $files = scandir($directory);
        // $dataToStore = array();
        // $counter=0;
        // foreach($files as $file){
        //     if($this->endswith($file,'.svg')){
        //         $name=str_replace(".svg", "", $file);
        //         $name=str_replace("-", " ", $name);
        //         $image = "/img/svg/".$file;
        //         DB::select("insert into data_services (name,image) values('".$name."','".$image."')");

        //         $counter++;

        //     }

        // }
        // return DB::select('select * from data_services');


        // $directory = public_path().'/img/png';
        // $files = scandir($directory);
        // $dataToStore = array();
        // $counter=0;
        // foreach($files as $file){
        //     if($this->endswith($file,'.png')){
        //         $name=substr($file,3,strlen($file));
        //         $name=str_replace(".png", "", $name);
        //         $name=str_replace("-", " ", $name);
        //         $image = "/img/png/".$file;
        //         DB::select("insert into data_services (name,image) values('".$name."','".$image."')");
        //         $counter++;

        //     }

        // }
        // $data_services = DB::select("select * from data_services");
        // foreach($data_services as $data_service){
        //     DB::select("insert into services (user_id,data_service_id) values(1,'".$data_service->id."')");
        // }

        // return DB::select('select * from data_services');



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
        $user->country=$request->input('country');
        $user->city=$request->input('city');
        $user->address=$request->input('address');
        $user->post_code=$request->input('post_code');
        $user->facebook=$request->input('facebook');
        $user->twitter=$request->input('twitter');
        $user->youtube=$request->input('youtube');
        $user->photo = $this->saveImage($user->photo,$request->photo,'/photos/');
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
