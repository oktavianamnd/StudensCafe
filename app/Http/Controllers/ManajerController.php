<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manajer;

class ManajerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manajer = Manajer::latest()->paginate(15);

        return view('manajer.manajer', compact('manajer'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manajer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([

            'nama_menu' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'ketersediaan' => 'required'
        ]);

        Manajer::create($request->all());

        return redirect()->route('manajer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Manajer $manajer)
    {
        return view('manajer.edit', compact('manajer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manajer $manajer)
    {
        $validateData = $request->validate([

            'nama_menu' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'ketersediaan' => 'required'
        ]);
        
        $manajer->update($validateData);

        return redirect()->route('manajer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manajer $manajer)
    {
        $manajer->delete();
     
        return redirect()->route('manajer.index');
    }
}
