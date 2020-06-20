<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index()
    {
        $placasmae = DB::table('placamae')->get();
        $placasvideo = DB::table('placavideo')->get();
        $coolers = DB::table('cooler')->get();
        $fontes = DB::table('fonte')->get();
        $gabinetes = DB::table('gabinete')->get();
        $processadores = DB::table('processador')->get();
        $rams = DB::table('ram')->get();
        $roms = DB::table('rom')->get();

        return view('layouts.body', [
                                        'placasmae' => $placasmae, 
                                        'placasvideo' => $placasvideo,
                                        'coolers' => $coolers,
                                        'fontes' => $fontes,
                                        'gabinetes' => $gabinetes,
                                        'processadores' => $processadores,
                                        'rams' => $rams,
                                        'roms' => $roms
                                    ]);
    }
}
