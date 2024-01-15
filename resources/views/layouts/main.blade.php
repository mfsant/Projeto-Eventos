<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">        <link rel="stylesheet" href="/css/styles.css">

        <title>@yield('title')</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="/">Eventos <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/events/create">Criar Eventos</a>
                    </li>
                    @auth
                    <li class="nav-item">
                      <a class="nav-link" href="/login">Meus eventos </a>
                    </li>  
                    <li class="nav-item">
                      <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout" class="nav-link"
                         onclick="event.preventDefault();
                         this.closest('form').submit();">Sair</a>
                      </form>
                    </li>
                    @endauth
                  @guest
                  <li class="nav-item">
                    <a class="nav-link" href="/login">Entrar</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/register">Cadastrar</a>
                    </li>
                  @endguest
                  </ul>
                </div>
              </nav>
        </header>
        <main>
          <div class="container-fluid">
            <div class="row">
              @if(session('msg'))
                <p class="msg">{{session('msg')}}</p>
              @endif
              @yield('content')
            </div>
          </div>
        </main>
       <footer>
        <p>Sant Events &copy; 2024</p>
       </footer>
       <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
       <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
