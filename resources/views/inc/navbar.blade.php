
    <nav class="navbar navbar-expand navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse justify-content-sm-center" id="navbarsExample08">
          <ul class="navbar-nav">
          <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
              <a class="nav-link" href="./">Welcome</a>
            </li>
            <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
              <a class="nav-link" href="./about">About</a>
            </li>
            <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">
              <a class="nav-link" href="./contact">Contact</a>
            </li>
  
          </ul>
        </div>
      </nav>
