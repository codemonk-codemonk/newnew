<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Carform;
use App\Bikeform;
use App\Mobileform;
use App\Laptopform;
use Illuminate\Support\Facades\DB;

class RenewalController extends Controller
{
    public function check(Request $request){

      if ($request->Item=='car') {
          $id=$request->id;
         $post=Carform::find($id);

      }
      if ($request->Item=='bike') {
          $id=$request->id;
         $post=Bikeform::find($id);

      }
      if ($request->Item=='mobile') {
          $id=$request->id;
         $post=Mobileform::find($id);
      }
      if ($request->Item=='laptop') {
          $id=$request->id;
         $post=Laptopform::find($id);

      }
     return view('renewalpolicy')->withPost($post);
      }
      public function Renewal(Request $request){

           $id=$request->id;
           $post=Bikeform::find($id);

          return view('renewal_bike')->withPost($post);
        }

}
