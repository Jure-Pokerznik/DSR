<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Homepage</title>
<link rel="icon" href="favicon.png" type="image/png">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
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

<script>
$('.datepicker').datepicker({
    format: 'yyyy/mm/dd',
    startDate: '-3d'
});
</script>
<script>

$(function() {
    var drzave = [
      "Afghanistan",
      "Albania",
      "Algeria",
      "Andorra",
      "Angola",
      "Antigua & Deps",
      "Argentina",
      "Armenia",
      "Australia",
      "Austria",
      "Azerbaijan",
      "Bahamas",
      "Bahrain",
      "Bangladesh",
      "Barbados",
      "Belarus",
      "Belgium",
      "Belize",
      "Benin",
      "Bhutan",
      "Bolivia",
      "Bosnia & Herzegovina",
      "Botswana",
      "Brazil",
      "Brunei",
      "Bulgaria",
      "Burkina",
      "Burundi",
      "Cambodia",
      "Cameroon",
      "Canada",
      "Cape Verde",
      "Central African Rep",
      "Chad",
      "Chile",
      "China",
      "Colombia",
      "Comoros",
      "Congo",
      "Costa Rica",
      "Croatia",
      "Cuba",
      "Cyprus",
      "Czech Republic",
      "Denmark",
      "Djibouti",
      "Dominica",
      "Dominican Republic",
      "East Timor",
      "Ecuador",
      "Egypt",
      "El Salvador",
      "Equatorial Guinea",
      "Eritrea",
      "Estonia",
      "Ethiopia",
      "Fiji",
      "Finland",
      "France",
      "Gabon",
      "Gambia",
      "Georgia",
      "Germany",
      "Ghana",
      "Greece",
      "Grenada",
      "Guatemala",
      "Guinea",
      "Guinea-Bissau",
      "Guyana",
      "Haiti",
      "Honduras",
      "Hungary",
      "Iceland",
      "India",
      "Indonesia",
      "Iran",
      "Iraq",
      "Ireland",
      "Israel",
      "Italy",
      "Ivory Coast",
      "Jamaica",
      "Japan",
      "Jordan",
      "Kazakhstan",
      "Kenya",
      "Kiribati",
      "Korea North",
      "Korea South",
      "Kosovo",
      "Kuwait",
      "Kyrgyzstan",
      "Laos",
      "Latvia",
      "Lebanon",
      "Lesotho",
      "Liberia",
      "Libya",
      "Liechtenstein",
      "Lithuania",
      "Luxembourg",
      "Macedonia",
      "Madagascar",
      "Malawi",
      "Malaysia",
      "Maldives",
      "Mali",
      "Malta",
      "Marshall Islands",
      "Mauritania",
      "Mauritius",
      "Mexico",
      "Micronesia",
      "Moldova",
      "Monaco",
      "Mongolia",
      "Montenegro",
      "Morocco",
      "Mozambique",
      "Myanmar",
      "Namibia",
      "Nauru",
      "Nepal",
      "Netherlands",
      "New Zealand",
      "Nicaragua",
      "Niger",
      "Nigeria",
      "Norway",
      "Oman",
      "Pakistan",
      "Palau",
      "Panama",
      "Papua New Guinea",
      "Paraguay",
      "Peru",
      "Philippines",
      "Poland",
      "Portugal",
      "Qatar",
      "Romania",
      "Russian Federation",
      "Rwanda",
      "St Kitts & Nevis",
      "St Lucia",
      "Saint Vincent & the Grenadines",
      "Samoa",
      "San Marino",
      "Sao Tome & Principe",
      "Saudi Arabia",
      "Senegal",
      "Serbia",
      "Seychelles",
      "Sierra Leone",
      "Singapore",
      "Slovakia",
      "Slovenia",
      "Solomon Islands",
      "Somalia",
      "South Africa",
      "South Sudan",
      "Spain",
      "Sri Lanka",
      "Sudan",
      "Suriname",
      "Swaziland",
      "Sweden",
      "Switzerland",
      "Syria",
      "Taiwan",
      "Tajikistan",
      "Tanzania",
      "Thailand",
      "Togo",
      "Tonga",
      "Trinidad & Tobago",
      "Tunisia",
      "Turkey",
      "Turkmenistan",
      "Tuvalu",
      "Uganda",
      "Ukraine",
      "United Arab Emirates",
      "United Kingdom",
      "United States of America",
      "Uruguay",
      "Uzbekistan",
      "Vanuatu",
      "Vatican City",
      "Venezuela",
      "Vietnam",
      "Yemen",
      "Zambia",
      "Zimbabwe",
      ];
    $( "#country" ).autocomplete({
      source: drzave
    });
  });
