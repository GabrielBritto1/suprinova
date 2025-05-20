<body>
   @component('components.menu')
   @endcomponent

   <main>
      <div class="container">
         <section class="hero-section position-relative d-flex align-items-center justify-content-center text-white">
            <div class="py-1">
               <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner carousel">
                     <div class="carousel-item active">
                        <img src="{{ asset('assets/img/setor-Alimentos-Bebidas.jpg') }}" class="d-block w-100" alt="setor-Alimentos-Bebidas">
                     </div>
                     <div class="carousel-item">
                        <img src="{{ asset('assets/img/setor-hospitalar.jpeg') }}" class="d-block w-100" alt="setor-hospitalar">
                     </div>
                     <div class="carousel-item">
                        <img src="{{ asset('assets/img/cozinha-Industrial.webp') }}" class="d-block w-100" alt="setor-cozinha-Industrial">
                     </div>
                     <div class="carousel-item">
                        <img src="{{ asset('assets/img/setor-lavanderia-industrial.png') }}" class="d-block w-100" alt="setor-lavanderia-industrial">
                     </div>
                     <div class="carousel-item">
                        <img src="{{ asset('assets/img/setor-tratamento-de-piso.jpeg') }}" class="d-block w-100" alt="setor-tratamento-de-piso">
                     </div>
                     <div class="carousel-item">
                        <img src="{{ asset('assets/img/setor-tratamento-de-agua.jpg') }}" class="d-block w-100" alt="setor-tratamento-de-agua">
                     </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                  </button>
               </div>
            </div>
            <div class="position-absolute top-0 start-0 p-4">
               <!-- <span class="display-5 fw-bold text-uppercase"><span style="color: #0A306E;">Supri</span><span style="color: #5b37f8;">nova</span></> -->
               <span class="display-5 fw-bold">
                  <img src="{{ asset('assets/img/suprinova_logo.png') }}" alt="logo" class="img-fluid w-25">
               </span>
               <!-- <p class="lead text-uppercase"><strong>Site de demonstração</strong></p> -->
               <!-- <div class="d-flex gap-3 justify-content-center lead fw-normal d-none d-md-flex">
                  <a href="#">
                     <button class="btn-pagina btn btn-sm text-uppercase px-4 py-2 fw-bold text-white" style="border-radius: 50px; background: linear-gradient(to right, #0A306E, #5635ff);">
                        Soluções
                     </button>
                  </a>
                  <a href="#">
                     <button class="btn-consultor btn btn-sm text-uppercase px-4 py-2 fw-bold text-white bg-dark" style="border-radius: 50px; border: #dddddd 1px solid;">
                        Falar com consultor
                     </button>
                  </a>
               </div> -->
            </div>
         </section>

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
               <div class="col-lg-5 px-5">
                  <h2 class="fw-bold">Setores Industriais</h2>
                  <p class="lead">
                     Nossa linha sustentável de soluções foi projetada para atender às necessidades únicas de indústrias e setores, permitindo que líderes e funcionários comprometidos dentro delas, que estão em uma missão de cuidar do que é valioso, tenham acesso a essas soluções.
                  </p>
               </div>

               <div class="col-lg-7">
                  <div id="carouselSetores" class="carousel slide" data-bs-ride="carousel">
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
                     <button class="carousel-control-prev" type="button" data-bs-target="#carouselSetores" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                     </button>
                     <button class="carousel-control-next" type="button" data-bs-target="#carouselSetores" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                     </button>
                  </div>
               </div>
            </div>
         </section>

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
   </main>

   @component('components.footer')
   @endcomponent
</body>