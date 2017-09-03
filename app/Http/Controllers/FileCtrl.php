<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Storage;
class FileCtrl extends Controller
{
     public function index()
     {
          return view('FileUpload');
     }

     public function upload(Request $Request)
     {
          if ($Request->hasFile('file')) {
            $extension=$Request->file('file')->extension();
            if ($this->isValidExtension($extension)) {
                 $path=Storage::putFile('public/uploads',$Request->file);
                  return redirect('/')->with('message','file is Successfully Uplaoded !'.$path);

            }
            else {
               return redirect('/')->with('message','choose a  only image file');
            }

          }
          else {
             return redirect('/')->with('message','choose a file');
          }
     }

     public function images()
     {
        $images=Storage::files('public\uploads');
      //  dd($images);
      $url=[];
      for ($i=0; $i <count($images) ; $i++) {
          $url[$i]=Storage::url($images[$i]);
      }
    //  dd($url);
       return view('display',['urls'=>$url]);
     }

     private function isValidExtension($extension)
     {
         switch ($extension) {
           case 'jpg':
               return true;
             break;
             case 'png':
                 return true;
               break;
               case 'jpeg':
                   return true;
                 break;
           default:
             return false;
             break;
         }
     }


    public function download($id)
    {
        $url='storage/uploads/'.$id;
        return response()->download($url);
    }
}
