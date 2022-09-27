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
    // insert database

    public function insertSql(){
        $result = DB::insert(
            "insert into mahasiswas(nim,nama,tanggal_lahir,ipk) values('19003031','awan ginton','1990-12-31',2.5)"
        );
        dump($result);
    }

    public function insertTimeStamp(){
        $result = DB::insert("insert into mahasiswas(nim,nama,tanggal_lahir,ipk,created_at,updated_at) values('19003021','ginton','1991-12-31',2.4,now(),now())");
        dump($result);
    }

    
    public function insertPrepared(){
        $result = DB::insert("insert into mahasiswas(nim,nama,tanggal_lahir,ipk,created_at,updated_at) values(?,?,?,?,?,?)",['12902313','dina','1999-09-12',2.7,now(),now()]);
        dump($result);
    }

    public function insertBinding(){
        $result = DB::insert("insert into mahasiswas(nim,nama,tanggal_lahir,ipk,created_at,updated_at) values(:nim,:nama,:tanggal_lahir,:ipk,:created,:updated)",['nim'=>'12902312','nama'=>'riani','tanggal_lahir'=>'2001-01-01','ipk'=>3.7,'created'=> now(),'updated'=> now()]);
        dump($result);
    }

    // update database
    public function update()
    {
        $result=DB::update('update mahasiswas set created_at = now(), updated_at = now() where nim = ?', ['12902313']);
        dump($result);
    }

    // delete database

    public function delete()
    {
        $result=DB::delete
        (
            'DELETE FROM mahasiswas WHERE nama=?',['dina']
        );
        dump($result);
    }

    // menampilkan data

    public function select()
    {
        $result=DB::select('select * from mahasiswas');
        dump($result);     
    }

    public function selectTampil()
    {
        $result=DB::select('select * from mahasiswas');
        // dump($result);     
        echo('id ='.$result[3]->id.'<br>');
        echo('nim = '.$result[3]->nim.'<br>');
        echo('nama ='.$result[3]->nama.'<br>');
        echo('tanggal lahir ='.$result[3]->tanggal_lahir.'<br>');
        echo('IPK ='.$result[3]->ipk.'<br>');
        echo('created_at ='.$result[3]->created_at.'<br>');
        echo('updated_at ='.$result[3]->updated_at.'<br>');
        echo('<hr>');
        echo('id ='.$result[1]->id.'<br>');
        echo('nim = '.$result[1]->nim.'<br>');
        echo('nama ='.$result[1]->nama.'<br>');
        echo('tanggal lahir ='.$result[1]->tanggal_lahir.'<br>');
        echo('IPK ='.$result[1]->ipk.'<br>');
        echo('created_at ='.$result[1]->created_at.'<br>');
        echo('updated_at ='.$result[1]->updated_at.'<br>');
    }

    public function selectView()
    {
        $result= DB::select('select * from mahasiswas');
        return view('tampil-mahasiswa', ['mahasiswas'=>$result]);
    }

    public function selectWhere(){
        $result=DB::select('select * from mahasiswas where ipk > ? order by nama ASC', [3]);
        return view('tampil-mahasiswa',['mahasiswas'=>$result]);
    }

    public function statement()
    {
        $result=DB::statement('TRUNCATE mahasiswas');
        return('table mahasisawas sudah kosong');
    }

}
