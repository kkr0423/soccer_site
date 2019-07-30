<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
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
        $g->save();
        // データ取得
        $list = Game::all();
        return view('game', ['list' => $list]);
    }
}
