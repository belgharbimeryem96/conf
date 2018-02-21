<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Gestion de conférence</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->

    <link href="css/form.css" rel="stylesheet">
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="#" class="logo">Gestion<span class="lite">Conférence</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
           <ul class="nav pull-right top-menu">

 <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">Jenifer Smith</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> Profil</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> Messages</a>
              </li>
              <li>
                <a href="login.html"><i class="icon_key_alt"></i> LogOut</a>
              </li>
           
            </ul>
          </li>

         
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="#">
                          <i class="icon_house_alt"></i>
                          <span>Accueil</span>
                      </a>
          </li>


          <li class="sub-menu">
            <a href="blank1.php" class="">
                          <i class="glyphicon glyphicon-pencil"></i>
                          <span>Ajouter conférence </span>
                        
                      </a>
        
          </li>

              <li class="sub-menu">
            <a href="session.php" class="">
                          <i class="glyphicon glyphicon-pencil"></i>
                          <span>Ajouter Session </span>
                        
                      </a>
        
          </li>

             <li class="sub-menu">
            <a href="#" class="">
                          <i class="icon_document_alt"></i>
                          <span>Listes conférences </span>
                        
                      </a>
        
          </li>
                <li class="sub-menu">
            <a href="sponsor.php" class="">
                          <i class="glyphicon glyphicon-pencil"></i>
                          <span>Ajouter Sponsor </span>
                        
                      </a>
        
          </li>
      
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
     


    


        <!-- Today status end -->




            <!--Project Activity end-->
       

        <!-- project team & activity end -->



     
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
<!--
          <form action="AddConference.php" method='post'>
<table align="center" border="0">
  <tr>
    <td>Short name :</td>
    <td><input type="text" name="name" maxlength="400"></td>
  </tr>
    <tr>
  <td> Name of coneference </td>  
    <td><input type="text" name="nameconference" maxlength="250"></td>
  </tr>
  <tr>
  <td> Description : </td>  
    <td> <textarea name="desc" maxlength="250" ></textarea></td>
  </tr>
  <tr>
    <td>Sponsor</td>
    <td><input type="text" name="sponsor" maxlength="10"></td>
    <td><input type="file" name="fichier"/> </td>
  </tr>
  <tr>
    <td>Location :</td>
    <td><input type="text" name="location" maxlength="250"></td>
  </tr>
  
 
  <tr>
    <td>Date start :</td>
    <td><input type="Date" name="dates" maxlength="250"></td>
  </tr>
  
    <tr>
    <td>Date end :</td>
    <td><input type="Date" name="datee" maxlength="250"></td>
  </tr>
  
     <tr>
    <td>email adresses :</td>
    <td><input type="text" name="email" maxlength="250"></td>
  </tr>
  
  <tr>
    <td colspan="2" align="center"><input type="submit" value="add"></td>
  </tr>
</table>
</form>-->

<form class="login-form" action="ResConf.php" method='post'>
      <div class="login-wrap">
        
        <div class="input-group">
          
          <input type="text" class="form-control" name="name" placeholder="Conference Name" autofocus>
          <input type="text" class="form-control" name="logo" placeholder="Conference logo" autofocus>
          <input type="text" class="form-control" name="desc" placeholder="Description" autofocus>
          <input type="Date" class="form-control" name="date" placeholder="date" autofocus>
          
        </div>
     
       
        <button class="btn btn-primary btn-lg btn-block" type="submit">Ajouter</button>
        
      </div>
    </form>
       
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
