@extends('layout')
@section('content')


@include('header')

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-lg-9">
      <h2>試合速報</h2>
      @foreach($list as $val)
    
       <p>{{$val->home_team}} {{$val->home_score}} - {{$val->away_score}} {{$val->away_team}}</p>
    
    @endforeach
      <p>G大阪　2-2 名古屋</p>
       <IMG SRC="{{ secure_asset('images/Jleague1.jpg') }}" class="">
      <p>札幌　5-2 湘南</p>
       <IMG SRC="{{ secure_asset('images/Jleague5.jpg') }}" class="">
      <p>松本　2-2 広島</p>
       <IMG SRC="{{ secure_asset('images/Jleague6.jpg') }}" class="">
      <p>神戸　0-2　横浜FM</p>
       <IMG SRC="{{ secure_asset('images/Jleague12.jpg') }}" class="">
      <p>鹿島　2-1 鳥栖</p>
       <IMG SRC="{{ secure_asset('images/Jleague7.jpg') }}" class="">
      <p>清水　0-2FC東京</p>
       <IMG SRC="{{ secure_asset('images/Jleague8.jpg') }}" class="">
      <p>磐田　1-3 浦和</p>
       <IMG SRC="{{ secure_asset('images/Jleague9.jpg') }}" class="">
      <p>C大阪　0-0 仙台</p>
       <IMG SRC="{{ secure_asset('images/Jleague10.jpg') }}" class="">
      <p>川崎F　3-1 大分</p>
        <IMG SRC="{{ secure_asset('images/Jleague11.jpg') }}" class="">
    </div>
    
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
   
</div>
@endsection


