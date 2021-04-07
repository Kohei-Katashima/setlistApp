<?php

namespace App\Http\Controllers;

use App\Models\Setlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function index()
    {
        // // ログインユーザーを取得する
        $user = Auth::user()->setlists();


        // // ログインユーザーに紐づくフォルダを一つ取得する
        $setlist = $user->first();

        // まだ一つもフォルダを作っていなければホームページをレスポンスする
        if (is_null($setlist)) {
            return view('home');
        }

        // フォルダがあればそのフォルダのタスク一覧にリダイレクトする
        return redirect()->route('songs.index', [
            'id' => $setlist->id,
        ]);
    }
    
}
