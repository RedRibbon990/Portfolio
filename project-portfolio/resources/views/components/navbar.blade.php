<nav class="navbar navbar-expand-lg bg-light fixed-top  shadow p-3 mb-1"> 
    <div class="logo">  
  <a class="navbar-brand" href="{{route('homepage')}}">{{env('APP_NAME')}}</a>
</div>
  <button style="justify-content-end" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
    <div class="contenitoremenu">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Homepage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('chisiamo')}}">Chi Siamo</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" aria-current="page" href="{{route('serviziofferti')}}">Servizi Offerti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('contattaci')}}">Contattaci</a>
          </li>
      </div>
    </div>
  </div>
  </nav>