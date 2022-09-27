<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //tanpa halaman view
    public function index()
    {
        return "halaman home";
    }

    //funtion array
    public function tampil ()
    {
        $arrMhs=["risa lestari","rudi","anton","joni"];
        return view('mhs')->with('mahasiswa',$arrMhs);
        // var_dump($arrMhs);
        //             die;
        // return " hallo";
    }

    // menggunakan halaman view
    public function biodata()
    {
        return view('biodata');
        }


}
