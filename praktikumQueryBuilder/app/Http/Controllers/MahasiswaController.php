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

    public function update(){
        $result = DB::table('mahasiswas')
        ->where('nama','sarikaya')
        ->update(
            [
                'tanggal_lahir'=>'2022-02-03',
                'ipk'=>3.5,
                'updated_at'=>now(),
            ]
            );
            dump($result);
    }

    public function updateWhere(){
        $result=DB::table('mahasiswas')
        ->where('ipk','>',3)
        ->where('nama','<>','alex')
        ->update(
            [
                'tanggal_lahir'=>'1984-09-09',
                'updated_at'=>now(),
            ]
            );
            dump($result);
    }

    public function updateOrInsert(){
        $result= DB::table('mahasiswas')->updateOrInsert(
            // array pertama adalah kondisi yg dicari
            [
                'nim'=>'1123131',
            ],


            // array kedua adalah kondisi yang akan diupdate
            [
                'nama'=>'andini putri',
                'tanggal_lahir'=>'1985-02-09',
                'ipk'=> 3,
                'created_at'=>now(),
                'updated_at'=>now(),
            ]
            );
            dump($result);
    }
  

    public function delete(){
        $result=DB::table('mahasiswas')
        ->where('ipk','>=',3.4)
        ->delete();

        dump($result);
    }

    public function get(){
        $result=DB::table('mahasiswas')->get();
        dump($result);
    }

    public function getTampil(){
        $result=DB::table('mahasiswas')->get();
        // dump($result);
        echo($result[0]->id).'<br>';
        echo($result[0]->nim).'<br>';
        echo($result[0]->nama).'<br>';
        echo($result[0]->tanggal_lahir).'<br>';
        echo($result[0]->ipk).'<br>';
    }

    public function getView(){
        $result=DB::table('mahasiswas')->get();
        return view('tampil-mahasiswa',['student'=>$result]);
    }

    public function getWhere(){
        $result=DB::table('mahasiswas')
        ->where('ipk','>',2.9)
        ->orderBy('nama','asc')
        ->get();

        return view('tampil-mahasiswa',['student'=>$result]);
    }

    public function select(){
        $result=DB::table('mahasiswas')
        ->select('nim as no_induk_mahasiswa','nama as nama_mahasiswa')
        ->get();

        dump($result);
    }

    public function take(){
        $result=DB::table('mahasiswas')
        ->orderBy('nama','asc')->skip(1)->take(3)->get();

        return view('tampil-mahasiswa',['student'=>$result]);
    }
        // Perintah DB::table('mahasiswas')->orderBy('nama', 'asc')->skip(1)->take(2)->get()
        // bisa dibaca: 'Urutkan isi tabel mahasiswas berdasarkan nama, lewatkan 1 baris pertama dan 
        // ambil 2 baris berikutnya'.

    
    public function first(){
        $result=DB::table('mahasiswas')
        ->where('nama','andini putri')->first();

        // dump($result);

        // output berupa object bukan array
        // return view('tampil-mahasiswa',['student'=>$result]);

        //output adalah array karena object ($result) dibungkus dalam array
        return view('tampil-mahasiswa',['student'=>[$result]]);
    }
        // variabel $result berisi object, bukan collection. Inilah perbedaan mendasar antara 
        // get() dengan first().


    public function find(){
        $result=DB::table('mahasiswas')->find(5);
        return view ('tampil-mahasiswa',['student'=>[$result]]);
    }

    public function raw(){
        $result=DB::table('mahasiswas')
        ->selectRaw('count(*) as total_mahasiswa')
        ->get();

        echo($result[0]->total_mahasiswa).'<br>'; 
        // karena diakses menggunakan method get(), hasilnya berupa collection. 
        // Dengan demikian cara mengakses nilainya adalah dari $result[0]->total_mahasiswa.
    }
}
