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
                                <img src="{{ asset('assets/img/setor-lavanderia-industrial.jpg') }}" class="d-block w-100" alt="setor-lavanderia-industrial">
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
                <div class="position-absolute text-center p-4">
                    <h1 class="display-3 fw-bold text-uppercase"><span style="color: #0A306E;">Supri</span><span style="color: #572BFE;">nova</span></h1>
                    <p class="lead text-uppercase"><strong>Site de demonstração</strong></p>
                    <div class="d-flex gap-3 justify-content-center lead fw-normal d-none d-md-flex">
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
                    </div>
                </div>
            </section>

            <section id="encontre_distribuidor" class="mt-3">
                <div class="container-fluid bg-dark text-white py-5">
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
            </section>

            <section class="py-5 text-white" style="background-image: url('https://d1f2ieqjc8iqzi.cloudfront.net/s3fs-public/2023-03/Diversey%20Optimal%20Hygiene_V3_0.png?VersionId=xi7yer_DJ6vGvcZcaLwXaZbtNICvBbjI'); background-size: cover; background-position: center;">
                <div class="row align-items-center g-4">

                    <!-- Texto à esquerda -->
                    <div class="col-lg-5 px-5">
                        <h2 class="fw-bold">Setores Industriais</h2>
                        <p class="lead">
                            Nossa linha sustentável de soluções foi projetada para atender às necessidades únicas de indústrias e setores, permitindo que líderes e funcionários comprometidos dentro delas, que estão em uma missão de cuidar do que é valioso, tenham acesso a essas soluções.
                        </p>
                    </div>

                    <!-- Carousel à direita -->
                    <div class="col-lg-7">
                        <div id="carouselSetores" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- Slide 1 -->
                                <div class="carousel-item active h-100">
                                    <div class="row justify-content-center gap-4">
                                        <div class="col-md-4">
                                            <div class="card shadow-sm h-100" style="border: none; border-radius: 0;">
                                                <a href="#" class="text-decoration-none text-dark">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Laticínios</h5>
                                                    </div>
                                                    <img style="border: none; border-radius: 0;" src="https://disparco.com.br/wp-content/uploads/2023/08/industria-de-laticinio-vapor-scaled.jpg" class="card-img-top" alt="laticinios">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card shadow-sm h-100" style="border: none; border-radius: 0;">
                                                <a href="#" class="text-decoration-none text-dark">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Frigorífico</h5>
                                                    </div>
                                                    <img style="border: none; border-radius: 0;" src="https://opresenterural.com.br/wp-content/uploads/2024/09/carne-su%C3%ADna-FOTO-SHUTTERSTOCK.jpg" class="card-img-top" alt="figrorifico">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card shadow-sm h-100" style="border: none; border-radius: 0;">
                                                <a href="#" class="text-decoration-none text-dark">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Saúde</h5>
                                                    </div>
                                                    <img style="border: none; border-radius: 0;" src="#" class="card-img-top" alt="Saúde">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card shadow-sm h-100" style="border: none; border-radius: 0;">
                                                <a href="#" class="text-decoration-none text-dark">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Saúde</h5>
                                                    </div>
                                                    <img style="border: none; border-radius: 0;" src="#" class="card-img-top" alt="Saúde">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 2 -->
                                <div class="carousel-item h-100">
                                    <div class="row justify-content-center gap-4">
                                        <div class="col-md-4">
                                            <div class="card shadow-sm h-100" style="border: none; border-radius: 0;">
                                                <a href="#" class="text-decoration-none text-dark">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Laticínios</h5>
                                                    </div>
                                                    <img style="border: none; border-radius: 0;" src="#" class="card-img-top" alt="Gestão de Instalações">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card shadow-sm h-100" style="border: none; border-radius: 0;">
                                                <a href="#" class="text-decoration-none text-dark">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Frigorífico</h5>
                                                    </div>
                                                    <img style="border: none; border-radius: 0;" src="#" class="card-img-top" alt="Varejo">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card shadow-sm h-100" style="border: none; border-radius: 0;">
                                                <a href="#" class="text-decoration-none text-dark">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Saúde</h5>
                                                    </div>
                                                    <img style="border: none; border-radius: 0;" src="#" class="card-img-top" alt="Saúde">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card shadow-sm h-100" style="border: none; border-radius: 0;">
                                                <a href="#" class="text-decoration-none text-dark">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Saúde</h5>
                                                    </div>
                                                    <img style="border: none; border-radius: 0;" src="#" class="card-img-top" alt="Saúde">
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
        </div>
    </main>

    @component('components.footer')
    @endcomponent
</body>