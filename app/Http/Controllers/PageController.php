<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    //
    public function top(Request $request)
    {
        return view('top');
    }
    public function headline(Request $request)
    {
        $list = Game::all();
        return view('headline', ['list' => $list]);
    }
     public function getGame(Request $request)
    {
        // Gameデータ取得
        $list = Game::all();
        return view('game', ['list' => $list]);        
    }
    public function postGame(Request $request)
    {
        // POSTでGameデータの登録
        $g = new Game(); 
        $g->game_date = $request->game_date;
        $g->time = $request->time;
        $g->place = $request->place;
        $g->home_team = $request->home_team;        
        $g->home_score = $request->home_score;        
        $g->away_team = $request->away_team;        
        $g->away_score = $request->away_score;
        //$this->validate($request, [
        //    'image' => 'required|image|max:3000',
        // ]);
        //if ($request->file('image')->isValid()) {
            // S3にアップロード
            $path = $request->image->store('soccer', 's3');
            Storage::disk('s3')->setVisibility($path, 'public');
            $url = Storage::disk('s3')->url($path);

            // パスをDBに保存
            $g->image_path = $url;
            

            
       // }
        $g->save();
        // データ取得
        $list = Game::all();
        return view('game', ['list' => $list]);
    }
    public function deleteGame(Request $request)
    {
        // Game削除
        if (isset($request->id)) {
            $g = Game::where('id', '=', $request->id)->first();        
            $g->delete();
        }
        // Gameデータ取得
        $list = Game::all();
        return view('game', ['list' => $list]);
    }
}
