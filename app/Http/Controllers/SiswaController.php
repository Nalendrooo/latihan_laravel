<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function __construct()
    {
        //isi fungsi construct
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datasiswa = Siswa::all();
        return view('index', ['siswa' => $datasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('form_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->nama;
        $data_masuk = [
            'nama' => $nama,
            'nis' => $request->nis,
            'tgl_lahir' => $request->tgl_lahir
        ];
        Siswa::create($data_masuk);


        return redirect()->route('siswa.index')->with(['suc' => 'Data ' . $nama . ' berhasil Ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::where('id', $id)->first();
        return view('profile_siswa', ['siswa' => $siswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datasiswa = Siswa::find($id);
        return view('form_ubah', ['siswa' => $datasiswa]);
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
        $nama = $request->nama;

        $siswa = Siswa::find($id);

        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->tgl_lahir = $request->tgl_lahir;
        $siswa->save();

        return redirect()->route('siswa.index')->with(['suc' => 'Data ' . $nama . ' berhasil Diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datasiswa = Siswa::find($id);
        $datasiswa->delete();

        return redirect()->route('siswa.index')->with(['suc' => 'Data berhasil Dihapus']);
    }
}
