<body>
   @component('components.menu')@endcomponent
   <div class="container mt-3">
      <div class="row g-4">
         <!-- Texto -->
         <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
            <div class="mb-4">
               <h2 class="fw-bold text-dark featured alt">Setores</h2>
               <p class="text-muted">
                  Conheça os setores que atendemos e as soluções que oferecemos para cada um deles.
               </p>
            </div>
         </div>
      </div>

      <!-- Cards de destaques -->
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
            <img src="{{ asset('assets/img/setor_agua_miniatura.jpeg') }}" alt="Tratamento de Águas">
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
   @component('components.footer')@endcomponent
</body>