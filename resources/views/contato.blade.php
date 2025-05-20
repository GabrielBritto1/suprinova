<body>
   @component('components.menu')
   @endcomponent

   <div class="container">
      <div class="row mt-5">
         <div class="col-12 col-md-6">
            <h1 class="text-uppercase fw-bold">Entre em contato</h1>
            <p class="text-muted">Preencha o formulário abaixo e entraremos em contato o mais breve possível.</p>
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
               <div class="col-12">
                  <button type="submit" class="btn btn-primary consultor-btn fw-bold text-uppercase">Enviar</button>
               </div>
            </form>
         </div>
      </div>

      <div class="row mt-5">
         <div class="col-12 col-md-6">
            <h1 class="text-uppercase fw-bold">Entre em contato caso queira trabalhar conosco</h1>
            <p class="text-muted">Preencha o formulário abaixo e entraremos em contato o mais breve possível.</p>
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
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone" placeholder="Digite seu telefone">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Digite seu email">
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="mb-3">
                     <label for="mensagem" class="form-label">Envie seu curriculo</label>
                     <input type="file" class="form-control" id="curriculo" placeholder="Envie seu curriculo">
                  </div>
               </div>
               <div class="col-12">
                  <button type="submit" class="btn btn-primary consultor-btn fw-bold text-uppercase">Enviar</button>
               </div>
            </form>
         </div>

         @component('components.footer')
         @endcomponent
</body>