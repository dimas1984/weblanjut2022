<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        return "berhasil di proses";
    }
    // insert database menggunakan querybuilder
   
    public function insert()
    {
        $result =DB::table('mahasiswas')->insert
        (
            [
                'nim'=>'19980924',
                'nama'=>'sarimukti',
                'tanggal_lahir'=>'2001-04-09',
                'ipk'=>3.2,
                'created_at'=>now(),
                'updated_at'=>now(),
            ]
            );
            dump($result);
    }

    public function insertBanyak()
    {
        $result =DB::table('mahasiswas')->insert
        (
            [
                [
                    'nim'=>'1998090',
                    'nama'=>'sarikaya',
                    'tanggal_lahir'=>'2003-04-09',
                    'ipk'=>3.9,
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'nim'=>'1998010',
                    'nama'=>'sarimadu',
                    'tanggal_lahir'=>'2001-02-09',
                    'ipk'=>3.1,
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ]
            ]
           
            );
            dump($result);
    }
  

}
