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

    public function insertSql(){
        $result = DB::insert("insert into mahasiswas(nim,nama,tanggal_lahir,ipk) values('19003031','awan ginton','1990-12-31',2.5)");
        dump($result);
    }

    public function insertTimeStamp(){
        $result = DB::insert("insert into mahasiswas(nim,nama,tanggal_lahir,ipk,created_at,updated_at) values('19003021','ginton','1991-12-31',2.4,now(),now())");
        dump($result);
    }
}
