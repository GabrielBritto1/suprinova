<body>
    @component('components.menu')
    @endcomponent

    <section id="about" class="py-5" style="background-color:#f6f6f7">
        <div class="container">
            <div class="row g-4">
                <!-- Texto -->
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                    <div class="mb-4">
                        <h2 class="fw-bold text-dark featured alt">A Suprinova</h2>
                        <p class="text-muted">
                            Oferecemos soluções em higiene profissional que proporcionam saúde e bem estar a seus colaboradores e clientes, enquanto otimizamos seus custos de operação.
                        </p>
                    </div>

                    <!-- Cards de destaques -->
                    <div class="d-flex flex-column gap-4">
                        <!-- Diagnóstico -->
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="bi bi-map fs-1 mx-3" style="background-image: linear-gradient(to right, #0A306E, #572BFE); background-clip: text; -webkit-text-fill-color: transparent;"></i>
                            </div>
                            <div>
                                <h5 class="mb-2 fw-semibold">Diagnóstico</h5>
                                <p class="mb-0 text-muted">
                                    Analisamos sua operação para identificar as oportunidades de melhoria e ganhos de produtividade.
                                </p>
                            </div>
                        </div>

                        <!-- Soluções -->
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="bi bi-people fs-1 mx-3" style="background-image: linear-gradient(to right, #0A306E, #572BFE); background-clip: text; -webkit-text-fill-color: transparent;"></i>
                            </div>
                            <div>
                                <h5 class="mb-2 fw-semibold">Soluções customizadas</h5>
                                <p class="mb-0 text-muted">
                                    Temos a melhor equipe de especialistas e trabalhamos com os melhores produtos.
                                </p>
                            </div>
                        </div>

                        <!-- Pós-venda -->
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="bi bi-graph-up-arrow fs-1 mx-3" style="background-image: linear-gradient(to right, #0A306E, #572BFE); background-clip: text; -webkit-text-fill-color: transparent;"></i>
                            </div>
                            <div>
                                <h5 class="mb-2 fw-semibold">Acompanhamento e assistência técnica pós-venda</h5>
                                <p class="mb-0 text-muted">
                                    Acompanhamos seus resultados, realizando manutenção dos equipamentos que instalamos. Reciclamos suas equipes para garantir os padrões acordados no tempo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Imagem -->
                <div class="col-12 col-md-6 text-center">
                    <img src="http://suprinova.com.br/wp-content/uploads/2020/06/shutterstock_1734599108-600x600.jpg" alt="Suprinova" class="img-fluid rounded shadow-sm">
                </div>
            </div>
        </div>
    </section>

    @component('components.footer')
    @endcomponent
</body>