<body>
   @component('components.menu')
   @endcomponent

   <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="{{ asset('assets/img/setor-Alimentos-Bebidas.jpg') }}" class="d-block w-100" alt="setor-Alimentos-Bebidas">
            <div class="carousel-caption bg-dark bg-opacity-50 d-none d-md-block">
               <h2 class="fs-2">Soluções Completas em Produtos Químicos</h2>
               <p class="fs-5">Distribuidor exclusivo Diversey com soluções para todos os setores industriais</p>
            </div>
         </div>
         <div class="carousel-item">
            <img src="{{ asset('assets/img/setor-hospitalar.jpeg') }}" class="d-block w-100" alt="setor-hospitalar">
            <div class="carousel-caption bg-dark bg-opacity-50 d-none d-md-block">
               <h2 class="fs-2">Soluções Completas em Produtos Químicos</h2>
               <p class="fs-5">Distribuidor exclusivo Diversey com soluções para todos os setores industriais</p>
            </div>
         </div>
         <div class="carousel-item">
            <img src="{{ asset('assets/img/cozinha-Industrial.jpg') }}" class="d-block w-100" alt="setor-cozinha-Industrial">
            <div class="carousel-caption bg-dark bg-opacity-50 d-none d-md-block">
               <h2 class="fs-2">Soluções Completas em Produtos Químicos</h2>
               <p class="fs-5">Distribuidor exclusivo Diversey com soluções para todos os setores industriais</p>
            </div>
         </div>
         <div class="carousel-item">
            <img src="{{ asset('assets/img/setor-lavanderia-industrial.png') }}" class="d-block w-100" alt="setor-lavanderia-industrial">
            <div class="carousel-caption bg-dark bg-opacity-50 d-none d-md-block">
               <h2 class="fs-2">Soluções Completas em Produtos Químicos</h2>
               <p class="fs-5">Distribuidor exclusivo Diversey com soluções para todos os setores industriais</p>
            </div>
         </div>
         <div class="carousel-item">
            <img src="{{ asset('assets/img/setor-tratamento-de-piso.jpeg') }}" class="d-block w-100" alt="setor-tratamento-de-piso">
            <div class="carousel-caption bg-dark bg-opacity-50 d-none d-md-block">
               <h2 class="fs-2">Soluções Completas em Produtos Químicos</h2>
               <p class="fs-5">Distribuidor exclusivo Diversey com soluções para todos os setores industriais</p>
            </div>
         </div>
         <div class="carousel-item">
            <img src="{{ asset('assets/img/setor-tratamento-de-agua.jpg') }}" class="d-block w-100" alt="setor-tratamento-de-agua">
            <div class="carousel-caption bg-dark bg-opacity-50 d-none d-md-block">
               <h2 class="fs-2">Soluções Completas em Produtos Químicos</h2>
               <p class="fs-5">Distribuidor exclusivo Diversey com soluções para todos os setores industriais</p>
            </div>
         </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Próximo</span>
      </button>
   </div>

   <section class="pt-2 pb-3 text-white" style="background-color: #f5f5f5;">
      <div class="container">
         <div class="container-fluid text-white py-3"
            style="
               background: linear-gradient(to bottom ,rgba(10, 48, 110, 0.65),  rgba(10, 48, 110, 0.78), rgba(10, 48, 110, 0.9), rgba(10, 48, 110, 0.78),  rgba(10, 48, 110, 0.65));
               box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.25);">
            <div class="row align-items-center text-center text-lg-start">
               <div class="col-lg-4 mb-4 mb-lg-0">
                  <img src="{{ asset('assets/img/Banner_home.png') }}" alt="Produtos" class="img-fluid">
               </div>
               <div class="col-lg-4 border-start border-end border-white px-4">
                  <h4 class="fw-bold">Limpeza não é o suficiente</h4>
               </div>
               <div class="col-lg-4 px-4">
                  <p class="mb-3">
                     Nossa ampla gama de produtos ajuda nossos clientes a proteger seus clientes e o futuro de nosso planeta.
                  </p>
                  <a href="https://wa.link/i4wtaf" target="_blank" class="btn btn-outline-light rounded-pill d-inline-flex align-items-center gap-2">
                     <span class="bg-success rounded-circle d-inline-block" style="width: 10px; height: 10px;"></span>
                     Entre em contato
                  </a>
               </div>
            </div>
         </div>
         <div class="sectors-grid d-grid gap-2" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
            <div class="sector-card">
               <img src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" alt="Alimentos e Bebidas">
               <div class="sector-card-content">
                  <h3>Alimentos e Bebidas</h3>
                  <p>Soluções especializadas para CIP, OPC, Caldeiras, Torres de Resfriamento e Tratamentos de Água.</p>
                  <a href="#" class="saiba-mais">Saiba Mais</a>
               </div>
            </div>
            <div class="sector-card">
               <img src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" alt="Tratamento de Águas">
               <div class="sector-card-content">
                  <h3>Tratamento de Águas</h3>
                  <p>Soluções completas para ETA (Estação de Tratamento de Água) e ETE (Estação de Tratamento de
                     Efluentes).</p>
                  <a href="#" class="saiba-mais">Saiba Mais</a>
               </div>
            </div>
            <div class="sector-card">
               <img src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" alt="Hospitalar">
               <div class="sector-card-content">
                  <h3>Hospitalar</h3>
                  <p>Produtos à base de peróxido de hidrogênio, quaternário de amônio e detergente clorado para
                     ambientes hospitalares.</p>
                  <a href="#" class="saiba-mais">Saiba Mais</a>
               </div>
            </div>
            <div class="sector-card">
               <img src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" alt="Lavanderia Industrial">
               <div class="sector-card-content">
                  <h3>Lavanderia Industrial</h3>
                  <p>Portfólio completo de produtos para todas as necessidades do setor de lavanderia industrial.</p>
                  <a href="#" class="saiba-mais">Saiba Mais</a>
               </div>
            </div>
            <div class="sector-card">
               <img src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" alt="Tratamento de Pisos">
               <div class="sector-card-content">
                  <h3>Tratamento de Pisos</h3>
                  <p>Todo o portfólio da Diversey para tratamento e manutenção de pisos em ambientes industriais e
                     comerciais.</p>
                  <a href="#" class="saiba-mais">Saiba Mais</a>
               </div>
            </div>
         </div>
      </div>
   </section>

   <div class="container">
      <section class="mt-3 text-white" style="background-image: url('https://d1f2ieqjc8iqzi.cloudfront.net/s3fs-public/2023-03/Diversey%20Optimal%20Hygiene_V3_0.png?VersionId=xi7yer_DJ6vGvcZcaLwXaZbtNICvBbjI'); background-size: cover; background-position: center;">
         <div class="container-fluid text-white py-5"
            style="
               background: linear-gradient(to bottom ,rgba(10, 48, 110, 0.65),  rgba(10, 48, 110, 0.78), rgba(10, 48, 110, 0.9), rgba(10, 48, 110, 0.78),  rgba(10, 48, 110, 0.65));
               box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
            <div class="row align-items-center text-center text-lg-start">

               <!-- Coluna 1: Imagem dos produtos -->
               <div class="col-lg-4 mb-4 mb-lg-0">
                  <img src="{{ asset('assets/img/Banner_home.png') }}" alt="Produtos" class="img-fluid">
               </div>

               <!-- Coluna 2: Frase destaque -->
               <div class="col-lg-4 border-start border-end border-white px-4">
                  <h4 class="fw-bold">Limpeza não é o suficiente</h4>
               </div>

               <!-- Coluna 3: Texto e botão -->
               <div class="col-lg-4 px-4">
                  <p class="mb-3">
                     Nossa ampla gama de produtos ajuda nossos clientes a proteger seus clientes e o futuro de nosso planeta.
                  </p>
                  <a href="https://wa.link/i4wtaf" target="_blank" class="btn btn-outline-light rounded-pill d-inline-flex align-items-center gap-2">
                     <span class="bg-success rounded-circle d-inline-block" style="width: 10px; height: 10px;"></span>
                     Entre em contato
                  </a>
               </div>
            </div>
         </div>
         <div class="row align-items-center g-4 py-4">
            <div class="col-lg-7">
               <div id="carouselSetores2" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                     <!-- Slide 1 -->
                     <div class="carousel-item active h-100">
                        <div class="row justify-content-center gap-4">
                           <div class="col-md-4">
                              <div class="card shadow-sm h-100 bg-dark" style="border: none; border-radius: 0; opacity: 0.9;">
                                 <a href="#" class="text-decoration-none text-white">
                                    <div class="card-body">
                                       <h5 class="card-title">Laticínios</h5>
                                    </div>
                                    <img style="border: none; border-radius: 0;" src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" class="card-img-top" alt="laticinios">
                                 </a>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="card shadow-sm h-100 bg-dark" style="border: none; border-radius: 0; opacity: 0.9;">
                                 <a href="#" class="text-decoration-none text-white">
                                    <div class="card-body">
                                       <h5 class="card-title">Frigorífico</h5>
                                    </div>
                                    <img style="border: none; border-radius: 0;" src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" class="card-img-top" alt="figrorifico">
                                 </a>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="card shadow-sm h-100 bg-dark" style="border: none; border-radius: 0; opacity: 0.9;">
                                 <a href="#" class="text-decoration-none text-white">
                                    <div class="card-body">
                                       <h5 class="card-title">Saúde</h5>
                                    </div>
                                    <img style="border: none; border-radius: 0;" src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" class="card-img-top" alt="Saúde">
                                 </a>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="card shadow-sm h-100 bg-dark" style="border: none; border-radius: 0; opacity: 0.9;">
                                 <a href="#" class="text-decoration-none text-white">
                                    <div class="card-body">
                                       <h5 class="card-title">Saúde</h5>
                                    </div>
                                    <img style="border: none; border-radius: 0;" src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" class="card-img-top" alt="Saúde">
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Slide 2 -->
                     <div class="carousel-item h-100">
                        <div class="row justify-content-center gap-4">
                           <div class="col-md-4">
                              <div class="card shadow-sm h-100 bg-dark" style="border: none; border-radius: 0; opacity: 0.9;">
                                 <a href="#" class="text-decoration-none text-white">
                                    <div class="card-body">
                                       <h5 class="card-title">Laticínios</h5>
                                    </div>
                                    <img style="border: none; border-radius: 0;" src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" class="card-img-top" alt="Gestão de Instalações">
                                 </a>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="card shadow-sm h-100 bg-dark" style="border: none; border-radius: 0; opacity: 0.9;">
                                 <a href="#" class="text-decoration-none text-white">
                                    <div class="card-body">
                                       <h5 class="card-title">Frigorífico</h5>
                                    </div>
                                    <img style="border: none; border-radius: 0;" src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" class="card-img-top" alt="Varejo">
                                 </a>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="card shadow-sm h-100 bg-dark" style="border: none; border-radius: 0; opacity: 0.9;">
                                 <a href="#" class="text-decoration-none text-white">
                                    <div class="card-body">
                                       <h5 class="card-title">Saúde</h5>
                                    </div>
                                    <img style="border: none; border-radius: 0;" src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" class="card-img-top" alt="Saúde">
                                 </a>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="card shadow-sm h-100 bg-dark" style="border: none; border-radius: 0; opacity: 0.9;">
                                 <a href="#" class="text-decoration-none text-white">
                                    <div class="card-body">
                                       <h5 class="card-title">Saúde</h5>
                                    </div>
                                    <img style="border: none; border-radius: 0;" src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" class="card-img-top" alt="Saúde">
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Controles -->
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselSetores2" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon"></span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselSetores2" data-bs-slide="next">
                     <span class="carousel-control-next-icon"></span>
                  </button>
               </div>
            </div>
            <div class="col-lg-5 px-5">
               <h2 class="fw-bold">Setores Industriais</h2>
               <p class="lead">
                  Nossa linha sustentável de soluções foi projetada para atender às necessidades únicas de indústrias e setores, permitindo que líderes e funcionários comprometidos dentro delas, que estão em uma missão de cuidar do que é valioso, tenham acesso a essas soluções.
               </p>
            </div>
         </div>
      </section>
   </div>

   <section class="mt-3 text-white" style="background-image: url('https://d1f2ieqjc8iqzi.cloudfront.net/s3fs-public/2023-03/Diversey%20Optimal%20Hygiene_V3_0.png?VersionId=xi7yer_DJ6vGvcZcaLwXaZbtNICvBbjI'); background-size: cover; background-position: center;">
      <div class="container">
         <div class="container-fluid text-white py-5"
            style="
               background: linear-gradient(to bottom ,rgba(10, 48, 110, 0.65),  rgba(10, 48, 110, 0.78), rgba(10, 48, 110, 0.9), rgba(10, 48, 110, 0.78),  rgba(10, 48, 110, 0.65));
               box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
            <div class="row align-items-center text-center text-lg-start">

               <!-- Coluna 1: Imagem dos produtos -->
               <div class="col-lg-4 mb-4 mb-lg-0">
                  <img src="{{ asset('assets/img/Banner_home.png') }}" alt="Produtos" class="img-fluid">
               </div>

               <!-- Coluna 2: Frase destaque -->
               <div class="col-lg-4 border-start border-end border-white px-4">
                  <h4 class="fw-bold">Limpeza não é o suficiente</h4>
               </div>

               <!-- Coluna 3: Texto e botão -->
               <div class="col-lg-4 px-4">
                  <p class="mb-3">
                     Nossa ampla gama de produtos ajuda nossos clientes a proteger seus clientes e o futuro de nosso planeta.
                  </p>
                  <a href="https://wa.link/i4wtaf" target="_blank" class="btn btn-outline-light rounded-pill d-inline-flex align-items-center gap-2">
                     <span class="bg-success rounded-circle d-inline-block" style="width: 10px; height: 10px;"></span>
                     Entre em contato
                  </a>
               </div>
            </div>
         </div>
         <div class="row align-items-center g-4 py-4">
            <div class="col-lg-5 px-5">
               <h2 class="fw-bold">Setores Industriais</h2>
               <p class="lead">
                  Nossa linha sustentável de soluções foi projetada para atender às necessidades únicas de indústrias e setores, permitindo que líderes e funcionários comprometidos dentro delas, que estão em uma missão de cuidar do que é valioso, tenham acesso a essas soluções.
               </p>
            </div>

            <div class="col-lg-7">
               <div id="carouselSetores3" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                     <!-- Slide 1 -->
                     <div class="carousel-item active h-100">
                        <div class="row justify-content-center gap-4">
                           <div class="col-md-4">
                              <div class="card shadow-sm h-100 bg-dark" style="border: none; border-radius: 0; opacity: 0.9;">
                                 <a href="#" class="text-decoration-none text-white">
                                    <div class="card-body">
                                       <h5 class="card-title">Laticínios</h5>
                                    </div>
                                    <img style="border: none; border-radius: 0;" src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" class="card-img-top" alt="laticinios">
                                 </a>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="card shadow-sm h-100 bg-dark" style="border: none; border-radius: 0; opacity: 0.9;">
                                 <a href="#" class="text-decoration-none text-white">
                                    <div class="card-body">
                                       <h5 class="card-title">Frigorífico</h5>
                                    </div>
                                    <img style="border: none; border-radius: 0;" src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" class="card-img-top" alt="figrorifico">
                                 </a>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="card shadow-sm h-100 bg-dark" style="border: none; border-radius: 0; opacity: 0.9;">
                                 <a href="#" class="text-decoration-none text-white">
                                    <div class="card-body">
                                       <h5 class="card-title">Saúde</h5>
                                    </div>
                                    <img style="border: none; border-radius: 0;" src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" class="card-img-top" alt="Saúde">
                                 </a>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="card shadow-sm h-100 bg-dark" style="border: none; border-radius: 0; opacity: 0.9;">
                                 <a href="#" class="text-decoration-none text-white">
                                    <div class="card-body">
                                       <h5 class="card-title">Saúde</h5>
                                    </div>
                                    <img style="border: none; border-radius: 0;" src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" class="card-img-top" alt="Saúde">
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Slide 2 -->
                     <div class="carousel-item h-100">
                        <div class="row justify-content-center gap-4">
                           <div class="col-md-4">
                              <div class="card shadow-sm h-100 bg-dark" style="border: none; border-radius: 0; opacity: 0.9;">
                                 <a href="#" class="text-decoration-none text-white">
                                    <div class="card-body">
                                       <h5 class="card-title">Laticínios</h5>
                                    </div>
                                    <img style="border: none; border-radius: 0;" src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" class="card-img-top" alt="Gestão de Instalações">
                                 </a>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="card shadow-sm h-100 bg-dark" style="border: none; border-radius: 0; opacity: 0.9;">
                                 <a href="#" class="text-decoration-none text-white">
                                    <div class="card-body">
                                       <h5 class="card-title">Frigorífico</h5>
                                    </div>
                                    <img style="border: none; border-radius: 0;" src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" class="card-img-top" alt="Varejo">
                                 </a>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="card shadow-sm h-100 bg-dark" style="border: none; border-radius: 0; opacity: 0.9;">
                                 <a href="#" class="text-decoration-none text-white">
                                    <div class="card-body">
                                       <h5 class="card-title">Saúde</h5>
                                    </div>
                                    <img style="border: none; border-radius: 0;" src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" class="card-img-top" alt="Saúde">
                                 </a>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="card shadow-sm h-100 bg-dark" style="border: none; border-radius: 0; opacity: 0.9;">
                                 <a href="#" class="text-decoration-none text-white">
                                    <div class="card-body">
                                       <h5 class="card-title">Saúde</h5>
                                    </div>
                                    <img style="border: none; border-radius: 0;" src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" class="card-img-top" alt="Saúde">
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Controles -->
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselSetores3" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon"></span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselSetores3" data-bs-slide="next">
                     <span class="carousel-control-next-icon"></span>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="parceiros">
      <div class="container mt-3 d-flex flex-column flex-md-row justify-content-between">
         <div class="left">
            <div class="row">
               <!-- Texto -->
               <div class="col-12 d-flex flex-column justify-content-center">
                  <div class="my-4">
                     <h2 class="fw-bold text-dark featured alt">Nossos parceiros</h2>
                  </div>
               </div>
            </div>

            <div class="d-flex flex-wrap justify-content-center align-items-center gap-4">
               <!-- <a href="https://diversey.com.br/pt-br" target="_blank">
               <img src="https://diversey.com.br/themes/custom/diversey/logo.png" alt="Diversey" class="img-fluid" style="max-height: 80px; max-width: 180px; object-fit: contain;">
            </a> -->
               <a href="https://diversey.com.br/pt-br" target="_blank">
                  <img src="https://www.solenis.com/Assets/imgs/layout/Logo-RGB-Mstr.svg" alt="Diversey" class="img-fluid" style="max-height: 80px; max-width: 180px; object-fit: contain;">
               </a>
               <a href="https://www.torkbrasil.com/todos-os-produtos?srsltid=AfmBOopZ7zaAq-gPTwJ1Wh-XCQRCPlnguEKIm1PafknD6yfDwPxIKmio" target="_blank">
                  <img src="https://www.torkbrasil.com/arquivos/logo.png" class="img-fluid" style="max-height: 80px; max-width: 180px; object-fit: contain;" alt="Tork">
               </a>
               <a href="https://fibertex.com.br/" target="_blank">
                  <img src="https://fibertex.com.br/wp-content/uploads/2022/02/logo-14.png" class="img-fluid" style="max-height: 80px; max-width: 180px; object-fit: contain;" alt="Fibertex">
               </a>
               <a href="https://www.plestin.com.br/" target="_blank">
                  <img src="https://www.plestin.com.br/images/logo-plestin-br.png" class="img-fluid" style="max-height: 80px; max-width: 180px; object-fit: contain; background-color: #061838;" alt="Plestin">
               </a>
               <a href="https://miliprofessional.com.br/" target="_blank">
                  <img src="https://miliprofessional.com.br/images/logo.png" class="img-fluid" style="max-height: 80px; max-width: 180px; object-fit: contain;" alt="Mili">
               </a>
               <a href="https://mamuteequipamentos.com.br/" target="_blank">
                  <img src="https://mamuteequipamentos.com.br/medias/elementor/thumbs/LAVANDERIA-24H-scaled-qzlw2hzkilxzgvul0kl9f4drnhbbhco8av1x1b77cw.jpg" class="img-fluid" style="max-height: 80px; max-width: 180px; object-fit: contain;" alt="Mamute">
               </a>
               <a href="https://www.karcher.com.br/br/" target="_blank">
                  <img src="https://s1.kaercher-media.com/versions/2025.2.0/static/img/kaercher_logo.svg" class="img-fluid" style="max-height: 80px; max-width: 180px; object-fit: contain;" alt="Karcher">
               </a>
               <a href="https://www.bralimpia.com.br/" target="_blank">
                  <img src="https://www.bralimpia.com.br/wp-content/uploads/2023/07/logo-Bralimpia-topo-site.png" class="img-fluid" style="max-height: 80px; max-width: 180px; object-fit: contain;" alt="Bralimpia">
               </a>
            </div>
         </div>
      </div>
   </section>
   </div>

   @component('components.footer')
   @endcomponent
</body>