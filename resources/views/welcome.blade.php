<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valia.Gest Ads</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .hero {
            height: 70vh;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/img/im.png') center/cover;
        }

        .service-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            background: rgba(39, 174, 96, 0.1);
        }
    </style>
</head>

<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/img/Ativo 16Gest_Ads.png" alt="Valia.Gest Ads" height="50">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Sobre Nós</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gestao-trafego">Gestão de Tráfego</a></li>
                    <li class="nav-item"><a class="nav-link" href="#digital-strategies">Estratégias</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Equipa</a></li>
                    <li class="nav-item"><a class="nav-link" href="#news">Notícias</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero d-flex align-items-center text-white">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-4">Valia.Gest Ads</h1>
            <p class="lead mb-4">Potencialize seus resultados com gestão especializada de tráfego pago no Meta Ads e
                Google Ads.</p>
            <a href="#contact" class="btn btn-success btn-lg">Solicite uma proposta</a>
        </div>
    </section>

    <!-- Sobre Nós -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Sobre Nós</h2>
            <p class="lead text-center">Somos uma startup fundada em 2022, desenvolvemos campanhas de anúncios na
                internet para pequenos negócios
                e empreendedores, com foco na obtenção de resultados.</p>
        </div>
    </section>

    <!-- Serviços -->
    <section id="services" class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center mb-5">Nossos Serviços</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="service-icon mb-3">
                        <i class="fas fa-search fa-2x text-success"></i>
                    </div>
                    <h4>Google Ads</h4>
                    <p class="text-muted">Aumente sua visibilidade com campanhas de busca, display e remarketing no
                        Google Ads.</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="service-icon mb-3">
                        <i class="fa-brands fa-facebook-f fa-2x text-success"></i>
                    </div>
                    <h4>Facebook Ads</h4>
                    <p class="text-muted">Alcance seu
                        público-alvo no
                        Facebook com
                        anúncios
                        estratégicos para
                        gerar leads
                        qualificados.</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="service-icon mb-3">
                        <i class="fa-brands fa-instagram fa-2x text-success"></i>
                    </div>
                    <h4>Instagram Ads</h4>
                    <p class="text-muted">Alcance seu público-alvo com
                        Anúncios dentro da rede social
                        Instagram com diversos
                        formatos disponíveis; foto,
                        fotos em carrossel, vídeo,
                        stories.
                    </p>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="service-icon mb-3">
                        <i class="fa-brands fa-tiktok fa-2x text-success"></i>
                    </div>
                    <h4>Tik Tok Ads</h4>
                    <p class="text-muted">Alcance o seu públicoalvo no TikTok com
                        anúncios criativos e
                        interativos para
                        maximizar a visibilidade
                        e aumentar o
                        engajamento.</p>
                </div>

            </div>
        </div>
    </section>


  <!-- Gestão de Tráfego - Versão Compacta -->
