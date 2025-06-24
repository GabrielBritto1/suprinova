<body>
   @component('components.menu')
   @endcomponent

   <div style="position: relative; background-image: url('assets/img/foto_mao_no_mundo_2.png'); background-position: center; min-height: 600px;">
      <div style="position: absolute; inset: 0; background: rgba(10, 30, 60, 0.45);"></div>
      <div class="container h-50 position-relative" style="z-index: 2;">
         <div class="d-flex flex-column justify-content-end h-100" style="min-height: 600px;">
            <div class="mb-4">
               <h2 class="fw-bold text-white display-4 featured alt">Sustentabilidade</h2>
            </div>
         </div>
      </div>
   </div>
   <section class="py-5" style="background-color:#f6f6f7">
      <div class="container">
         <div class="row">
            <div class="col-lg-8">
               <h4 class="fw-bold mb-4" style="line-height:1.3;">
                  ESG+CTM é a fórmula da Solenis para o sucesso da sustentabilidade
               </h4>
               <p class="text-muted">
                  Na Solenis, a nossa visão é construir um mundo mais seguro e saudável por meio da inovação sustentável. Mas sabemos que não podemos fazer isso sozinhos. Nossos clientes são componentes integrantes da equação que acreditamos que, em última análise, impulsionará mudanças significativas na maneira como abordamos e resolvemos problemas sociais e ambientais em nosso mundo. Como um parceiro de confiança de nossos clientes, entregamos valor ao resolver desafios operacionais e de sustentabilidade com as pessoas certas, a experiência certa e a tecnologia certa. Nossas soluções ajudam a preservar os recursos naturais e promovem ambientes mais limpos e seguros. E quando ajudamos nossos clientes a ter sucesso, todos nós temos sucesso.
               </p>
               <p class="text-muted">
                  Estamos orgulhosos da nossa contribuição para criar um futuro mais sustentável para o nosso planeta, e continuamos comprometidos com a melhoria contínua e a inovação para fortalecer as relações com nossos clientes existentes e encontrar novos clientes para parcerias.
               </p>
               <p class="text-muted">
                  Em 2020, formalizamos nossa abordagem para incorporar a sustentabilidade nos negócios com maior rigor, transparência e responsabilidade. Permanecemos dedicados a rastrear nosso progresso em relação ao meio ambiente, social e de governança (ESG) e a fazer parcerias com nossos clientes (o C na nossa equação) para garantir o sucesso futuro das partes interessadas. Estamos entusiasmados em compartilhar nossas conquistas - e nosso caminho a seguir.
               </p>
            </div>
            <div class="col-lg-4 d-flex align-items-start justify-content-center">
               <img src="{{ asset('assets/img/foto_mao_no_mundo.png') }}"
                  alt="Biodiversidade" class="img-fluid rounded shadow-sm mt-2" style="max-width:100%; height:auto;">
            </div>
         </div>
      </div>
      <div class="container pt-5">
         <div class="row">
            <div>
               <h4 class="fw-bold mb-4" style="line-height:1.3;">
                  Cadeia de valor
               </h4>
               <p class="text-muted">
                  Nossas soluções inovadoras apoiam uma economia circular, melhoram a sustentabilidade das operações do nosso cliente e o desempenho de seus produtos. Em toda a nossa cadeia de valor* - contribuições e resultados - nos concentramos em assegurar que estamos atendendo às necessidades de sustentabilidade de nossos clientes. Quando atendemos a essas expectativas, não apenas impulsionamos a sustentabilidade para nossos clientes, mas também para nós mesmos.
               </p>
               <img src="https://www.solenis.com/globalassets/images/miscellaneous-images/chart-valuechain-1002x699-v03.png"
                  alt="Biodiversidade" class="img-fluid rounded shadow-sm mt-2" style="max-width:100%; height:auto;">
            </div>
         </div>
      </div>
   </section>

   @component('components.footer')
   @endcomponent
</body>