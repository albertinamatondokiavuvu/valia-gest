<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Valia.gest Ads - Adicionar Membro da Valia-gest</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/dashboard/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/dashboard/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/dashboard/css/maruti-style.css" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <style>
        .form-section {
            background: #fff;
            border-radius: 4px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
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

        #user-nav .nav>li>a {
            color: white !important;
        }

        #user-nav .nav>li>a:hover {
            color: #ccc !important;
            /* Cor ao passar o mouse */
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
            <li> <a href="{{ route('equipas.index') }}"><i class="icon icon-signal"></i> <span>Equipa</span></a> </li>
        </ul>
    </div>
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ route('home') }}" title="Go to Home" class="tip-bottom"><i
                        class="icon-home"></i> Home</a>
                <a href="{{ route('equipas.index') }}">Equipa</a>
                <a href="#">Adicionar</a>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title">
                            <h5>Cadastrar membro</h5>
                        </div>

                        <div class="widget-content">
                            <form action="{{ route('equipas.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row-fluid">
                                    <!-- Coluna Esquerda -->
                                    <div class="span8">
                                      


                                        <div class="form-section">
                                            <h4 class="section-title">Perfil</h4>

                                            <div class="control-group">
                                                <label class="control-label">Nome completo</label>
                                                <input type="text" class="span12" placeholder="Primeiro e último nome" name="nome" required>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">Função</label>
                                                <input type="text" class="span12" name="funcao"
                                                    placeholder="area de especialidade">
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Descrição</label>
                                                <input type="text" class="span12" name="resumo"
                                                    placeholder="area de especialidade">
                                            </div>
                                            
                                        </div>

                                    </div>

                                    <!-- Coluna Direita -->
                                    <div class="span4">
                                        <div class="form-section">
                                            <h4 class="section-title">Perfil</h4>

                                            <div class="file-upload">
                                                <div class="control-group">
                                                    <label class="control-label">Foto de Capa</label>
                                                    <input type="file" name="capa_image" required>
                                                    <div class="preview-container" id="capa-preview"></div>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Status</label>
                                                <select class="span12" name="estado">
                                                    <option value="1">Ativo</option>
                                                    <option value="0">Inativo</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary btn-large">
                                        <i class="icon icon-save"></i> Cadastrar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{
                        'size': []
                    }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{
                        'color': []
                    }],
                    [{
                        'align': []
                    }],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                    ['clean']
                ]
            }
        });
        document.querySelector('form').onsubmit = function() {
            document.querySelector('#conteudo').value = quill.root.innerHTML;
        };
    </script>
    <script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage(newURL) {

            // if url is empty, skip the menu dividers and reset the menu selection to default
            if (newURL != "") {

                // if url is "-", it is this page -- reset the menu:
                if (newURL == "-") {
                    resetMenu();
                }
                // else, send page to designated URL            
                else {
                    document.location.href = newURL;
                }
            }
        }

        // resets the menu selection upon entry to this page:
        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>
</body>

</html>
