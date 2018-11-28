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
        $user->country=$request->input('country');
        $user->city=$request->input('city');
        $user->address=$request->input('address');
        $user->post_code=$request->input('post_code');
        $user->facebook=$request->input('facebook');
        $user->twitter=$request->input('twitter');
        $user->youtube=$request->input('youtube');


        $photoRequest = $request->input('photo');
             if($this->endswith($photoRequest,'.jpg')||$this->endswith($photoRequest,'.png')){
            }else{
                if($user->photo !='/photos/noimage.jpg'){
                    unlink(public_path().$user->photo);
                    }
                    $user->photo = $this->saveImage($request);
            }
        $user->save();
        return json_encode($user);
    }

    public function saveImage(Request $request){

        $extension='';
      $exploded = explode(',',$request->photo);
      $decoded = base64_decode($exploded[1]);
      if(str_contains($exploded[0],'jpeg')){
        $extension = 'jpg';
      } else {
        $extension = 'png';
      }

      $filename = time().'.'.$extension;
      $path = public_path().'/photos/'.$filename;
      file_put_contents($path,$decoded);

      return '/photos/'.$filename;
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

    public function endsWith( $str, $sub ) {
        return ( substr( $str, strlen( $str ) - strlen( $sub ) ) == $sub );
    }
}
