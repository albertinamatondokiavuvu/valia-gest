<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <h1>Editar Notícia</h1>
    
        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
    
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $news->titulo }}" required>
            </div>
    
            <div class="mb-3">
                <label for="capa_image" class="form-label">Foto de Capa</label>
                <input type="file" class="form-control" id="capa_image" name="capa_image">
                @if($news->capa_image)
                    <img src="{{ asset('storage/' . $news->capa_image) }}" class="img-thumbnail mt-2" style="max-width: 150px;">
                @endif
            </div>
    
            <div class="mb-3">
                <label for="imanges_opcional" class="form-label">Fotos Opcionais</label>
                <input type="file" class="form-control" id="imanges_opcional" name="imanges_opcional[]" multiple>
                @if($news->imanges_opcional)
                    @foreach(json_decode($news->imanges_opcional) as $image)
                        <img src="{{ asset('storage/' . $image) }}" class="img-thumbnail mt-2" style="max-width: 150px;">
                    @endforeach
                @endif
            </div>
    

            <div class="mb-3">
                <label for="conteudo" class="form-label">Texto</label>
                <textarea class="form-control" id="conteudo" name="conteudo" rows="5" required>{{ $news->conteudo }}</textarea>
            </div>
    
            <div class="mb-3">
                <label for="date" class="form-label">Data Realizada</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $news->date ? : '' }}">
            </div>
    
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" value="{{ $news->autor }}">
            </div>
    
            <div class="mb-3">
                <label for="resumo" class="form-label">Resumo</label>
                <input type="text" class="form-control" id="resumo" name="resumo" value="{{ $news->resumo }}">
            </div>
    
            <div class="mb-3">
                <label for="estado" class="form-label">estado</label>
                <select class="form-select" id="estado" name="estado">
                    <option value="1" {{ $news->estado ? 'selected' : '' }}>Ativo</option>
                    <option value="0" {{ !$news->estado ? 'selected' : '' }}>Inativo</option>
                </select>
            </div>
    
            <button type="submit" class="btn btn-primary">Atualizar Notícia</button>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
</body>
</html>