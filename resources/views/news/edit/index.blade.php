<!DOCTYPE html>
<html lang="en">

<head>
    <title>Valia.gest Ads</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/dashboard/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/dashboard/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/dashboard/css/fullcalendar.css" />
    <link rel="stylesheet" href="/dashboard/css/maruti-style.css" />
    <link rel="stylesheet" href="/dashboard/css/maruti-media.css" class="skin-color" />
</head>

<body>

    <!--Header-part-->
    <div id="header">
        <h1><a href="">Valia.gest Ads</a></h1>
    </div>
    <!--close-Header-part-->


    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav">
            <li class=""><a title="" href="#"><i class="icon icon-user"></i> <span
                        class="text">Perfil</span></a></li>

            <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span
                        class="text">Terminar sessão</span></a></li>
        </ul>
    </div>

    <!--close-top-Header-menu-->

    <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
        <ul>
            <li class="active"><a href="{{ route('home') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a>
            </li>
            <li> <a href="{{ route('news.index') }}"><i class="icon icon-signal"></i> <span>Notícias</span></a> </li>
        </ul>
    </div>
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="{{ route('home') }}" title="Go to Home" class="tip-bottom"><i
                        class="icon-home"></i> Home</a>
                <a href="#">Notícias</a>
                <a href="#">Editar</a>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span6">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Editar notícia</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form action="{{ route('news.update', $news->id) }}" method="POST"
                                enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                @method('PUT')
                                <div class="control-group">
                                    <label class="control-label">Título</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="titulo" value="{{ $news->titulo }}"
                                            required />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Data Realizada</label>
                                    <div class="controls">
                                        <input type="date" class="span11" name="date"
                                            value="{{ $news->date ?: '' }}" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Autor</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="autor"
                                            value="{{ $news->autor }}" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Estado</label>
                                    <div class="controls">
                                        <select id="estado" name="estado">
                                            <option value="1" {{ $news->estado ? 'selected' : '' }}>Ativo</option>
                                            <option value="0" {{ !$news->estado ? 'selected' : '' }}>Inativo
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label for="capa_image" class="control-label">Foto de Capa</label>
                                    <div class="controls">
                                        <input type="file" class="form-control" id="capa_image" name="capa_image">
                                    </div>

                                </div>

                                <div class="control-group">
                                    <label for="imanges_opcional" class="control-label">Fotos Opcionais</label>
                                    <div class="controls">
                                        <input type="file" class="form-control" id="imanges_opcional"
                                            name="imanges_opcional[]" multiple>
                                    </div>


                                </div>

                                <div class="control-group">
                                    <label class="control-label">Resumo</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="resumo"
                                            value="{{ $news->resumo }}" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Texto</label>
                                    <div class="controls">
                                        <textarea class="span11" name="conteudo" rows="5" required>{{ $news->conteudo }}</textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Actualizar" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="span6">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Fotos</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal">
                                <br>
                                <div class="control-group">
                                    <h3>Foto de capa</h3>
                                    @if ($news->capa_image)
                                        <img src="{{ asset('storage/' . $news->capa_image) }}"
                                            class="img-thumbnail mt-2" style="max-width: 150px;">
                                    @endif
                                </div>
                                <br>
                                <div class="control-group">
                                    <h3>Fotos adicionais</h3>
                                    @if ($news->imanges_opcional)
                                        @foreach (json_decode($news->imanges_opcional) as $image)
                                            <img src="{{ asset('storage/' . $image) }}" class="img-thumbnail mt-2"
                                                style="max-width: 150px;">
                                        @endforeach
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

        </div>

    </div>


    <script src="/dashboard/js/excanvas.min.js"></script>
    <script src="/dashboard/js/jquery.min.js"></script>
    <script src="/dashboard/js/jquery.ui.custom.js"></script>
    <script src="/dashboard/js/bootstrap.min.js"></script>
    <script src="/dashboard/js/jquery.flot.min.js"></script>
    <script src="/dashboard/js/jquery.flot.resize.min.js"></script>
    <script src="/dashboard/js/jquery.peity.min.js"></script>
    <script src="/dashboard/js/fullcalendar.min.js"></script>
    <script src="/dashboard/js/maruti.js"></script>
    <script src="/dashboard/js/maruti.dashboard.js"></script>
    <script src="/dashboard/js/maruti.chat.js"></script>


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
