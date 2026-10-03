<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {

    //tulis disini
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {

    //tulis disini
    }

    /**1
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {

    //tulis disini
    }

    /**
     * Display the specified resource.
     */
    public function show(String $param1) {

        if($param1 == 'detail'){

        return view('halaman-mahasiswa-detail');
        }else if ($param1 == 'profil'){
            
            return view('halaman-mahasiswa-profil');

        }
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {

    //tulis disini
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {

    //tulis disini
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {

    //tulis disini
    }
}
