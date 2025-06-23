<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta property="og:title" content="Suprinova">
   <meta property="og:image" content="assets/img/suprinova_logo.png">
   <meta property="og:url" content="https://labmakerifes.com/suprinova/public/assets/img/suprinova_logo.png">
   <meta property="og:type" content="website">

   <title>Suprinova</title>
   <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <link rel="shortcut icon" href="{{ asset('assets/img/suprinova_logo.png') }}" type="image/x-icon">

   @vite('resources/js/app.js')

   <style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');

      :root {
         --liner-gradient: linear-gradient(to right, #0A306E, #572BFE);
      }

      * {
         font-family: 'Roboto', Arial, sans-serif;
      }

      .bd-placeholder-img {
         font-size: 1.125rem;
         text-anchor: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         user-select: none;
      }

      @media (min-width: 768px) {
         .bd-placeholder-img-lg {
            font-size: 3.5rem;
         }
      }

      .b-example-divider {
         width: 100%;
         height: 3rem;
         background-color: rgba(0, 0, 0, .1);
         border: solid rgba(0, 0, 0, .15);
         border-width: 1px 0;
         box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
         flex-shrink: 0;
         width: 1.5rem;
         height: 100vh;
      }

      .bi {
         vertical-align: -.125em;
         fill: currentColor;
      }

      .nav-scroller {
         position: relative;
         z-index: 2;
         height: 2.75rem;
         overflow-y: hidden;
      }

      .nav-scroller .nav {
         display: flex;
         flex-wrap: nowrap;
         padding-bottom: 1rem;
         margin-top: -1px;
         overflow-x: auto;
         text-align: center;
         white-space: nowrap;
         -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
         --bd-violet-bg: #712cf9;
         --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

         --bs-btn-font-weight: 600;
         --bs-btn-color: var(--bs-white);
         --bs-btn-bg: var(--bd-violet-bg);
         --bs-btn-border-color: var(--bd-violet-bg);
         --bs-btn-hover-color: var(--bs-white);
         --bs-btn-hover-bg: #6528e0;
         --bs-btn-hover-border-color: #6528e0;
         --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
         --bs-btn-active-color: var(--bs-btn-hover-color);
         --bs-btn-active-bg: #5a23c8;
         --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
         z-index: 1500;
      }

      .bd-mode-toggle .bi {
         width: 1em;
         height: 1em;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
         display: block !important;
      }

      .icon-link>.bi {
         width: .75em;
         height: .75em;
      }

      .site-header {
         background-color: rgba(0, 0, 0, .85);
         -webkit-backdrop-filter: saturate(180%) blur(20px);
         backdrop-filter: saturate(180%) blur(20px);
      }

      .site-header a {
         color: #8e8e8e;
         transition: color .15s ease-in-out;
      }

      .site-header a:hover {
         color: #fff;
         text-decoration: none;
      }

      .flex-equal>* {
         flex: 1;
      }

      @media (min-width: 768px) {
         .flex-md-equal>* {
            flex: 1;
         }
      }

      .dropdown:hover .dropdown-menu {
         display: block;
         margin-top: 0;
      }

      .dropdown-toggle::after {
         transition: transform 0.15s ease-in-out;
      }

      .topbar {
         background: var(--liner-gradient);
         font-size: 0.9rem;
      }

      .consultor-btn {
         /* background: linear-gradient(to right, #5536ff, #4a25aa); */
         background: var(--liner-gradient);
         color: #fff;
         border-radius: 50px !important;
         padding: 10px 20px !important;
         border: none !important;

         &:hover {
            scale: 1.05;
            transition: all 0.1s ease-in-out;
         }

         &:active {
            scale: 0.95;
            transition: all 0.1s ease-in-out;
         }
      }

      .btn-pagina:hover {
         scale: 1.05;
         transition: all 0.1s ease-in-out;

         &:active {
            scale: 1;
            transition: all 0.1s ease-in-out;
         }
      }

      .btn-consultor {
         border: #212529 1px solid !important;

         &:hover {
            background: transparent !important;
            border: #212529 1px solid !important;
            color: #212529 !important;
            scale: 1.05;
            transition: all 0.1s ease-in-out;

            &:active {
               scale: 1;
               transition: all 0.1s ease-in-out;
            }
         }
      }

      .dropdown-style {
         border: none !important;

         & .item-style:hover {
            background-color: #f6f6f7 !important;
            color: #5635ff !important;
            transition: all 0.3s ease-in-out;
         }
      }

      /* Transição base */
      .dropdown-menu .dropdown-menu {
         /* opacity: 0;
    visibility: hidden; */
         transition: opacity 0.3s ease, visibility 0.3s ease;
      }

      /* Telas grandes (hover habilitado) */
      @media (min-width: 992px) {
         .dropdown:hover>.dropdown-menu {
            display: block !important;
            opacity: 1;
            visibility: visible;
         }

         .dropdown-menu .dropend:hover>.dropdown-menu {
            display: block !important;
            position: absolute;
            top: 0;
            left: 100%;
            margin-top: 0;
            opacity: 1;
            visibility: visible;
         }

         /* Esconde o submenu até hover */
         .dropdown-menu .dropdown-menu {
            display: block !important;
            /* mantém renderizado para usar opacity */
            opacity: 0;
            visibility: hidden;
         }
      }

      h2.featured:before {
         content: "";
         display: block;
         width: 50px;
         height: 5px;
         background: var(--liner-gradient);
         margin-bottom: 10px;
      }

      .enviar-contato:hover {
         scale: 1.05;
         transition: all 0.1s ease-in-out;
      }

      .carousel-inner .carousel-item>.row {
         display: flex;
      }

      .carousel-item img {
         opacity: 0.8;
         transition: transform 0.5s ease, opacity 0.5s ease;
      }

      .carousel-item img:hover {
         opacity: 1;
      }

      nav ul li a:hover {
         color: #7c7c7c !important;
      }

      nav ul li a::after {
         content: '';
         position: absolute;
         width: 0;
         height: 2px;
         bottom: 0;
         left: 0;
         background-color: #7c7c7c;
         transition: width 0.3s;
      }

      nav ul li a:hover::after {
         width: 100%;
      }

      .sector-card {
         background-color: #ffffff;
         border-radius: 5px;
         overflow: hidden;
         box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
         transition: transform 0.3s, box-shadow 0.3s;
      }

      .sector-card:hover {
         transform: translateY(-10px);
         box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
      }

      .sector-card img {
         width: 100%;
         height: 200px;
         object-fit: cover;
      }

      .sector-card-content {
         padding: 20px;
      }

      .sector-card h5 {
         color: #003366;
         font-weight: bold;
         text-align: center;
         margin-bottom: 10px;
      }

      .sector-card p {
         margin-bottom: 15px;
         color: #333333;
      }

      .saiba-mais {
         display: inline-block;
         background-color: #003366;
         color: #ffffff;
         padding: 10px 20px;
         border-radius: 5px;
         text-decoration: none;
         font-weight: 500;
         transition: background-color 0.3s;
      }

      .saiba-mais:hover {
         background-color: #0066cc;
      }
   </style>
</head>

<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
   <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
      <circle cx="12" cy="12" r="10" />
      <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
   </symbol>
   <symbol id="cart" viewBox="0 0 16 16">
      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
   </symbol>
   <symbol id="chevron-right" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
   </symbol>
</svg>

<!-- Topbar -->
<div class="topbar text-white py-2">
   <div class="container d-flex justify-content-between align-items-center flex-wrap">
      <!-- Contatos (escondido no mobile) -->
      <div class="d-none d-md-flex flex-wrap gap-3">
         <span><i class="bi bi-telephone"></i> (99) 99999-9999</span>
         <span><i class="bi bi-whatsapp"></i> (99) 99999-9999</span>
         <span><i class="bi bi-envelope"></i> contato@sistemavitrine.com.br</span>
      </div>

      <!-- Redes sociais -->
      <div class="col-12 col-md-4 d-flex justify-content-center justify-content-md-end gap-4">
         <a href="https://www.instagram.com/suprinova.es?igsh=MXd2Z2hndXAwYjhhbQ==" target="_blank" class="text-white"><i class="bi bi-instagram fs-6"></i></a>
         <a href="#" class="text-white"><i class="bi bi-linkedin fs-6"></i></a>
         <a href="#" class="text-white"><i class="bi bi-facebook fs-6"></i></a>
      </div>
   </div>
</div>

<header class="sticky-top top-0 w-100 bg-white shadow-sm" style="z-index: 1000;">
   <div class="container">
      <div class="header-container d-flex justify-content-between align-items-center py-2">
         <div class="logo">
            <a href="{{ route('index') }}">
               <img src="{{ asset('assets/img/suprinova_logo.png') }}" class="bi img-fluid" width="150" alt="SUPRINOVA Logo">
            </a>
         </div>
         <nav class="navbar navbar-expand-md d-md-flex">
            <button class="navbar-toggler" style="border: none;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
               <div class="offcanvas-header">
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
               </div>
               <div class="offcanvas-body">
                  <ul class="d-flex list-unstyled m-0 navbar-nav flex-grow-1 justify-content-between align-items-center">
                     <li class="mx-3 py-3"><a href="{{ route('index') }}" class="text-decoration-none position-relative" style="font-weight: 500 !important; transition: color 0.3s; color: #003366; padding: 10px 0;">
                           Home
                        </a>
                     </li>
                     <li class="mx-3 py-3"><a href="{{ route('setores') }}" class="text-decoration-none position-relative" style="font-weight: 500 !important; transition: color 0.3s; color: #003366; padding: 10px 0;">
                           Setores
                        </a>
                     </li>
                     <li class="mx-3 py-3"><a href="{{ route('sustentabilidade') }}" class="text-decoration-none position-relative" style="font-weight: 500 !important; transition: color 0.3s; color: #003366; padding: 10px 0;">
                           Sustentabilidade
                        </a>
                     </li>
                     <li class="mx-3 py-3"><a href="{{ route('quem-somos') }}" class="text-decoration-none position-relative" style="font-weight: 500 !important; transition: color 0.3s; color: #003366; padding: 10px 0;">
                           Sobre Nós
                        </a>
                     </li>
                     <li class="mx-3 py-3"><a href="{{ route('contato') }}" class="text-decoration-none position-relative" style="font-weight: 500 !important; transition: color 0.3s; color: #003366; padding: 10px 0;">
                           Contato
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>
   </div>
</header>

<!-- Navbar -->
<!-- <nav class="navbar navbar-expand-md bg-light sticky-top border-bottom" data-bs-theme="light">
   <div class="container">
      <a class="navbar-brand d-md-none" href="#">
         <img src="{{ asset('assets/img/suprinova_logo.png') }}" class="bi img-fluid" width="100" alt="Logo">
      </a>
      <button class="navbar-toggler" style="border: none;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
         <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body">
            <ul class="navbar-nav flex-grow-1 justify-content-between align-items-center">
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('index') }}" aria-label="Aperture">
                     <img src="{{ asset('/assets/img/suprinova_logo.png') }}" class="bi" width="160" aria-hidden="true" alt="Sua Logo">
                  </a>
               </li>
               <div class="dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                     Setores
                  </a>
                  <ul class="dropdown-menu dropdown-style shadow mb-3 bg-body-tertiary rounded">
                     <li><a class="dropdown-item dropdown-item item-style text-muted py-3 px-5" href="{{ route('setores') }}">Setores</a></li>
                     <li><a class="dropdown-item dropdown-item item-style text-muted py-3 px-5" href="{{ route('setores.setorAlimento') }}">Alimentos e bebidas</a></li>
                     <li><a class="dropdown-item dropdown-item item-style text-muted py-3 px-5" href="#">Farmacêutico</a></li>
                     <li><a class="dropdown-item dropdown-item item-style text-muted py-3 px-5" href="#">Restaurantes</a></li>
                     <li><a class="dropdown-item dropdown-item item-style text-muted py-3 px-5" href="#">Educação</a></li>
                     <li><a class="dropdown-item dropdown-item item-style text-muted py-3 px-5" href="#">Governo</a></li>
                     <li><a class="dropdown-item dropdown-item item-style text-muted py-3 px-5" href="#">Asseio e conservação</a></li>
                     <li><a class="dropdown-item dropdown-item item-style text-muted py-3 px-5" href="#">Gestão de instalações</a></li>
                     <li><a class="dropdown-item dropdown-item item-style text-muted py-3 px-5" href="#">Varejo</a></li>
                     <li><a class="dropdown-item dropdown-item item-style text-muted py-3 px-5" href="#">Saúde</a></li>
                     <li><a class="dropdown-item dropdown-item item-style text-muted py-3 px-5" href="#">Hotalaria</a></li>
                     <li><a class="dropdown-item dropdown-item item-style text-muted py-3 px-5" href="#">Lavanderia comercial</a></li>
                  </ul>
               </div>
               <li class="nav-item">
                  <a class="nav-link" href="https://app.salsify.com/catalogs/cb45e478-5008-4808-bc89-6b26cfadaf95/products?filter=%3D&page=1" target="_blank">
                     Produtos
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('quem-somos') }}">Quem somos</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('contato') }}">Contato</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#" aria-label="Cart">
                     <button type="button" class="btn btn-primary consultor-btn fw-bold text-uppercase" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Falar com consultor
                     </button>
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</nav> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Falar com consultor</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form action="#" method="POST">
               @csrf
               <div class="row">
                  <div class="col">
                     <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
                     </div>
                  </div>
                  <div class="col">
                     <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Digite seu email">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone" placeholder="Digite seu telefone">
                     </div>
                  </div>
                  <div class="col">
                     <div class="mb-3">
                        <label for="mensagem" class="form-label">Cargo</label>
                        <input type="text" class="form-control" id="cargo" placeholder="Digite seu cargo">
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="mb-3">
                     <label for="mensagem" class="form-label">Nome da empresa</label>
                     <input type="text" class="form-control" id="nome_empresa" placeholder="Digite o nome da empresa">
                  </div>
               </div>
         </div>
         <div class="modal-footer">
            <button type="submit" class="btn btn-primary consultor-btn fw-bold text-uppercase">Enviar</button>
         </div>
         </form>
      </div>
   </div>
</div>