<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Contactify - Contacts List</title>
<link rel="icon" href="favicon.png" type="image/png">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/jquery.dataTables.css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/linecons.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.9.2.custom.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.0.custom">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.structure.css">
<link rel="stylesheet" type="text/css" href="jquery-ui.theme.css">
<link rel="stylesheet" type="text/css" href="bootstrap-datepicker.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<script>
        $(document).ready(function(){
          //Skrije vse 
          $(".hideall").hide();

          $("#showall").click(function(){
           $(".opisPizzarije").show("slide");
    });
          $("#button1").click(function(){
           $(".box1").toggle("slide");
    });
          $("#button2").click(function(){
           $(".box2").toggle("slide");
    });
          $("#button3").click(function(){
           $(".box3").toggle("slide");
    });
          $("#button4").click(function(){
           $(".box4").toggle("slide");
    });
          $("#button5").click(function(){
           $(".box5").toggle("slide");
    });
});
</script>
<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->

<script type="text/javascript">
  $(document).ready(function(e) {
        $('.res-nav_click').click(function(){
    $('ul.toggle').slideToggle(600) 
      }); 
      
  $(document).ready(function() {
$(window).bind('scroll', function() {
         if ($(window).scrollTop() > 0) {
             $('#header_outer').addClass('fixed');
         }
         else {
             $('#header_outer').removeClass('fixed');
         }
    });
  
    });
    

        }); 
function resizeText() {
  var preferredWidth = 767;
  var displayWidth = window.innerWidth;
  var percentage = displayWidth / preferredWidth;
  var fontsizetitle = 25;
  var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
  $(".divclass").css("font-size", newFontSizeTitle)
}
</script>
</head>
<body>
<?php
  $servername     = "localhost";
  $username       = "root";
  $password       = "";
  $world          = "conectify";
  $con            = mysqli_connect($servername,$username,$password,$world);
    
?>

<header id="header_outer">
  <div class="container">
    <div class="header_section">
      <div class="logo"><a href="javascript:void(0)"><img src="img/logob.png" alt=""></a></div>
      <nav class="nav" id="nav">
        <ul class="toggle">
          <li><a href="index.html">Home</a></li>
          <li><a href="contacts_list.php">Contacts list</a></li>
          <li><a href="add_contact.php">Add contacts</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="add_event.php">Add events</a></li>
        </ul>
        <ul class="">
          <li><a href="index.html">Home</a></li>
          <li><a href="contacts_list.php">Contacts list</a></li>
          <li><a href="add_contact.php">Add contacts</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="add_event.php">Add events</a></li>
        </ul>
      </nav>
      <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a> </div>
  </div>
</header>

<section id="container">
  <div class="container">
    <h2>Contacts List</h2>
  </div>
</section id="container">

<section id="buttons">
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
<button id="button1" class="btn btn-default">Name search</button>
<button id="button2" class="btn btn-default">Surname search</button>
<button id="button3" class="btn btn-default">City search</button>
<button id="button4" class="btn btn-default">Show all contacts</button>
</div>
</section>
<section id="container">
<div class="hideall box1"> <h2>Name search</h2>
  
  <div class="row">
  <div class="col-lg-8 col-sm-8 col-lg-offset-2 col-sm-offset-2">

    <form role="form" method="post" action="search_contacts0.php" id="search">
      <div class="form-group">
       <input type="text" name="contact" id="contact" class="form-control">
      </div>
      <div align="right">
        <input type="submit" id="search" class="btn btn-primary" value="Search!">
      </div>
    </form>

  </div>
  </div>
  </div>

  <div class="hideall box2"> <h2>Surname search</h2>
  
  <div class="row">
  <div class="col-lg-8 col-sm-8 col-lg-offset-2 col-sm-offset-2">

    <form role="form" method="post" action="search_contacts.php" id="search">
      <div class="form-group">
       <input type="text" name="contact" id="contact" class="form-control">
      </div>
      <div align="right">
        <input type="submit" id="search" class="btn btn-primary" value="Search!">
      </div>
    </form>

  </div>
  </div>
  </div>
  <div class="hideall box3"> <h2>City search</h2>
    <div class="row">
  <div class="col-lg-8 col-sm-8 col-lg-offset-2 col-sm-offset-2">

    <form role="form" method="post" action="search_contacts2.php" id="search">
      <div class="form-group">
       <input type="text" name="contact" id="contact" class="form-control">
      </div>
      <div align="right">
        <input type="submit" id="search" class="btn btn-primary" value="Search!">
      </div>
    </form>

  </div>
  </div>
  </div>


  <div class="hideall box4">
 <h2>All contacts</h2>
  <?php
    $all_contacts = mysqli_query($con, "SELECT * FROM contacts ORDER BY surname, birthday ASC");
    while($line = mysqli_fetch_array($all_contacts)){ 
      ?>
      
      <div class="col-lg-3 col-md-5 col-sm-5 col-xs-8 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-offset-2">
        <div class="row">

 <?php if($line == "nekaj" ){

 }
 else if {

 }
 else
 ?> 
<!--        <h3><?php echo $line["name"]." ".$line["surname"]."</h3>"?>
        Birthday: <?php echo $line["birthday"]."<br /> 
        Address: ".$line["address_1"].", ".$line["address_2"]."<br />
        ".$line["zip"].", ".$line["city"]."<br />
        ".$line["region"].", ".$line["country"]."<br />"?>
        Facebook: <?php echo $line["facebook"]?><br />
        Twitter: <?php echo $line["twitter"]?><br />
        LinkedIn: <?php echo $line["linkedin"]?><br /><br /> -->

        </div>
      </div>
      <?php  }; 
      mysqli_close($con);
  ?>
