 <html>
    <head>
        <!--BootStrap 4-->
        <link rel="stylesheet" type="text/css" href="bootstrap.css"/>
        <!--JQuery 3.4.1-->
        <script src="jquery-3.4.1.min.js"></script>
        <!--Ion Icons-->
        <link rel="stylesheet" type="text/css" href="ionicons-2.0.1\css\ionicons.css"/>
        <!--CSS Styling Sheets Link-->
        <link rel="stylesheet" type="text/css" href="HeaderAndExtensionsLarge.css" media="only screen and (min-width:1050px)"/>
        <link rel="stylesheet" type="text/css" href="HeaderAndExtensionsMedium.css" media="only screen and (max-width:1050px)"/>
        <!--FACEBOOK CDN-->
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>
        <!--Meta Viewport-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
      <!--First Header Section-->
      <div class="headerTopBar">
        <div class="headerLeftDiv">
          <p class="headerTopBarPLeft">433 Shirley Parkway, Piscataway, NJ 08854</p>
        </div>
        <div class="headerRightDiv">
          <p class="headerTopBarPRight"><a href="tel:+17323845208">(732) 384-5208</p></a>
          <h5 class="ion-social-facebook headerTopBarPRight"></h5>
          <h5 class="ion-social-twitter headerTopBarPRight"></h5>
        </div>
      </div>
      <!--Second Header Section-->
      <div class="secondHeaderSection">
        <div class="secondHeaderDivCenter">
          <ul>
            <!--Tab 1-->
            <li><button onclick="GoHome()">HOME</button></li>
            <!--Tab 2-->
              <li><button onclick="aboutUs()">ABOUT US</button>
              <ul>

              </ul>
            </li>
            <!--LOGO IMAGE-->
            <img src="PrecisionLogo.png"/>
            <h1 class="ion-navicon mediumNav" onclick="navExtend()"></h1>
            <!--Tab 3-->
              <li><button onclick="OurServices()">OUR SERVICES</button></span>
              <ul>

              </ul>
            </li>  
            <!--Tab 4-->
            <li><button onclick="ContactUs()">CONTACT US</button></li>
          </ul>
        </div>
      </div>
    </body>
    <!--Script Begins-->
    <script type="text/javascript">
    /*Page Redirects*/
    function GoHome()
    {
        window.location.href = 'index.php';
    }

    function aboutUs()
    {
        window.location.href = 'about.php'; 
    }

    function OurServices()
    {
        window.location.href = 'OurServices.php';
    }

    function ContactUs()
    {
      window.location.href = 'contact.php';
    }

    /*Navigation Extend*/
    function navExtend()
    {
      $(".secondHeaderSection").css("height","380px");
    }
    </script>
 </html>