<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Donasi;
use App\Http\Resources\DonasiResource;
use DB;
use Carbon\Carbon;
class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donasi = Donasi::groupBy('penerima_id')->get();
        $data =[];
        foreach($donasi as $key => $val){
            $sum_value = 0;
            $sum_value = Donasi::where('penerima_id',$val->penerima_id)->sum('value');
            $data[$key]['id'] = $val->id;
            $data[$key]['name'] = ucwords($val->penerima->name);
            $data[$key]['alamat'] = $val->penerima->avatar;
            $data[$key]['value'] = formatPrice($sum_value);
            $data[$key]['title'] = ucwords($val->penerima->title);
            $data[$key]['keterangan'] = $val->penerima->keterangan;
            $data[$key]['needed'] = formatPrice($val->penerima->needed);
            $waktu = Carbon::parse($val->penerima->tgl_akhir)->diffForHumans(Carbon::parse($val->penerima->created_at));
            $data[$key]['last_day'] = str_replace('setelah','lagi', $waktu);
            $data[$key]['progress'] = ((doubleval($sum_value) / doubleval($val->penerima->needed)) * 100);

        }
        return collect($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return collect($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donasi = Donasi::find($id);
        $data['penerima_id'] = $donasi->penerima->id;
        $data['title'] = ucwords($donasi->penerima->title);
        $data['avatar'] = $donasi->penerima->avatar;

        return collect($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
