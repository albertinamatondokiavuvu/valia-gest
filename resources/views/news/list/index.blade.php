<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Valia.gest Ads</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<div>


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">Valia.gest Ads</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sobre nós</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="#expertise" class="dropdown-item">Expertise</a>
                        <a href="#servicos" class="dropdown-item">Serviços</a>
                        <a href="#processos" class="dropdown-item">Processos </a>
                        <a href="#beneficios" class="dropdown-item">Benefícios</a>
                        <a href="#sucessos" class="dropdown-item">Casos de sucesso</a>
                        <a href="#equipas" class="dropdown-item">Equipa </a>
                    </div>
                </div>
                <a href="#noticia" class="nav-item nav-link">Notícias</a>
                <a href="#contactos" class="nav-item nav-link">Contacto</a>
            </div>


        </div>
    </nav>
    <!-- Navbar End -->



    <div class="main_title container">
        <nav class="col-lg-9 mx-auto d-flex flex-column">
            <div class="box_list wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <div class="owl-carousel owl-theme">
                    @if (isset($news->imagens_opcional) && is_string($news->imagens_opcional))
                        @php
                            // Tente decodificar o JSON
                            $imagens = json_decode($news->imagens_opcional, true);
                        @endphp
    
                        @if (is_array($imagens))
                            @foreach ($imagens as $image)
                                <div class="item">
                                    <img src="{{ Storage::url(trim($image)) }}" class="img-fluid" alt="Imagem" style="width: 100%; height: auto;">
                                </div>
                            @endforeach
                        @else
                            <p>No valid images available.</p>
                        @endif
                    @else
                        <p>No images available.</p>
                    @endif
                </div>
    
                <div style="margin: 20px">
                    <div class="mb-2 pb-1 rounded-0 rounded">
                        <span class="badge badge-warning rounded-0 text-uppercase font-weight-semi-bold float-left p-2">Governo</span>
                        <span class="text-secondary p-4"><b>23-10-2024</b></span>
                        <span class="text-body text-secondary float-right pr-2 pt-1"><small>autor: ******</small></span>
                    </div>
                    <h3 style="border-top: 1px solid rgb(229, 229, 229)" class="pt-4 mt-2">
                        CUANZA-SUL
                    </h3>
                    <h4><b>Programa KWENDA com impacto positivo em sete municípios</b></h4>
                </div>
            </div>
    
            <div class="form-group">
                <div class="form-group" style="width: 100%;">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim soluta distinctio
                        consectetur assumenda perspiciatis, esse eveniet non quae ipsum labore modi ex
                        doloremque odio aspernatur quam quaerat consequuntur eos eius!</p>
                </div>
            </div>
        </nav>
    </div>
    

    
    
    
</div>
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Valia.gest Ads</a>, Todos os direitos reservados.

                </div>

            </div>
        </div>


    </div>
    <!-- Footer End -->
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/lib/wow/wow.min.js"></script>
<script src="/lib/easing/easing.min.js"></script>
<script src="/lib/waypoints/waypoints.min.js"></script>
<script src="/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 1, // Mostra uma imagem por vez
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000, // Tempo entre as transições
                autoplayHoverPause: true // Pausa ao passar o mouse
            });
        });
    </script>
<!-- Template Javascript -->
<script src="/js/main.js"></script>
</body>

</html>
