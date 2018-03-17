<?php

namespace App\Http\Controllers;
use App\Barang;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function getNama($nama){

    	$barang = Barang::where('nama',$nama)->first(); //gunakan use App\Barang
    	return 'Ridwan Hidayat'.$barang->nama;

    }

    public function getAlamat(){
    	return "Majalaya";
    }


    public function getTelp(){
    	return "085x xxxx xxxx";
    }
}
