<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = data::all();
        return view('Data.view',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Data.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'Tlp'=> 'required|size:11',
            'email'=>'required',
            'Alamat'=>'required',
       ]);
        data::create($request->all());
        return redirect('/data')->with('status', 'Data Berhasil Ditambahkan!!!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        return view('Data.detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        return view('Data.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        $request->validate([
            'nama'=>'required',
            'Tlp'=> 'required|size:11',
            'email'=>'required',
            'Alamat'=>'required',
       ]);
       
        data::where('id',$data->id)
           ->update([
               'nama'=>$request->nama,
               'Tlp'=>$request->Tlp,
               'email'=>$request->email,
               'Alamat'=>$request->Alamat
           ]);
           return redirect('/data')->with('status', 'Data Berhasil Di ubah!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        data::destroy($data->id);
         return redirect ('/data')->with('status', 'Data Berhasil Di Hapus!!!');;
    }
}
