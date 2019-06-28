<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Share;

class ShareController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shares = Share::all();

        return view('shares.index', compact('shares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shares.create');
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
        'email'=> 'required',
        'no_telepon'=> 'required|integer',
        'alamat' => 'required',
        'kategori' => 'required',
        'jumlah' => 'required'
      ]);
      $share = new Share([
        'nama' => $request->get('nama'),
        'email'=> $request->get('email'),
        'no_telepon'=> $request->get('no_telepon'),
        'alamat' => $request->get('alamat'),
        'kategori' => $request->get('kategori'),
        'jumlah' => $request->get('jumlah')

      ]);
      $share->save();
      return redirect('/shares')->with('success', 'Order has been added');
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
    public function edit($id)
    {
        $share = Share::find($id);

        return view('shares.edit', compact('share'));
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
        $this->validate($request, [
            'nama'=>'required',
            'email'=> 'required',
            'no_telepon'=> 'required',
            'alamat' => 'required',
            'kategori' => 'required',
            'jumlah' => 'required'
        ]);

        $share = Share::find($id);
        $share->nama = $request->input('nama');
        $share->email = $request->input('email');
        $share->no_telepon = $request->input('no_telepon');
        $share->alamat = $request->input('alamat');
        $share->kategori = $request->input('kategori');
        $share->jumlah = $request->input('jumlah');
        $share->save();

        return redirect('/shares2')->with('success', 'Order has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $share = Share::find($id);
        $share->delete();

        return redirect('/shares')->with('success', 'Order has been deleted Successfully');
    }
}