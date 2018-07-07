<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Good;

class GoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $good = new Good;

        $allGoods = $good::all();

        return view('dashboard.good_index')->with('allGoods', $allGoods);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create');
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
            'good_name' => 'required|string|max:255',
            'stock' => 'required'
        ]);
        
        $good = new Good;
        
        $good->good_name = $request->good_name;
        $good->stock = $request->stock;

        $good->save();

        return redirect()->route('goods.index');
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
        $good = new Good;

        $oldGood = $good::where('id', $id)->first();

        return view('dashboard.edit')->with('good', $oldGood);
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
        $updatedGood = $request->validate([
            'good_name' => 'required|string|max:255',
            'stock' => 'required'
        ]);

        $good = new Good;

        $updateGood = $good::where('id', $id)->update($updatedGood);

        return redirect()->route('goods.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $good = new Good;

        $deleteGood = $good::find($id);

        $deleteGood->delete();

        return redirect()->route('goods.index');
    }
}
