<?php
	namespace App\Http\Controllers;
	use App\Barang;
	use DB;

	class HomeController extends Controller{
		public function getHome(){
			//tampil
			$barang = Barang::all();


			//hapus
			//$barang = Barang::destroy(1);

			//hapus berdasarkan logic 
			//$barang = Barang::where('nama','Dian')->delete();
			//dd($barang);
			


			$query = DB::table('barang')->get();
			//dd($query);
			return view("table");

		}



	}

?>