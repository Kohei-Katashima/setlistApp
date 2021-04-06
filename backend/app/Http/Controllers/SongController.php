<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setlist;
use App\Models\Song;
use App\Http\Requests\CreateSong;

class SongController extends Controller
{
    //
    public function index(int $id)
    {
        $setlists = Setlist::all();

        // 選ばれたフォルダを取得する
        $current_setlist = Setlist::find($id);

        // 選ばれたフォルダに紐づくタスクを取得する
        $songs = $current_setlist->songs()->get();

        return view('songs/index', [
            'setlists' => $setlists,
            'current_setlist_id' => $current_setlist->$id,
            'songs' => $songs,
        ]);
    }

    /**
     * GET /setlists/{id}/songs/create
     */
    public function showCreateForm(int $id)
    {
        return view('songs/create', [
            'setlist_id' => $id
        ]);
    }

    public function create(int $id, CreateSong $request)
    {
        $current_setlist = Setlist::find($id);

        $song = new Song();
        $song->band_name = $request->band_name;
        $song->title = $request->title;
        $song->time = $request->time;

        $current_setlist->songs()->save($song);

        return redirect()->route('songs.index', [
            'id' => $current_setlist->id,
        ]);
    }
}
