<?php


//ByMedivh13
use Carbon\Carbon;
use  App\Member;

function formatPrice($price){
	return number_format($price,2,",",".");
}

function priceToInt($price){
	//inibuat yg ada cent nya..
	return (int) str_replace([',00','.'], '', $price);
}

function rollbackPrice($price){
	//inibuat yg ga ada cent nya..
	$oldfunction = str_replace(['.'], '', $price);
	return $oldfunction;
}

function numberdbtoview($price){
	$n = explode('.', $price);
	$n[0] = str_replace(',', '.', number_format((float)$n[0]));
	return implode(',', $n);
}

function numberviewtodb($price){
	$n = explode(',', $price);
	$n[0] = str_replace('.', '', $n[0]);
	return (float) implode('.', $n);
}

function datedbtoview($date){
	return date('d-m-Y', strtotime($date));
}

function thisday(){
	$data = Carbon::now('Asia/Jakarta')->format('Y-m-d G:i:s');
	
	return $data;
}

function justDay(){
	$data = Carbon::now('Asia/Jakarta')->format('Y-m-d');
	
	return $data;
}

function awalbulan(){
	$data = new Carbon('first day of this month', 'Asia/Jakarta');
	return $data;
}
function akhirbulan(){
	$data = new Carbon('last day of this month', 'Asia/Jakarta');
	return $data;
}

function getClient($id){
	$data = Member::find($id);
	return $data->toArray();
}
?>
