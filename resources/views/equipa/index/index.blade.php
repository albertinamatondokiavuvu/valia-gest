<!DOCTYPE html>
<html lang="en">

<head>
    <title>Valia.gest Ads</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="dashboard/css/bootstrap.min.css" />
    <link rel="stylesheet" href="dashboard/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="dashboard/css/fullcalendar.css" />
    <link rel="stylesheet" href="dashboard/css/maruti-style.css" />
    <link rel="stylesheet" href="dashboard/css/maruti-media.css" class="skin-color" />
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
           

            <li class="">

                <a title="" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                    <i class="icon icon-share-alt"></i> <span class="text">Terminar sessão</span>
                </a>
            </li>

        </ul>
    </div>

    <!--close-top-Header-menu-->

    <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
        <ul>
            <li class="active"><a href="{{ route('home') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a>
            </li>
            <li> <a href="{{ route('equipas.index') }}"><i class="icon icon-signal"></i> <span>Equipa</span></a> </li>
        </ul>
    </div>
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb">
                <a href="{{ route('home') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
                <a href="#">Membros</a>
                <a href="#">Listar</a>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <a href="{{ route('equipas.create') }}" class="btn btn-primary mb-3">Adicionar Membro do valia-gest</a>
                    <div class="widget-box">

                        <div class="widget-title">
                            <span class="icon"><i class="icon-th"></i></span>
                            <h5>Listar Membros</h5>
                        </div>
                        <div class="widget-content nopadding">

                            <table class="table table-bordered data-table">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Função</th>
                                        <th>Opções</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($equipas as $item)
                                        <tr style="aling-iten:cenetr;">
                                            <td>{{ $item->nome }}</td>
                                            <td>{{ $item->função }}</td>
                                            <td>
                                                <a href="{{ route('equipas.edit', $item->slug) }}"
                                                    class="btn btn-warning">Editar</a>
                                                <form action="{{ route('equipas.destroy', $item->slug) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
  

    <script src="dashboard/js/excanvas.min.js"></script>
    <script src="dashboard/js/jquery.min.js"></script>
    <script src="dashboard/js/jquery.ui.custom.js"></script>
    <script src="dashboard/js/bootstrap.min.js"></script>
    <script src="dashboard/js/jquery.flot.min.js"></script>
    <script src="dashboard/js/jquery.flot.resize.min.js"></script>
    <script src="dashboard/js/jquery.peity.min.js"></script>
    <script src="dashboard/js/fullcalendar.min.js"></script>
    <script src="dashboard/js/maruti.js"></script>
    <script src="dashboard/js/maruti.dashboard.js"></script>
    <script src="dashboard/js/maruti.chat.js"></script>


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
