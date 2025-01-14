<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  @vite('resources/css/app.css')
  <title>@yield('title')</title>
  {{-- <style>
    .imagem {
      aspect-ratio: 16 / 10;
      object-fit: cover;
    }
    .titulo {
      aspect-ratio: 16 / 10;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    .descricao {
      aspect-ratio: 16 / 8;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  </style> --}}
</head>
<body>
  <nav>
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo center">CursoLaravel</a>
      <ul id="nav-mobile" class="left">
        <li><a href="">Home</a></li>
        <li><a href="">Carrinho</a></li>
      </ul>
    </div>
  </nav>
@yield('conteudo')
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>