</div>
</section>







<footer>
<div class="container">
    <div class="footer_bottom"> <span>Contactify - Naloga 3 pri predmetu DSR 2016 | <a href="http://bootstraptaste.com/">Bootstrap Themes</a> by BootstrapTaste </span> </div>
    <!-- 
        All links in the footer should remain intact. 
        Licenseing information is available at: http://bootstraptaste.com/license/
        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Butterfly
    -->
  </div>
</footer>
<script type="text/javascript">
    $(document).ready(function(e) {
        $('#header_outer').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script> 
<!--<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
    document.getElementById('').onclick = function() {
      var section = document.createElement('section');
      section.className = 'wow fadeInDown';
    section.className = 'wow shake';
    section.className = 'wow zoomIn';
    section.className = 'wow lightSpeedIn';
      this.parentNode.insertBefore(section, this);
    };
  </script> -->
<script type="text/javascript">
  $(window).load(function(){
    
    $('a').bind('click',function(event){
      var $anchor = $(this);
      
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top - 91
      }, 1500,'easeInOutExpo');
      /*
      if you don't want to use the easing effects:
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
      }, 1000);
      */
      event.preventDefault();
    });
  })
</script> 

<!--<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 350,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
      
            filter: selector,
         });
         return false;
    });
  
});

</script>


--> 

<script type="text/javascript">

   
  jQuery(document).ready(function($){     
// Portfolio Isotope
  var container = $('#portfolio-wrap'); 
  

  container.isotope({
    animationEngine : 'best-available',
      animationOptions: {
        duration: 200,
        queue: false
      },
    layoutMode: 'fitRows'
  }); 

  $('#filters a').click(function(){
    $('#filters a').removeClass('active');
    $(this).addClass('active');
    var selector = $(this).attr('data-filter');
      container.isotope({ filter: selector });
        setProjects();    
      return false;
  });
    
    
    function splitColumns() { 
      var winWidth = $(window).width(), 
        columnNumb = 1;
      
      
      if (winWidth > 1024) {
        columnNumb = 4;
      } else if (winWidth > 900) {
        columnNumb = 2;
      } else if (winWidth > 479) {
        columnNumb = 2;
      } else if (winWidth < 479) {
        columnNumb = 1;
      }
      
      return columnNumb;
    }   
    
    function setColumns() { 
      var winWidth = $(window).width(), 
        columnNumb = splitColumns(), 
        postWidth = Math.floor(winWidth / columnNumb);
      
      container.find('.portfolio-item').each(function () { 
        $(this).css( { 
          width : postWidth + 'px' 
        });
      });
    }   
    
    function setProjects() { 
      setColumns();
      container.isotope('reLayout');
    }   
    
    container.imagesLoaded(function () { 
      setColumns();
    });
    
  
    $(window).bind('resize', function () { 
      setProjects();      
    });

});
$( window ).load(function() {
  jQuery('#all').click();
  return false;
});
</script>

<script src="js/validator.js"></script>
<script src="js/jquery.dataTables.js"></script>
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</body>
</html>