<section id="gestao-trafego" class="py-5 bg-light">
    <div class="container"> 
         <h2 class="text-center mb-5">Gestão de Tráfego </h2>

        <div class="row g-4 align-items-center">
            <!-- Imagem -->
            <div class="col-lg-6 order-lg-2 text-center">
                <img src="img/1238_Social-Media-e-Gestao-de-Trafego_M.webp" alt="Gestão de Tráfego"
                    class="img-fluid rounded-3 shadow" style="max-width: 500px;">
            </div>

            <!-- Lista Simplificada -->
            <div class="col-lg-6 order-lg-1">
                <div class="row g-3">
                    <!-- Item 1 -->
                    <div class="col-md-6">
                        <div class="d-flex align-items-start p-3 bg-white rounded-3 h-100">
                            <i class="fas fa-rocket text-success fs-4 me-3"></i>
                            <div>
                                <p class="text-muted small mb-0">Amplie o número de visitantes no seu website</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="col-md-6">
                        <div class="d-flex align-items-start p-3 bg-white rounded-3 h-100">
                            <i class="fas fa-chart-line text-success fs-4 me-3"></i>
                            <div>
                                <p class="text-muted small mb-0">Aumente a taxa de conversão na sua loja online.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="col-md-6">
                        <div class="d-flex align-items-start p-3 bg-white rounded-3 h-100">
                            <i class="fas fa-comments text-success fs-4 me-3"></i>
                            <div>
                                <p class="text-muted small mb-0">Receba mais mensagens de potenciais clientes.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="col-md-6">
                        <div class="d-flex align-items-start p-3 bg-white rounded-3 h-100">
                            <i class="fas fa-bullhorn text-success fs-4 me-3"></i>
                            <div>
                                <p class="text-muted small mb-0">Melhore a visibilidade e notoriedade da sua marca.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="col-md-6">
                        <div class="d-flex align-items-start p-3 bg-white rounded-3 h-100">
                            <i class="fas fa-bolt text-success fs-4 me-3"></i>
                            <div>
                                <p class="text-muted small mb-0">Obtenha resultados mais rapidamente.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 6 -->
                    <div class="col-md-6">
                        <div class="d-flex align-items-start p-3 bg-white rounded-3 h-100">
                            <i class="fas fa-chart-pie text-success fs-4 me-3"></i>
                            <div>
                                <p class="text-muted small mb-0">Aumente a sua faturação.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 7 -->
                    <div class="col-md-6">
                        <div class="d-flex align-items-start p-3 bg-white rounded-3 h-100">
                            <i class="fas fa-trophy text-success fs-4 me-3"></i>
                            <div>
                                <p class="text-muted small mb-0">Destaque-se da concorrência.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 8 -->
                    <div class="col-md-6">
                        <div class="d-flex align-items-start p-3 bg-white rounded-3 h-100">
                            <i class="fas fa-store text-success fs-4 me-3"></i>
                            <div>
                                <p class="text-muted small mb-0">Receba mais clientes nas suas instalações físicas.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="text-center mt-4">
                    <a target="_blank" href="https://wa.me/244941079830?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20gestão%20de%20tráfego!" class="btn btn-success px-4">
                        <i class="fas fa-comments me-2"></i>Fale com Especialista
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Estratégias Digitais -->
    <section id="digital-strategies" class="py-5  bg-white">
        <div class="container">
            <h2 class="text-center mb-4">Estratégias Digitais</h2>
            <div class="accordion" id="strategiesAccordion">
                <!-- Primeira Estratégia -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Estratégia 1: Diagnóstico Inicial
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#strategiesAccordion">
                        <div class="accordion-body">
                            Avaliamos seu negócio, mercado e concorrência para definir a melhor estratégia.
                        </div>
                    </div>
                </div>
                <!-- Segunda Estratégia -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Estratégia 2: Planeamento Estratégico
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#strategiesAccordion">
                        <div class="accordion-body">
                            Desenvolvemos um plano personalizado alinhado aos seus objetivos de negócio.
                        </div>
                    </div>
                </div>
                <!-- Terceira Estratégia -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Estratégia 3: Implementação e Otimização
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#strategiesAccordion">
                        <div class="accordion-body">
                            Lançamos suas campanhas e as otimizamos continuamente para máximo desempenho.
                        </div>
                    </div>
                </div>
                <!-- Quarta Estratégia -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFoour" aria-expanded="false" aria-controls="collapseFoour">
                            Estratégia 4: Relatórios e Transparência
                        </button>
                    </h2>
                    <div id="collapseFoour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#strategiesAccordion">
                        <div class="accordion-body">
                            Fornecemos relatórios detalhados e reuniões regulares para discutir resultados e
                            estratégias.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Por que escolher -->
    <section id="why-choose-us" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Por que escolher-nos?</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Economia de Tempo</h5>
                            <p class="card-text text-muted">Deixe a gestão de anúncios conosco e foque no core do seu
                                negócio.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Maior ROI</h5>
                            <p class="card-text text-muted">Otimizamos suas campanhas para maximizar o retorno sobre o
                                investimento em publicidade.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Escalabilidade</h5>
                            <p class="card-text text-muted">Nossas estratégias crescem junto com seu negócio,
                                adaptando-se às suas
                                necessidades.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Transparência Total</h5>
                            <p class="card-text text-muted">Acesso completo às suas campanhas e relatórios detalhados
                                sobre o
                                desempenho.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nossa Equipa -->
    <section id="team" class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center mb-5">Nossa Equipa</h2>
            <div class="row justify-content-center g-4">
                <!-- Membro 1 -->
                @foreach ($equipa as $equipa)
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <img src="{{ asset('storage/' . $equipa->capa_image) }}" class="rounded-circle mb-3"
                                    alt="Membro da Equipa" style="width: 150px; height: 150px; object-fit: cover;">
                                <h5 class="card-title mb-2">{{ $equipa->nome }}</h5>
                                <p class="text-success fw-bold mb-3">{{ $equipa->funcao }}</p>
                                <p class="text-muted">{!! Str::limit($equipa->resumo, 70) !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Seção de Notícias (Paginação Responsiva) -->
    <section id="news" class="py-2 bg-light">
        <div class="container col-10 mx-auto text-center">
            <h2 class="mb-3">Últimas Notícias</h2>

            <div id="newsContainer">
                <div class="row g-4 justify-content-center" id="newsRow">
                    <!-- g-4 cria espaçamento entre os cards -->
                    @foreach ($news as $newsItem)
                        <div class="col-lg-4 col-md-6 col-12 px-2"> <!-- px-2 adiciona margem entre os cards -->
                            <div class="card shadow-sm w-100 h-100 d-flex flex-column">
                                <img class="card-img-top" src="{{ asset('storage/' . $newsItem->capa_image) }}"
                                    alt="{{ $newsItem->titulo }}" height="200" style="object-fit: cover;">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $newsItem->titulo }}</h5>
                                    <p class="card-text flex-grow-1">{!! Str::limit($newsItem->resumo, 70) !!}</p>
                                    <a href="{{ route('list.news', $newsItem->slug) }}"
                                        class="btn btn-primary mt-auto">Ler mais</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Paginação -->
            <nav class="mt-3">
                <ul class="pagination justify-content-center flex-nowrap gap-2">
                    <li class="page-item"><a class="page-link" href="#" id="prevPage">&lt;</a></li>
                    <span id="paginationNumbers" class="d-flex gap-1"></span>
                    <li class="page-item"><a class="page-link" href="#" id="nextPage">&gt;</a></li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- Contato -->
    <section id="contact" class="py-5 bg-white">
        <div class="container col-10">
            <h2 class="text-center mb-5">Entre em Contato</h2>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="border overflow-hidden p-4">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Nome">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" id="phone" name="phone"
                                    placeholder="Telefone">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="Assunto">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Mensagem"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Informações de Contato -->
    <section id="contact-info" class="py-5 bg-light">
        <div class="container text-center">
            <div class="row justify-content-center align-items-center">
                <!-- Foto Circular -->
                <div class="col-md-3 mb-4 d-flex justify-content-center">
                    <div>
                        <img src="img/team-1.jpg" class="rounded-circle" alt="Samuel Rolo"
                            style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                </div>

                <!-- E-mail -->
                <div class="col-md-3 mb-4">
                    <div>
                        <i class="fas fa-envelope fa-2x mb-2 text-success"></i>
                        <h4>Email</h4>
                        <p>info@valiagestads.pt</p>
                    </div>
                </div>

                <!-- Telefone -->
                <div class="col-md-3 mb-4">
                    <div>
                        <i class="fas fa-phone-alt fa-2x mb-2 text-success"></i>
                        <h4>Contacto</h4>
                        <p>+351 123-456-789</p>
                    </div>
                </div>

                <!-- Endereço -->
                <div class="col-md-3 mb-4">
                    <div>
                        <i class="fas fa-map-marker-alt fa-2x mb-2 text-success"></i>
                        <h4>Localização</h4>
                        <p>Rua Exemplo, 123, Lisboa</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-success text-white py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; 2025 Valia.Gest Ads. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script para Paginação Responsiva -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let currentPage = 0;
            const newsRow = document.getElementById("newsRow");
            const cards = [...newsRow.children]; // Pegando apenas os cards da seção de notícias
            const paginationNumbers = document.getElementById("paginationNumbers");
            const prevPage = document.getElementById("prevPage");
            const nextPage = document.getElementById("nextPage");

            function updatePagination() {
                let itemsPerPage = window.innerWidth >= 992 ? 3 : window.innerWidth >= 768 ? 2 : 1;
                let chunkedItems = [];

                // Divide os cards em páginas
                for (let i = 0; i < cards.length; i += itemsPerPage) {
                    chunkedItems.push(cards.slice(i, i + itemsPerPage));
                }

                // Limpa o container e adiciona as novas páginas
                newsRow.innerHTML = "";
                chunkedItems.forEach((chunk, index) => {
                    let div = document.createElement("div");
                    div.className = "news-page " + (index === 0 ? "d-flex" : "d-none");
                    div.style.width = "100%";
                    div.style.flexWrap = "wrap";
                    chunk.forEach(card => div.appendChild(card));
                    newsRow.appendChild(div);
                });

                updatePaginationButtons(chunkedItems.length);
            }

            function updatePaginationButtons(totalPages) {
                paginationNumbers.innerHTML = "";
                for (let i = 0; i < totalPages; i++) {
                    let pageItem = document.createElement("li");
                    pageItem.className = "page-item";
                    pageItem.innerHTML = `<a class="page-link page-number" href="#" data-index="${i}">${i + 1}</a>`;
                    paginationNumbers.appendChild(pageItem);
                }

                let pages = document.querySelectorAll(".news-page");
                let pageLinks = document.querySelectorAll(".page-number");

                function showPage(index) {
                    pages.forEach((page, i) => {
                        page.classList.toggle("d-flex", i === index);
                        page.classList.toggle("d-none", i !== index);
                    });
                    currentPage = index;
                }

                pageLinks.forEach(link => {
                    link.addEventListener("click", function(e) {
                        e.preventDefault();
                        showPage(parseInt(this.dataset.index));
                    });
                });

                prevPage.onclick = (e) => {
                    e.preventDefault();
                    if (currentPage > 0) showPage(currentPage - 1);
                };

                nextPage.onclick = (e) => {
                    e.preventDefault();
                    if (currentPage < pages.length - 1) showPage(currentPage + 1);
                };
            }

            window.addEventListener("resize", updatePagination);
            updatePagination();
        });
    </script>
</body>

</html>
