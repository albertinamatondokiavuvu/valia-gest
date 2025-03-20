<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Valia.gest Ads - Editar Notícia</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/dashboard/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/dashboard/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/dashboard/css/maruti-style.css" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- Mantenha o mesmo estilo da página de criação -->
    <style>
        .form-section {
            background: #fff;
            border-radius: 4px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            padding: 20px;
        }

        .section-title {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            margin: 0 0 20px 0;
            font-size: 16px;
            font-weight: 600;
        }

        .file-upload {
            border: 2px dashed #dcdcdc;
            border-radius: 4px;
            padding: 15px;
            text-align: center;
            margin-bottom: 15px;
        }

        .preview-thumbnail {
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin: 5px;
            border-radius: 3px;
            border: 1px solid #eee;
        }

        .editor-wrapper {
            border: 1px solid #ddd;
            border-radius: 4px;
            min-height: 400px;
            padding: 10px;
        }

        .form-actions {
            background: #f5f5f5;
            padding: 20px;
            margin-top: 25px;
            border-top: 1px solid #e0e0e0;
        }

        .control-group {
            margin-bottom: 15px;
        }

        .control-label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
            color: #444;
        }
        #header {
    background-color: #2e363f !important;
}

#user-nav .nav > li > a {
    color: white !important;
}

#user-nav .nav > li > a:hover {
    color: #ccc !important; /* Cor ao passar o mouse */
}
    </style>
</head>

<body>
    <div id="header">
        <h1><a href="">Valia.gest Ads</a></h1>
    </div>

    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav">
           
            <li class=""><a title="" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon icon-share-alt"></i> <span
                        class="text">Terminar sessão</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form></li>
        </ul>
    </div>
    <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
        <ul>
            <li class="active"><a href="{{ route('home') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a>
            </li>
            <li> <a href="{{ route('news.index') }}"><i class="icon icon-signal"></i> <span>Notícia</span></a> </li>
        </ul>
    </div>
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> 
                <a href="{{ route('home') }}" class="tip-bottom"><i class="icon-home"></i> Home</a>
                <a href="{{ route('news.index') }}">Notícias</a>
                <a href="#">Editar</a>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title">
                            <h5>Editar Notícia</h5>
                        </div>
                        
                        <div class="widget-content">
                            <form action="{{ route('news.update', $news->slug) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                
                                <div class="row-fluid">
                                    <!-- Coluna Esquerda -->
                                    <div class="span8">
                                        <div class="form-section">
                                            <div class="control-group">
                                                <label class="control-label">Título da Notícia</label>
                                                <div class="controls">
                                                    <input type="text" class="span12" name="titulo" 
                                                        value="{{ old('titulo', $news->titulo) }}" required>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">Resumo</label>
                                                <div class="controls">
                                                    <input type="text" class="span12" name="resumo" 
                                                        value="{{ old('resumo', $news->resumo) }}">
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">Conteúdo</label>
                                                <div class="editor-wrapper">
                                                    <div id="editor" class="border rounded p-2 w-100" style="min-height: 373px;">
                                                        {!! old('conteudo', $news->conteudo) !!}
                                                    </div>
                                                </div>
                                                <input type="hidden" name="conteudo" id="conteudo" value="{{ old('conteudo', $news->conteudo) }}">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Coluna Direita -->
                                    <div class="span4">
                                        <div class="form-section">
                                            <h4 class="section-title">Configurações</h4>
                                            
                                            <div class="control-group">
                                                <label class="control-label">Data de Publicação</label>
                                                <input type="date" class="span12" name="date" 
                                                value="{{ old('date', \Carbon\Carbon::parse($news->date)->format('Y-m-d')) }}" required>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">Autor</label>
                                                <input type="text" class="span12" name="autor" 
                                                    value="{{ old('autor', $news->autor) }}">
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">Status</label>
                                                <select class="span12" name="estado">
                                                    <option value="1" {{ $news->estado ? 'selected' : '' }}>Ativo</option>
                                                    <option value="0" {{ !$news->estado ? 'selected' : '' }}>Inativo</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-section">
                                            <h4 class="section-title">Imagens</h4>
                                            
                                            <div class="file-upload">
                                                <div class="control-group">
                                                    <label class="control-label">Capa Principal</label>
                                                    @if($news->capa_image)
                                                        <div class="mb-2">
                                                            <img src="{{ asset('storage/' . $news->capa_image) }}" 
                                                                 class="preview-thumbnail">
                                                        </div>
                                                    @endif
                                                    <input type="file" name="capa_image">
                                                    <div class="preview-container" id="capa-preview"></div>
                                                </div>
                                            </div>

                                            <div class="file-upload">
                                                <div class="control-group">
                                                    <label class="control-label">Galeria</label>
                                                    @if($news->imanges_opcional)
                                                        <div class="mb-2">
                                                            @foreach ($news->imanges_opcional as $index => $image)
                                                                <img src="{{ asset('storage/' . $image) }}" 
                                                                     class="preview-thumbnail">
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                    <input type="file" name="imanges_opcional[]" multiple>
                                                    <div class="preview-container" id="galeria-preview"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary btn-large">
                                        <i class="icon icon-save"></i> Atualizar Notícia
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mantenha os mesmos scripts -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        // Inicialize o editor com conteúdo existente
        var quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [ { 'size': [] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ 'color': [] }],
                    [{ 'align': [] }],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                    ['clean']
                ]
            }
        });
        
        // Defina o conteúdo existente no editor
        quill.root.innerHTML = document.querySelector('#conteudo').value;

        document.querySelector('form').onsubmit = function() {
            document.querySelector('#conteudo').value = quill.root.innerHTML;
        };
    </script>
</body>
</html>