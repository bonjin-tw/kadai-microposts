<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入りするアクション
     */
    public function store($id)
    {
        // 認証済みユーザ（閲覧者）が、idの投稿をお気に入りする
        \Auth::user()->favorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
    /**
     * お気に入りを削除するアクション
     */
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、idの投稿のお気に入りを削除する
        \Auth::user()->unfavorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
