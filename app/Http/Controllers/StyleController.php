<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StyleController extends Controller
{
    public function chgCss(Request $request)
    {
        $style = $request->slStyle;//input('slStyle');

        $cup = DB::table('cups')->where('id', '=', 1)->get();
        $match = DB::table('matches')->where('id', '=', 1)->get();
        $player = DB::table('players')->where('id', '=', 1)->get();

        return view('home', compact('cup','match','player','style'));

        //
    }
}
