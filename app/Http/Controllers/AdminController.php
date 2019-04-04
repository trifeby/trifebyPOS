<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use App\Toko as T;
use App\User as U;
use App\Produk as P;
use App\Persen as Per;
use App\Stokppn as Sp;
use App\Kategori as K;
use App\Curr as C;
use App\Unit as Un;
use App\Bahan as B;
use App\TransaksiSementara as Ts;
use App\TransaksiBeneran as Tb;
use PDF;

class AdminController extends Controller
{

	function mainmenu() {
		return view('mainmenu');
	}
	function alltoko(){
		$data['tokos'] = T::all();
		return view('master/toko.all', $data);
	}

	function savetoko(Request $r){
		$new = new T;
		$new->namainstansi = $r->input('nama');
		$new->telp = $r->input('telepon');
		$new->kodepos = $r->input('kodepos');
		$new->deskripsi = $r->input('deskripsi');
		$new->alamat = $r->input('alamat');

		$new->save();
		return redirect()->route('toko.all');
	}

	function edittoko($id){
		$data['tokos'] = T::all();
		return view('master/toko.edit', $data);
	}

	function updatetoko(Request $r){
		$edit = 	T::find($r->input('id'));
		
		$edit->namainstansi = $r->input('nama');
		$edit->telp = $r->input('telepon');
		$edit->kodepos = $r->input('kodepos');
		$edit->deskripsi = $r->input('deskripsi');
		$edit->alamat = $r->input('alamat');

		$edit->save();
		return redirect()->route('toko.all');
	}


	function deletetoko($id){
		$toko = T::find($id);
		if (isset($toko)) {
			$toko->delete();
		}else{
			echo "ada kesalahan !";
		}
		return redirect()->route('toko.all');
	}

	function alluser(){
		$data['users'] = U::all();
		$data['no'] = 1;

		return view('master/user.all', $data);
	}

	function deleteuser($id){
		$user = U::find($id);
		if (isset($user)) {
			$user->delete();
		}else{
			echo "ada kesalahann !";
		}
		return redirect()->route('user.all');
	}

	function saveuser(Request $r){
		$new = new U;
		$new->name = $r->input('nama');
		$new->email = $r->input('email');
		$new->password = Hash::make($r->input('password'));

		$new->save();
		return redirect()->route('user.all');
	}

	function indexinventory(){
		return view('inventory.index');
	}

	function allproduk() {
		$url = basename($_SERVER['REQUEST_URI']);
		// $a = P::where('jumlah', '0')->count();
		// dd($a);
		$data['no'] = 1;
		if($url == "tersedia"){
			$data['kategoris'] = K::all();
			$data['produks'] = P::where('jumlah', '>', '1')->get();
			return view('inventory/produk.all', $data);
		}elseif($url == "habis"){
			$data['produks'] = P::where('jumlah', '<', '1')->get();
			$data['kategoris'] = K::all();
			return view('inventory/produk.all', $data);
		}
	}

	function saveproduk(Request $r){
		$panjang = 10;
		$randomString = substr(str_shuffle("0123456789"), 0, $panjang);
		$new = new P;
		$new->kode = "Prd-".str_random(7);
		$new->barcode = $randomString;
		$new->nama = $r->input('nama');
		$new->kategori = $r->input('kategori');
		$new->jumlah = $r->input('jumlah');
		$new->unit = $r->input('unit');
		$new->hargajual = $r->input('hargajual');
		$new->hargabeli = $r->input('hargabeli');

		$new->save();
		return redirect()->route('produk.all');
	}

	function deleteproduk($id){
		$produk = P::find($id);
		if (isset($produk)) {
			$produk->delete();
		}else{
			echo "ada kesalahann !";
		}
		return redirect()->route('produk.all');
	}

	function allkategori(){
		$data['kategoris'] = K::all();
		return view('inventory/config/kategori.all', $data);
	}

	function savekategori(Request $r){
		$new = new K;
		$new->nama = $r->input('nama');
		$new->save();
		return redirect()->route('kategori.all');
	}

	function deletekategori($id){
		$kategori = K::find($id);
		if (isset($kategori)) {
			$kategori->delete();
		}else{
			echo "ada kesalahan !";
		}
		return back();
	}


	function allcurr(){
		$data['currs'] = C::all();
		return view('inventory/config/curr.all', $data);
	}

	function savecurr(Request $r){
		$new = new C;
		$new->nama = $r->input('nama');
		$new->save();
		return redirect()->route('curr.all');
	}

	function deletecurr($id){
		$curr = C::find($id);
		if (isset($curr)) {
			$curr->delete();
		}else{
			echo "ada kesalahan !";
		}
		return back();
	}

	function allpersen(){
		$data['persens'] = Per::all();
		return view('inventory/config/persen.all', $data);
	}

