<?php

namespace App\Http\Controllers;

use App\agenda;
use Illuminate\Http\Request;

class AgendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $agendas = agenda::all();
        return view('agendas.index', compact('agendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agendas.create');
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
            'nama_agenda' => 'required',
            'tanggal_mulai' => 'required',
            'durasi' => 'required',
            'lokasi' => 'required'
        ]);
        $agenda = new agenda;
        $agenda->nama_agenda = $request->nama_agenda;
        $agenda->tanggal_mulai = $request->tanggal_mulai;
        $agenda->durasi = $request->durasi;
        $agenda->lokasi = $request->lokasi;
        $agenda->status = $request->status;

        $agenda->save();

        return redirect('/agendas')->with('status', 'Data Agenda Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(agenda $agenda)
    {
        return view('agendas.show', compact('agenda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(agenda $agenda)
    {
       return view('agendas.edit', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, agenda $agenda)
    {
        $request->validate([
            'nama_agenda' => 'required',
            'tanggal_mulai' => 'required',
            'durasi' => 'required',
            'lokasi' => 'required'
        ]);

        $agenda::where('id', $agenda->id)
                ->update([
                    'nama_agenda' => $request->nama_agenda,
                    'tanggal_mulai' => $request->tanggal_mulai,
                    'durasi' => $request->durasi,
                    'lokasi' => $request->lokasi,
                    'status' => $request->status
                ]);

                return redirect('/agendas')->with('status', 'Data Agenda Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(agenda $agenda)
    {
        //
    }

    public function delete($id)
    {
       $agenda = \App\agenda::find($id);
       $agenda->delete($agenda);

       return redirect('/agendas')->with('status', 'Data Agenda Berhasil Dihapus');
    }
}
