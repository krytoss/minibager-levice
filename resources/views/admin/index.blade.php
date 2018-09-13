<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('css/bootstrap.min 2.css') }}" />
<link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-grid.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
<link rel="stylesheet" href="{{ asset('css/matrix-style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/matrix-media.css') }}" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/jquery.gritter.css') }}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="/editGallery">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class=""><a title="" href="/logout"><i class="icon icon-share-alt"></i> <span class="text">Odhlásiť sa</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="/editGallery"><i class="icon icon-home"></i> <span>Správca galérie</span></a> </li>
    <li><a href="/logout"><i class="icon icon-home"></i> <span>Odhlásiť sa</span></a> </li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="/editGallery" title="Smerovať do: Správca galérie" class="tip-bottom"><i class="icon-home"></i> Správca galérie</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
<!--End-Action boxes-->    

    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Pridať obrázky do galérie</h5>
        </div>
        <div class="widget-content grey-bg" >
          <div class="row-fluid">
            <div class="span12">
              
              <form action="{{ url('imageUpload') }}" class="dropzone" id="addImages">
                
                {{ csrf_field() }}
              </form>


              <div id="gallery-images" class="row" style="margin-top: 50px">
                <h2 style="width: 100%; margin-bottom: 20px; text-align: center;">Kliknutím na obrázok sa daný obrázok vymaže</h2>
                @foreach($images as $img)
                  <div class="col col-md-2 img" style="margin-top: 20px">
                    <a class="delete-link" href="delete/{{ $img->id }}">
                      <img src="{{ $img->file_path }}" style="width: 100%">
                      <div class="delete-cross">X</div>
                    </a>
                  </div>
                @endforeach
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="{{ asset('js/excanvas.min.js') }}"></script> 
<script src="{{ asset('js/jquery.min.js') }}"></script> 
<script src="{{ asset('js/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('js/bootstrap.min 2.js') }}"></script> 
<script src="{{ asset('js/jquery.flot.min.js') }}"></script> 
<script src="{{ asset('js/jquery.flot.resize.min.js') }}"></script> 
<script src="{{ asset('js/jquery.peity.min.js') }}"></script> 
<script src="{{ asset('js/fullcalendar.min.js') }}"></script> 
<script src="{{ asset('js/matrix.js') }}"></script> 
<script src="{{ asset('js/matrix.dashboard.js') }}"></script> 
<script src="{{ asset('js/matrix.interface.js') }}"></script> 
<script src="{{ asset('js/matrix.chat.js') }}"></script> 
<script src="{{ asset('js/jquery.validate.js') }}"></script> 
<script src="{{ asset('js/matrix.form_validation.js') }}"></script> 
<script src="{{ asset('js/jquery.wizard.js') }}"></script> 
<script src="{{ asset('js/jquery.uniform.js') }}"></script> 
<script src="{{ asset('js/select2.min.js') }}"></script> 
<script src="{{ asset('js/matrix.popover.js') }}"></script> 
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script> 
<script src="{{ asset('js/matrix.tables.js') }}"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

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
