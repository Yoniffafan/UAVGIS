<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

/**
 *
 */
class Webcontroller extends Controller
{

  public function show()
  {
    $dariDB = DB::table('data')->get();

    return view('data', ['fromDB' => $dariDB]);
  }

  public function showpeta()
  {
    $dariDB = DB::table('data')->get();

    return view('map', ['fromDB' => $dariDB]);
  }



  // public function showhome()
  // {
  //   $dariDB = DB::table('guide')->get();
  //
  //   return view('welcome', ['fromDB' => $dariDB]);
  // }
  //
  // public function showprofil($id)
  // {
  //   $hasilprofil = DB::table('guide')->where('Nomor', $id)->get();
  //   return view('profil', ['profil' => $hasilprofil]);
  // }
  //
  // public function confirm($id)
  // {
  //   $hasilconfirm = DB::table('guide')->where('Nomor', $id)->get();
  //   return view('confirm', ['confirm' => $hasilconfirm]);
  // }
  //
  // public function getSearch()
  //       {
  //           //get keywords input for search
  //           $keyword=  Input::get('q');
  //           $hasilprofil = DB::table('guide')
  //                 ->select(DB::raw("*"))
  //                  ->where('tempat', '=', $keyword)
  //                  ->get();
  //           return view('search', ['fromDB' => $dariDB]);
  //       }
}

 ?>
