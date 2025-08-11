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
            <img src="{{ asset('assets/img/setor-tratamento-agua.png') }}" class="d-block w-100" style="width: 1600px; height: 728px;" alt="setor-tratamento-de-agua">
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
                  <h4 class="fw-bold">Alimentos e bebidas</h4>
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
               <img src="{{ asset('assets/img/setor_alimento_miniatura.jpeg') }}" alt="Alimentos e Bebidas">
               <div class="sector-card-content">
                  <h5>Alimentos</h5>
                  <p>Soluções especializadas para CIP, OPC, Caldeiras, Torres de Resfriamento e Tratamentos de Água.</p>
               </div>
               <div class="sector-footer d-flex justify-content-center align-items-center pb-3">
                  <a href="#" class="saiba-mais">Saiba Mais</a>
               </div>
            </div>
            <div class="sector-card">
               <img src="{{ asset('assets/img/setor-bebidas.png') }}" alt="Tratamento de Águas">
               <div class="sector-card-content">
                  <h5>Bebidas</h5>
                  <p>Soluções completas para ETA (Estação de Tratamento de Água) e ETE (Estação de Tratamento de
                     Efluentes).</p>
               </div>
               <div class="sector-footer d-flex justify-content-center align-items-center pb-3">
                  <a href="#" class="saiba-mais">Saiba Mais</a>
               </div>
            </div>
            <div class="sector-card">
               <img src="{{ asset('assets/img/setor_hospital_miniatura.jpeg') }}" alt="Hospitalar">
               <div class="sector-card-content">
                  <h5>Hospitalar</h5>
                  <p>Produtos à base de peróxido de hidrogênio, quaternário de amônio e detergente clorado para
                     ambientes hospitalares.</p>
               </div>
               <div class="sector-footer d-flex justify-content-center align-items-center pb-3">
                  <a href="#" class="saiba-mais">Saiba Mais</a>
               </div>
            </div>
            <div class="sector-card">
               <img src="{{ asset('assets/img/ChatGPT Image 23 de jun. de 2025, 17_09_25.png') }}" alt="Lavanderia Industrial">
               <div class="sector-card-content">
                  <h5>Lavanderia Industrial</h5>
                  <p>Portfólio completo de produtos para todas as necessidades do setor de lavanderia industrial.</p>
               </div>
               <div class="sector-footer d-flex justify-content-center align-items-center pb-3">
                  <a href="#" class="saiba-mais">Saiba Mais</a>
               </div>
            </div>
            <div class="sector-card">
               <img src="{{ asset('assets/img/setor_piso_miniatura.jpeg') }}" alt="Tratamento de Pisos">
               <div class="sector-card-content">
                  <h5>Tratamento de Pisos</h5>
                  <p>Todo o portfólio da Diversey para tratamento e manutenção de pisos em ambientes industriais.</p>
               </div>
               <div class="sector-footer d-flex justify-content-center align-items-center pb-3">
                  <a href="#" class="saiba-mais">Saiba Mais</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   
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
               <img src="{{ asset('assets/img/setor_alimento_miniatura.jpeg') }}" alt="Alimentos e Bebidas">
               <div class="sector-card-content">
                  <h5>Alimentos e Bebidas</h5>
                  <p>Soluções especializadas para CIP, OPC, Caldeiras, Torres de Resfriamento e Tratamentos de Água.</p>
               </div>
               <div class="sector-footer d-flex justify-content-center align-items-center pb-3">
                  <a href="#" class="saiba-mais">Saiba Mais</a>
               </div>
            </div>
            <div class="sector-card">
               <img src="{{ asset('assets/img/setor-tratamento-agua.png') }}" alt="Tratamento de Águas">
               <div class="sector-card-content">
                  <h5>Tratamento de Águas</h5>
                  <p>Soluções completas para ETA (Estação de Tratamento de Água) e ETE (Estação de Tratamento de
                     Efluentes).</p>
               </div>
               <div class="sector-footer d-flex justify-content-center align-items-center pb-3">
                  <a href="#" class="saiba-mais">Saiba Mais</a>
               </div>
            </div>
            <div class="sector-card">
               <img src="{{ asset('assets/img/setor_hospital_miniatura.jpeg') }}" alt="Hospitalar">
               <div class="sector-card-content">
                  <h5>Hospitalar</h5>
                  <p>Produtos à base de peróxido de hidrogênio, quaternário de amônio e detergente clorado para
                     ambientes hospitalares.</p>
               </div>
               <div class="sector-footer d-flex justify-content-center align-items-center pb-3">
                  <a href="#" class="saiba-mais">Saiba Mais</a>
               </div>
            </div>
            <div class="sector-card">
               <img src="{{ asset('assets/img/ChatGPT Image 23 de jun. de 2025, 17_09_25.png') }}" alt="Lavanderia Industrial">
               <div class="sector-card-content">
                  <h5>Lavanderia Industrial</h5>
                  <p>Portfólio completo de produtos para todas as necessidades do setor de lavanderia industrial.</p>
               </div>
               <div class="sector-footer d-flex justify-content-center align-items-center pb-3">
                  <a href="#" class="saiba-mais">Saiba Mais</a>
               </div>
            </div>
            <div class="sector-card">
               <img src="{{ asset('assets/img/setor_piso_miniatura.jpeg') }}" alt="Tratamento de Pisos">
               <div class="sector-card-content">
                  <h5>Tratamento de Pisos</h5>
                  <p>Todo o portfólio da Diversey para tratamento e manutenção de pisos em ambientes industriais.</p>
               </div>
               <div class="sector-footer d-flex justify-content-center align-items-center pb-3">
                  <a href="#" class="saiba-mais">Saiba Mais</a>
               </div>
            </div>
         </div>
      </div>
   </section>

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
               <img src="{{ asset('assets/img/setor_alimento_miniatura.jpeg') }}" alt="Alimentos e Bebidas">
               <div class="sector-card-content">
                  <h5>Alimentos e Bebidas</h5>
                  <p>Soluções especializadas para CIP, OPC, Caldeiras, Torres de Resfriamento e Tratamentos de Água.</p>
               </div>
               <div class="sector-footer d-flex justify-content-center align-items-center pb-3">
                  <a href="#" class="saiba-mais">Saiba Mais</a>
               </div>
            </div>
            <div class="sector-card">
               <img src="{{ asset('assets/img/setor-tratamento-agua.png') }}" alt="Tratamento de Águas">
               <div class="sector-card-content">
                  <h5>Tratamento de Águas</h5>
                  <p>Soluções completas para ETA (Estação de Tratamento de Água) e ETE (Estação de Tratamento de
                     Efluentes).</p>
               </div>
               <div class="sector-footer d-flex justify-content-center align-items-center pb-3">
                  <a href="#" class="saiba-mais">Saiba Mais</a>
               </div>
            </div>
            <div class="sector-card">
               <img src="{{ asset('assets/img/setor_hospital_miniatura.jpeg') }}" alt="Hospitalar">
               <div class="sector-card-content">
                  <h5>Hospitalar</h5>
                  <p>Produtos à base de peróxido de hidrogênio, quaternário de amônio e detergente clorado para
                     ambientes hospitalares.</p>
               </div>
               <div class="sector-footer d-flex justify-content-center align-items-center pb-3">
                  <a href="#" class="saiba-mais">Saiba Mais</a>
               </div>
            </div>
            <div class="sector-card">
               <img src="{{ asset('assets/img/ChatGPT Image 23 de jun. de 2025, 17_09_25.png') }}" alt="Lavanderia Industrial">
               <div class="sector-card-content">
                  <h5>Lavanderia Industrial</h5>
                  <p>Portfólio completo de produtos para todas as necessidades do setor de lavanderia industrial.</p>
               </div>
               <div class="sector-footer d-flex justify-content-center align-items-center pb-3">
                  <a href="#" class="saiba-mais">Saiba Mais</a>
               </div>
            </div>
            <div class="sector-card">
               <img src="{{ asset('assets/img/setor_piso_miniatura.jpeg') }}" alt="Tratamento de Pisos">
               <div class="sector-card-content">
                  <h5>Tratamento de Pisos</h5>
                  <p>Todo o portfólio da Diversey para tratamento e manutenção de pisos em ambientes industriais.</p>
               </div>
               <div class="sector-footer d-flex justify-content-center align-items-center pb-3">
                  <a href="#" class="saiba-mais">Saiba Mais</a>
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