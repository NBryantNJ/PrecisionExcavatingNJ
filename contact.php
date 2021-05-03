 <html>
<head>   
     <!--Tab Icon-->
    <link rel="icon" href="tabIcon.png"/>
    <!--Title-->
    <title>Contact Us - Precision Excavating</title>
    <!--JQuery 3.4.1-->
    <script src="jquery-3.4.1.min.js"></script>
    <!--CSS StyleSheets-->
    <link rel="stylesheet" type="text/css" href="contactLarge.css" media="only screen and (min-width:1350px)"/>
    <link rel="stylesheet" type="text/css" href="contactMedium.css" media="only screen and (max-width:1350px)"/>
</head>
<body>
    <div class="mainDiv">
        <div class="section1">
            <img src="indexHeaderPicture.jpg"/>
            <h2>CONTACT US</h2>
        </div>
        <div class="section2">
            <div class="slider1Section2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3032.033284822776!2d-74.4910006485521!3d40.54085377924962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3c7506203b255%3A0x147a87fcf1bf3053!2s433+Shirley+Pkwy%2C+Piscataway%2C+NJ+08854!5e0!3m2!1sen!2sus!4v1560386014621!5m2!1sen!2sus"></iframe>
                <h3 class="ion-ios-navigate"> Location</h3>
                <p>433 Shirley Parkway, Piscataway, NJ 08854</p>
                <p><a href="https://www.google.com/maps/dir//40.5408538,-74.4888066/@40.540854,-74.488807,16z?hl=en">Get Directions</a></p>
                <h3 class="ion-ios-telephone"> Phone</h3>
                <p>Office: <a class="aLinkForPhone" href="tel:+17323845208">(732) 384-5208</a></p>
                <p>24/7 Emergency: <a class="aLinkForPhone" href="tel:+17328822367">(732) 882-2367</a></p>
                <h3 class="ion-email"> Email</h3>
                <p>Support: <a class="aLinkForPhone" href="mailto:PrecisionExcavationNJ@gmail.com">PrecisionExcavationNJ@gmail.com</a></p>
            </div>
            <div class="slider2Section2">
                <h5 class="section2ContactUs">Contact Us</h5>
                <input class="fullName" placeholder="Full Name"/>
                <input class="email" placeholder="Email"/>
                <input type="tel" class="phoneNumber" placeholder="Phone Number"/>
                <h5>Select A Reason</h5>
                <div class="selectionDiv">
                    <button class="selectionButton" onclick="reasonClicked(this)">Question</button>
                    <button class="selectionButton" onclick="reasonClicked(this)">Need Estimate</button>
                    <button class="selectionButton" onclick="reasonClicked(this)">Other</button>
                </div>
                <h5>Questions/Comments</h5>
                <textarea class="additionalComments"></textarea>
                <button class="btn btn-warning sendBtn" onclick="sendEmail()">SEND</button>
            </div>
        </div>
    </div>
    <div class="bottomAdjust">
        <?php
                include 'footer.php';
        ?>
    </div>
</body>
<script>
    //Reason Box Clicked
    var reasonSelected = "Other"; 
    function reasonClicked(e)
    {
        //Set Button Color and store value
        $(".selectionDiv button").css("background-color","white");
        $(e).css("background-color","#ccc");   
        reasonSelected = $(e).html(); 
    }

    //PhoneNumber Input Rules
    $(".phoneNumber").on("input",function()
    {
        if(/[0-9]$/g.test($(this).val()) === true)
        {
        //If Numeric enter into field
        $(".phoneNumber").val($(".phoneNumber").val().replace(/(\d\d\d)(\d\d\d)(\d\d\d\d)/,'($1) $2-$3'));
        //If value is greater than 10 digits. 
        if($(".phoneNumber").val().length > 14)
        {
            $(".phoneNumber").val($(".phoneNumber").val().substring($(".phoneNumber").val().length -1,-1)); 
        }
        else if($(".phoneNumber").val().length < 14)
        {
            $(".phoneNumber").val($(".phoneNumber").val().replace(/[\(\)\-\s]/g,''));
        }
        }
        else
        {
        $(".phoneNumber").val($(".phoneNumber").val().substring($(".phoneNumber").val().length -1,-1)); 
        }
    });


    //Send Contact Email
    function sendEmail()
    {
        var requiredFilledOut = true; 
        //FullName Check
        if($(".fullName").val().length > 2)
        {
            $(".fullName").css("border-style","none");
        }
        else
        {
            $(".fullName").css("border-style","solid");
            $(".fullName").css("border-width","1px");
            $(".fullName").css("border-color","red"); 
            requiredFilledOut = false;          
        }

        //Email Check
        var emailPassed = /[a-zA-Z0-9]+@[a-zA-Z]+\.com/g.test($(".email").val());
        if($(".email").val().length > 5 && emailPassed === true)
        {
            $(".email").css("border-style","none");
        }
        else
        {
            $(".email").css("border-style","solid");
            $(".email").css("border-width","1px");
            $(".email").css("border-color","red"); 
            requiredFilledOut = false;          
        }

        //If All required is true then send
        if(requiredFilledOut === true)
        {
            $.ajax({
                type:'POST',
                url:'sendMail.php',
                data:{FullName:$(".FullName").val(), Email:$(".email").val(), PhoneNumber:$(".phoneNumber").val(), ReasonSelected:reasonSelected, AdditionalComments:$(".additionalComments").val()},
                success:function(data)
                {
                    $(".slider2Section2 input").val('');
                    $(".slider2Section2 textarea").val('');
                    $(".selectionButton").css("background-color",'white');
                    $(".sendBtn").css('background-color','#13D280'); 
                    $(".sendBtn").css("color","white");
                    $(".sendBtn").css("box-shadow","0px 2px 2px #13D280");
                    $(".sendBtn").css("border-color","#13D280");
                    $(".sendBtn").html('MESSAGE SENT');
                    $(".sendBtn").attr('disabled','disabled');
                }
            });
        }
        else
        {
            alert("Please ensure all required fields are filled out.");
        }

    }
</script>
<head>
    <?php
        include 'HeaderAndExtensions.php';
    ?>
</head>
</html>