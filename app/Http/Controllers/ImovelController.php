<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use LaraDev\Imovel;

class ImovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        var_dump(Imovel::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('files.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imovel = new Imovel;
        $imovel->name = $request->name;
        $imovel->price = $request->price;
        $imovel->image = $request->file('image')->store('properties');

        $imovel->save();

        echo "<img src='".Storage::url($imovel->image)."' />";

        var_dump(
            $request->file('image')->getMimeType(),
            $request->file('image')->getClientOriginalName(),
            $request->file('image')->getClientOriginalExtension(),
            $request->file('image')->getSize(),
            $request->file('image')->getErrorMessage(),
            $request->file('image')->getBasename(),
            $request->file('image')->getFileInfo(),
        );

//        var_dump($request->allFiles('image'));
//        var_dump($request);
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
