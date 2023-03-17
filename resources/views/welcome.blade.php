<!DOCTYPE html>
<html lang="pt-br" class="">
  <head>
    <script rel="preload">
      let mode = localStorage.getItem("devlinks-mode") ?? "dark";
      document.documentElement.classList.add(mode);
    </script>
    <link
      rel="preload"
      href="https://images.unsplash.com/photo-1676402519279-153325e20506?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=400&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY3ODk5NzQxMA&ixlib=rb-4.0.3&q=80&w=400"
      as="image"
      fetchpriority="high"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>DevLinks</title>
    <link rel="stylesheet" href="{{ url('assets/css/styles.css') }}" />
  </head>
  <body>
    <div class="container">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ route('dashboard') }}" class="text-sm text-gray-700 underline">Gerenciar</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
            @endauth
        </div>
        @endif
      <div id="profile">
        <img
          src="https://images.unsplash.com/photo-1676402519279-153325e20506?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=400&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY3ODk5NzQxMA&ixlib=rb-4.0.3&q=80&w=400"
          alt="Texto alternativo"
        />

        <p>@maykbrito</p>
      </div>

      <div class="d-flex">
        <div id="switch" onclick="toggleMode()">
          <button></button>
          <div id="track"></div>
        </div>
      </div>

      <div id="links">
        <ul>
          <a href="#" target="_blank"><li>Link 1</li></a>
          <a href="#" target="_blank"><li>Link 2</li></a>
          <a href="#" target="_blank"><li>Link 3</li></a>
          <a href="#" target="_blank"><li>Link 4</li></a>
        </ul>
      </div>

      <div id="social-links">
        <a href="#" target="_blank"><ion-icon name="logo-github"></ion-icon></a>
        <a href="#" target="_blank"
          ><ion-icon name="logo-instagram"></ion-icon
        ></a>
        <a href="#" target="_blank"
          ><ion-icon name="logo-youtube"></ion-icon
        ></a>
        <a href="#" target="_blank"
          ><ion-icon name="logo-linkedin"></ion-icon
        ></a>
      </div>

      <footer>
        <p>
          Feito com <ion-icon name="heart"></ion-icon> pela
          <a href="#" target="_blank">Rocketseat</a>
        </p>
      </footer>
    </div>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <script src="{{ url('assets/js/scripts.js') }}"></script>
  </body>
</html>
