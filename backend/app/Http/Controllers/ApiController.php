<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function sendResponse($result,$message){

        $response = [
            "success"=>true,
            "data"=>$result,
            "message"=>$message
        ];
        return response()->json($response,200);
    }
    public function sendError($error,$errorMessages=[],$code=404){

        $response = [
            "success"=>false,
            "error"=>$result,
            "errorMessages"=>$errorMessages
        ];
        return response()->json($response,$code);
    }


    public function saveImage($previousImage,$requestImage,$folder){


                if($this->endswith($requestImage,'.jpg')||$this->endswith($requestImage,'.png')){
                    return $previousImage;
                }else{

                    if($previousImage !=$folder.'noimage.jpg'){
                        unlink(public_path().$previousImage);
                    }
                    $extension='';
                    $exploded = explode(',',$requestImage);
                    $decoded = base64_decode($exploded[1]);
                    if(str_contains($exploded[0],'jpeg')){
                      $extension = 'jpg';
                    } else {
                      $extension = 'png';
                    }

                    $filename = time().'.'.$extension;
                    $path = public_path().$folder.$filename;
                    file_put_contents($path,$decoded);



                    return $folder.$filename;
                }



    }


    public function endsWith( $str, $sub ) {
        return ( substr( $str, strlen( $str ) - strlen( $sub ) ) == $sub );
    }


}
