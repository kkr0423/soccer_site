@extends('layout')
@section('content')


@include('header')

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-lg-9">
        
       <h1>休日</h1>
    <!-- 入力フォーム -->
    <form method="POST" action="/game"> 
    {{csrf_field()}}
    
    日付: <input type="text" name="game_date"> [YYYY/MM/DD]
    <br>時間: <input type="text" name="time"> 
    <br>場所: <input type="text" name="place"> 
    <br>ホームチーム: <input type="text" name="home_team"> 
    <br>ホームスコア: <input type="text" name="home_score"> 
    <br>アウェイスコア: <input type="text" name="away_score"> 
    <br>アウェイチーム: <input type="text" name="away_team"> 

    <input type="submit"> 
    </form> 
    <!-- 試合一覧表示 -->
    <table>
    <tr>
    <th>日付</th>
    <th>時間</th>
    <th>場所</th>
    <th>ホームチーム</th>
    <th>ホームスコア</th>
    <th>アウェイスコア</th>
    <th>アウェイチーム</th>
    </tr>
    @foreach($list as $val)
    <tr>
        <td>{{$val->game_date}}</td>
        <td>{{$val->time}}</td>
        <td>{{$val->place}}</td>
        <td>{{$val->home_team}}</td>
        <td>{{$val->home_score}}</td>
        <td>{{$val->away_score}}</td>
        <td>{{$val->away_team}}</td>
    </tr>
    @endforeach
    </table>
    </div>
    
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
   
</div>
@endsection