</script>

<script type="text/javascript">
    $(".bday").datetimepicker({format: 'yyyy-mm-dd'});
</script>   
</head>
<body>

<!--Header_section-->
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
<!--Header_section--> 



<!--start form-->


<section id="form">
  <div class="container">
    <h2>Add contact</h2>
    <div class="row">
      <form method="post" action="contact_add.php" data-toggle="validator" role="form" autocomplete="off">
        <div class="col-xs-12 col-sm-6 col-lg-4 col-md-4">
          <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" pattern="^[A-Za-z]{2,}$" maxlength="15" class="form-control" id="name" placeholder="Name (eg. Mike)" data-error="Please input a correct name!" required>
            <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
            <label for="surname">Surname</label>
            <input name="surname" type="text" pattern="^[A-Za-z]{2,}$" maxlength="25" class="form-control" id="surname" placeholder="Surname (eg. Millers)" data-error="Please input a correct surname!" required>
            <div class="help-block with-errors"></div>
            </div>

            <div class="input-group date" data-provide="datepicker">
            <label for="birthday">Birthday</label>
            <input name="birthday" id="birthday" type="text" class="form-control" data-date-format="yyyy/mm/dd">
            <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
            </div>
            </div>


        </div>

        <div class="col-xs-12 col-sm-6 col-lg-4 col-md-4">
        <div class="form-group">
                  <label for="address_1">Address Line 1</label>
                  <input name="address_1" type="text" pattern="^[A-Za-z0-9\s]{3,}$" maxlength="150" class="form-control" id="address_1" placeholder="Address Line 1" data-error="Please input a correct address!" required="">
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                <label for="address_2">Address Line 2</label>
                  <input name="address_2" type="text" pattern="^[A-Za-z0-9\s]{,}$" maxlength="150" class="form-control" id="address_2" placeholder="Address Line 2" data-error="Please input a correct address!">
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                <label for="city">City / Town</label>
                  <input name="city" type="text" pattern="^[A-Za-z0-9\s]{3,}$" maxlength="150" class="form-control" id="city" placeholder="City / Town" data-error="Please input a correct address!" required="">
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                <label for="region">State / Province / Region</label>
                  <input name="region" type="text" pattern="^[A-Za-z0-9\s]{3,}$" maxlength="150" class="form-control" id="region" placeholder="State / Province / Region" data-error="Please input a correct address!" required="">
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                <label for="zip">ZIP / Postal code</label>
                  <input name="zip" type="text" pattern="^[0-9]{4,}$" maxlength="5" class="form-control" id="zip" placeholder="State / Province / Region" data-error="Only numbers, maximum 5 characters!" required="">
                  <div class="help-block with-errors"></div>
                </div>
                <div class="ui-widget"> <!--TODO: BOOTSTRAP UI! #IMPORTANT-->
                  <label for="country">Country</label>
                    <div class="form-group">
                      <input name="country" id="country">
                    </div>
                </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4 col-md-4">
        <div class="form-group">
                  <label for="facebook">Facebook</label>
                  <input name="facebook" type="text" maxlength="250" class="form-control" id="facebook" placeholder="https://www.facebook.com/mikemillers" data-error="Enter your Facebook link">
                  <div class="help-block with-errors"></div>
              </div>

              <div class="form-group">
                  <label for="twitter">Twitter</label>
                  <input name="twitter" type="text" maxlength="250" class="form-control" id="twitter" placeholder="https://twitter.com/mikemillers" data-error="Enter your Twitter link">
                  <div class="help-block with-errors"></div>
              </div>

              <div class="form-group">
                  <label for="linkedin">LinkedIn</label>
                  <input name="linkedin" type="text" maxlength="250" class="form-control" id="linkedin" placeholder="https://www.linkedin.com/in/mike-millers-1a2b1234" data-error="Enter your LinkedIn link">
                  <div class="help-block with-errors"></div>
              </div>
              </div>
        </div>

<div class="form-group"><!--buttons-->
                <button type="submit" class="btn btn-primary">Send</button>
                <button type="reset" class="btn btn-default">Reset</button>
              </div>




      </form>
    </div>
  </div>
</section>





<!--end form -->




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


</body>
</html>