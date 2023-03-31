<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    private static function getData(){
        return[
            ['id'=>1, 'name' => "S-Works Venge Di2-Sagan Collection", 'brand' =>'Specialized', 'price'=>'14,551,040원'],
            ['id'=>2, 'name' => "S-Works Tarmac SL7", 'brand' =>'Specialized', 'price'=>'18,738,901원'],
            ['id'=>3, 'name' => "Pinarello Dogma F12 Disk", 'brand' =>'Pinarello', 'price'=>'17,035,364원'],
            ['id'=>1, 'name' => "BMC Teammachine SLR 01 Disc", 'brand' =>'BMC', 'price'=>'20,584,399원'],
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //GET
        return view('bikes.index', [
            'bikes' => self::getData(),
            'userInput' => '<script>alert("hello")</script>'
        ]);
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
        //
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
