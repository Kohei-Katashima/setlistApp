<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setlist;

class SongController extends Controller
{
    //
    public function index(int $id)
    {
        $setlists = Setlist::all();

        return view('songs/index', [
            'setlists' => $setlists,
            'current_setlist_id' => $id,
        ]);
    }
}
