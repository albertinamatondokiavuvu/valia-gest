<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Valia.gest Ads</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #27AE60;
            --verde-claro: #2ECC71;
            --verde-escuro: #27AE60;
            --branco: #FFFFFF;
            --cinza: #f8f9fa;
        }


        .news-container {
            max-width: 900px;
            background: var(--branco);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin: 40px auto;
        }

        .news-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 2px solid var(--verde-claro);
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        .news-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--verde-escuro);
        }

        .news-meta {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .news-category {
            background: white;
            color: var(--branco);
            padding: 6px 12px;
            font-size: 0.9rem;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .news-carousel img {
            height: 400px;
            object-fit: contain;
        }

        .news-container {
            max-width: 900px;
            background: var(--branco);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin: auto;
            margin-top: 80px;
            /* Ajuste para evitar sobreposição com o menu */
            min-height: 80vh;
            /* Mantém uma altura mínima para centralização */
        }
        .news-carousel {
        height: 500px; /* Altura fixa para todo o carrossel */
        
    }

    .carousel-inner {
        height: 100%;
        border-radius: 8px;
        overflow: hidden;
    }

    .carousel-item {
        height: 100% !important;
    }

    .news-carousel img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover; /* Mantém proporção e preenche o espaço */
    }

    /* Ajuste para dispositivos móveis */
    @media (max-width: 768px) {
        .news-carousel {
            height: 300px;
        }
    }
    .news-content p {
    overflow-wrap: break-word; 
    word-break: break-word;    
    max-width: 100%;           
    hyphens: auto;            
}
    </style>
</head>

<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top mb-5">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/img/Ativo 16Gest_Ads.png" alt="Valia.Gest Ads" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('welcome')}}">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container news-container" style="margin-top: 8%">
        <div class="news-header">
            <span class="news-category"></span>
            <span class="news-meta">
                <i class="far fa-calendar-alt"></i> {{ $news->date }} |
                <i class="fas fa-user"></i> {{ $news->autor }}
            </span>
        </div>

        <h1 class="news-title text-center" style="text-transform: uppercase">{{ $news->titulo }}</h1>

        @if ($news->imanges_opcional)
        <div id="newsCarousel" class="carousel slide news-carousel" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($news->imanges_opcional as $index => $image)
                    <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="{{ $index }}"
                        class="{{ $index === 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>
    
            <div class="carousel-inner">
                @foreach ($news->imanges_opcional as $index => $image)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/' . $image) }}" class="d-block w-100"
                            alt="Imagem {{ $index + 1 }}">
                    </div>
                @endforeach
            </div>
        </div>
    @endif

        <div class="news-content mt-4">
            <h5 class="text-center">{{$news->resumo}}</h5>
            <p>{!! $news->conteudo !!}</p>
        </div>
    </div>

    <footer class="bg-success text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">&copy; 2025 Valia.Gest Ads. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script para Paginação Responsiva -->


</body>

</html>
