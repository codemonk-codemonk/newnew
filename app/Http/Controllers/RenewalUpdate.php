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
use Carbon\Carbon;

class RenewalUpdate extends Controller
{
  public function renewalupdate(Request $request){





      if($request->policyplan=="One"){
          $id=$request->id;
        $users = Bikeform::find($id);
          $year =Carbon::createFromFormat('Y-m-d',$users->end);
          $date = date('Y-m-d', strtotime('+12 month', strtotime($year)));
      }
      if($request->policyplan=="Two"){
          $id=$request->id;
        $users = Bikeform::find($id);
          $year =Carbon::createFromFormat('Y-m-d',$users->end);
          $date = date('Y-m-d', strtotime('+24 month', strtotime($year)));
      }
      if($request->policyplan=="Three"){
          $id=$request->id;
        $users = Bikeform::find($id);
          $year =Carbon::createFromFormat('Y-m-d',$users->end);
          $date = date('Y-m-d', strtotime('+36 month', strtotime($year)));
      }

      $users->end=$date;
      $users->update();

  }


}
