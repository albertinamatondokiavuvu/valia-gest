<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Valia.gest Ads</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
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
        <a href="{{route('welcome')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">Valia.gest Ads</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('welcome')}}" class="nav-item nav-link active">Home</a>
 
            </div>


        </div>
    </nav>
    <!-- Navbar End -->
    <div class="main_title container" style="margin-top:5%;">
        <nav class="col-lg-9 mx-auto">
            <div class="box_list wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                @if ($news->imanges_opcional)
                    <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
                        <!-- Indicadores -->
                        <div class="carousel-indicators">
                            @foreach (json_decode($news->imanges_opcional) as $index => $image)
                                <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="{{ $index }}" 
                                        class="{{ $index === 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $index + 1 }}"></button>
                            @endforeach
                        </div>
    
                        <!-- Carrossel de imagens -->
                        <div class="carousel-inner">
                            @foreach (json_decode($news->imanges_opcional) as $index => $image)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <div class="position-relative rounded overflow-hidden" 
                                         style="max-width: 100%; height: 400px; margin: auto;">
                                        <img src="{{ asset('storage/' . $image) }}" class="d-block w-100 h-100" 
                                             style="object-fit: contain; max-height: 400px;" alt="Image {{ $index + 1 }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
    
                        <!-- Controles de navegação -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                @endif
            </div>
    
            <div style="margin: 20px">
                <div class="mb-2 pb-1 rounded-0 rounded">
                    <span class="badge badge-warning rounded-0 text-uppercase font-weight-semi-bold float-left p-2">
                        Governo
                    </span>
                    <span class="text-secondary p-4"><b>{{ $news->date }}</b></span>
                    <span class="text-body text-secondary float-right pr-2 pt-1">
                        <small>Autor: {{ $news->autor }}</small>
                    </span>
                </div>
    
                <h4><b>{{ $news->titulo }}</b></h4>
            </div>
    
            <div class="form-group">
                <div class="form-group" style="width: 100%;">
                    <p style="text-align: justify;">{{ $news->conteudo }}</p>
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

<!-- Template Javascript -->
<script src="/js/main.js"></script>
<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            items: 1, // Mostra uma imagem por vez
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000, // Tempo entre as transições
            autoplayHoverPause: true // Pausa ao passar o mouse
        });
    });
</script>
</body>

</html>
