<?php

namespace App\Http\Controllers;

use App\Models\Setlist;
use Illuminate\Http\Request;

class SetlistController extends Controller
{
    //
    public function showCreateForm()
    {
        return view('setlists/create');
    }

    public function create(Request $request)
{
    // セットリストモデルのインスタンスを作成する
    $setlist = new Setlist();
    // タイトルに入力値を代入する
    $setlist->title = $request->title;
    // インスタンスの状態をデータベースに書き込む
    $setlist->save();

    return redirect()->route('songs.index', [
        'id' => $setlist->id,
    ]);
}

}
