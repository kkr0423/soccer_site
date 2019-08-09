<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>JリーグNavi</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="{{ url('/') }}">Infomatoin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/headline') }}">試合速報</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/game') }}">試合結果入力</a>
      </li>    
    </ul>
  </div>  
</nav>