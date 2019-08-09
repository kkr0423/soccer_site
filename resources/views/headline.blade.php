@extends('layout')
@section('content')


@include('header')

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-lg-9">
      <h2>試合速報</h2>
      @foreach($list as $val)
    
       <p>{{$val->home_team}} {{$val->home_score}} - {{$val->away_score}} {{$val->away_team}}</p>
       <IMG SRC="{{ $val->image_path }}" class="">
    @endforeach
      
    </div>
    
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
   
</div>
@endsection


