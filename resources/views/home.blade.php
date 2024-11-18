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
    <li class="" ><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Perfil</span></a></li>

    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Terminar sessão</span></a></li>
  </ul>
</div>

<!--close-top-Header-menu-->

<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a><ul>
    <li class="active"><a href="{{route('home')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="{{route('news.index')}}"><i class="icon icon-signal"></i> <span>Notícias</span></a> </li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
  <div class="container align-iten-center" style="margin-bottom: 13.5%; margin-top:5%">
    
      <div class="widget-box">
        <div class="widget-content">
            <h1 style="text-align: center">BEM VINDO AO PORTAL DO VALIA.GETS ADS</h1>
            <button class="btn btn-inverse btn-large"><a style="text-decoration: none; color:white;" href="{{route('news.index')}}">Listar notícias</a></button>
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
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
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
