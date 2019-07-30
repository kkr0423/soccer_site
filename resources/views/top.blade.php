@extends('layout')
@section('content')


@include('header')

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-lg-9">
      <h2>Pick up match</h2>
      <div class="">
        <IMG SRC="{{ secure_asset('images/Jleague1.jpg') }}" class="">
      </div>
      <p>G大阪　2-2 名古屋</p>
    </div>
    <div class="col-lg-3">
      <h2>結果</h2>
      <h5> Jul 21, 2019</h5>
      <a href="{{ url('/headline') }}">
      <IMG SRC="{{ secure_asset('images/Jleague4.jpg') }}" class="">
        </a>
      <p>FC東京 2-0 清水</p>
    </div>
    <div class="col-lg-9">
      <h3>Pick up player</h3>
      <div class="">
        <IMG SRC="{{ secure_asset('images/Jleague3.jpg') }}" class="">
      </div>
      <hr class="d-sm-none">
      <p>宇佐美　貴史　選手</p>
    </div>
    <div class="col-lg-3">
      <h2>結果</h2>
      <h5> Jul 21, 2019</h5>
      <a href="{{ url('/headline') }}">
      <IMG SRC="{{ secure_asset('images/Jleague2.jpg') }}" class="">
        </a>
      <P>神戸　０－２　横浜FM</P>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
   
</div>
@endsection


