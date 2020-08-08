<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function index() {
        $pertanyaan = DB::table('pertanyaan')->get();
    	return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create() {
    	return view('pertanyaan.create');
    }

    public function store(Request $request) {
    	//dd($request->all());
        $request->validate([
            'judul' => 'required',
            'isi'   => 'required'
        ]);

         $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]
        );

        return redirect('/pertanyaan')->with('success','Pertanyaan berhasil'); 
    }

    public function show($id) {
    	$tpertanyaan = DB::table('pertanyaan')->where('id',$id )->first();
        return view('pertanyaan.show', compact('tpertanyaan'));
    }

    public function edit($id) {
    	$tpertanyaan = DB::table('pertanyaan')->where('id',$id)->first();
        return view('pertanyaan.edit', compact('tpertanyaan'));
    }

    public function update() {
    	return view('pertanyaan.update');
    }

    public function destroy() {
    	return view('pertanyaan.destroy');
    }

}