	function savepersen(Request $r){
		$new = new Per;
		$new->nama = $r->input('nama');
		$new->save();
		return redirect()->route('persen.all');
	}

	function deletepersen($id){
		$persen = Per::find($id);
		if (isset($persen)) {
			$persen->delete();
		}else{
			echo "ada kesalahan !";
		}
		return back();
	}

	function allstokppn(){
		$data['stokppns'] = Sp::all();
		return view('inventory/config/stokppn.all', $data);
	}

	function savestokppn(Request $r){
		$new = new Sp;
		$new->nama = $r->input('nama');
		$new->save();
		return redirect()->route('stokppn.all');
	}

	function deletestokppn($id){
		$stokppn = Sp::find($id);
		if (isset($stokppn)) {
			$stokppn->delete();
		}else{
			echo "ada kesalahan !";
		}
		return back();
	}

	function allunit(){
		$data['units'] = Un::all();
		return view('inventory/config/unit.all', $data);
	}

	function saveunit(Request $r){
		$new = new Un;
		$new->nama = $r->input('nama');
		$new->save();
		return redirect()->route('unit.all');
	}

	function deleteunit($id){
		$unit = Un::find($id);
		if (isset($unit)) {
			$unit->delete();
		}else{
			echo "ada kesalahan !";
		}
		return back();
	}

	function allbahan(){
		$data['units'] = Un::all();
		$data['bahans'] = B::all();
		return view('inventory/config/bahan.all', $data);
	}

	function savebahan(Request $r){
		$new = new B;
		$new->nama = $r->input('nama');
		$new->unit = $r->input('unit');
		$new->save();
		return redirect()->route('bahan.all');
	}

	function deletebahan($id){
		$bahan = B::find($id);
		if (isset($bahan)) {
			$bahan->delete();
		}else{
			echo "ada kesalahan !";
		}
		return back();
	}

	function indexpaymentsementara() {
		$data['produks'] = P::all();
		$data['trans'] = Ts::all();
		$a = Ts::all();
		$sum = 0;
		foreach ($a as $key => $value) {
			$sum = $sum + ($value->harga * $value->jumlah);
		}
		$data['datatotal'] = $sum;
		return view('pos.index', $data);
	}

	function paymentsementarapos(Request $r){
		$new = new Ts;
		if (Ts::where('nama', $r->input('nama'))->exists()) {
			$a = Ts::where('nama', $r->input('nama'))->first();
			$a->jumlah = $a->jumlah + 1;
			$a->save();
			return back();
		}
		$harga = P::where('nama', $r->input('nama'))->value('hargajual');
		$unit = P::where('nama', $r->input('nama'))->value('unit');
		$new->nama = $r->input('nama');
		$new->harga = $harga;
		$new->unit = $unit;
		$new->jumlah = "1";

		$new->save();
		return back();
	}

	function transaksi(Request $r){
		$transaksi = Ts::all();
		$transaksib['pos'] = Tb::all();
		$kodetransaksi = uniqid(10);
		foreach ($transaksi as $key => $value) {
			$barang = P::where('nama', $value->nama)->first();
			$barang->jumlah = $barang->jumlah - $value->jumlah;
			$transaksibeneran = new Tb;
			$transaksibeneran->kodetransaksi = "Pos-".$kodetransaksi;
			$transaksibeneran->nama = $value->nama;
			$transaksibeneran->jumlah = $value->jumlah;
			$transaksibeneran->unit = $value->unit;
			$transaksibeneran->harga = $value->harga;
			$transaksibeneran->hargatotal = $r->input('hargatotal');
			
			$barang->save();
			$transaksibeneran->save();
		}
		Ts::truncate();

		$pdf = PDF::loadView('pos.pdf', $transaksib);
		return $pdf->download('transaksi.pdf');
	}

	function deletepaymentsementarapos($id){
		$transsaksisementara = Ts::find($id);
		if (isset($transsaksisementara)) {
			$transsaksisementara->delete();
		}else{
			echo "ada kesalahan !";
		}
		return back();
	}

	function deletepaymentpos($id){
		$transaksibeneran = Tb::find($id);
		if (isset($transaksibeneran)) {
			$transaksibeneran->delete();
		}else{
			echo "ada kesalahan !";
		}
		return back();
	}

	function deletesemuapaymentpos(){
		Tb::truncate();
		return back();
	}

	function indexpos(){
		$data['pos'] = Tb::all();
		return view('pos.all', $data);
	}

	function barangmasuk(){
		$data['produks'] = P::all();
		return view('laporan.barangmasuk', $data);
	}

	function barangkeluar(){
		$data['produks'] = Tb::all();
		return view('laporan.barangkeluar', $data);
	}
}
