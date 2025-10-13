<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data['nama']       = $request->nama;
        $data['email']      = $request->email;
        $data['pertanyaan'] = $request->pertanyaan;

        $request->validate([
            'nama'       => 'required|max:10',
            'email'      => ['required', 'email'],
            'pertanyaan' => 'required|max:300|min:8',
        ], [
            'nama.required'       => 'Nama tidak boleh kosong',
            'email.email'         => 'Email Tidak valid',
            'pertanyaan.required' => 'Pertanyaan tidak boleh kosong',
        ]);
        return redirect('/home')->with('info', 'Selamat, Kamu Lulus!');

        //return redirect()->route('home');
        //return redirect()->back();
        //return redirect()->away('https://pcr.ac.id');

        //return view('home-question-respon', $data);
        return redirect()->route('home')->with('info', 'Berhasil Dikirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
