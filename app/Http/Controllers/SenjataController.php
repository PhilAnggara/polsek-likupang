<?php

namespace App\Http\Controllers;

use App\Models\Senjata;
use App\Http\Requests\SenjataRequest;
use Illuminate\Http\Request;

class SenjataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Senjata::all();
        
        return view('pages.senjata', [
            'items' => $items
        ]);
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
    public function store(SenjataRequest $request)
    {
        $data = $request->all();

        Senjata::create($data);
        return redirect()->route('senjata.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SenjataRequest $request, $id)
    {
        $data = $request->all();

        $item = Senjata::findOrFail($id);

        $item->update($data);

        return redirect()->route('senjata.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Senjata::findOrFail($id);
        $item->delete();

        return redirect()->route('senjata.index');
    }
}
