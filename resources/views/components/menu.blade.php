<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Suprinova</title>
   <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   @vite('resources/js/app.js')
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

<!-- Navbar -->
<nav class="navbar navbar-expand-md bg-light sticky-top border-bottom" data-bs-theme="light">
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
                     <!-- Item com submenu (dropend) -->
                     <!-- <li class="dropdown dropend">
                                <a href="#" class="dropdown-item dropdown-toggle item-style text-muted pb-2" data-bs-toggle="dropdown">
                                    Indústria
                                </a>
                                <ul class="shadow mb-3 bg-body-tertiary rounded dropdown-menu dropdown-style">
                                    <li><a class="dropdown-item item-style text-muted pb-2" href="#">Alimentos</a></li>
                                    <li><a class="dropdown-item item-style text-muted pb-2" href="#">Metalúrgica</a></li>
                                    <li><a class="dropdown-item item-style text-muted pb-2" href="#">Farmacêutica</a></li>
                                </ul>
                            </li> -->
                     <!-- Mais itens -->

                  </ul>
               </div>
               <!-- VAI FICAR DESATIVADA ATÉ SEGUNDAS ORDENS -->
               <!-- <div class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Serviços
                        </a>
                        <ul class="shadow mb-3 bg-body-tertiary rounded dropdown-menu dropdown-style">
                            <li><a class="dropdown-item item-style text-muted pb-2" href="#">Serviços</a></li>
                            <li><a class="dropdown-item item-style text-muted pb-2" href="#">Serviços</a></li>
                            <li><a class="dropdown-item item-style text-muted pb-2" href="#">Serviços</a></li>
                            <li><a class="dropdown-item item-style text-muted pb-2" href="#">Serviços</a></li>
                            <li><a class="dropdown-item item-style text-muted pb-2" href="#">Serviços</a></li>
                            <li><a class="dropdown-item item-style text-muted pb-2" href="#">Serviços</a></li>
                        </ul>
                    </div> -->
               <li class="nav-item">
                  <a class="nav-link" href="https://app.salsify.com/catalogs/cb45e478-5008-4808-bc89-6b26cfadaf95/products?filter=%3D&page=1" target="_blank">
                     Produtos
                  </a>
               </li>
               <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Parceiros</a>
               </li> -->
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
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Falar com consultor</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            ...
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-primary consultor-btn fw-bold text-uppercase">Enviar</button>
         </div>
      </div>
   </div>
</div>