<html>
</head>
    <style>
        .mainDiv
        {
            position:relative; height:3000px; 
        }

        .mainDiv div{
            position:relative; top:100px; width:300px; left:65%; 
            margin-top:50px; 
            transform:translate(-50%);
            color:#777;
        }

        .mainDiv img{
            width:400px; height:250px; 
        }

        .mainDiv div:nth-child(even)
        {
            left:35%;
            transform:translate(-50%);

        }

        .mainDiv button{
            background-color:#2DB076; 
            border-style:none; 
            color:white; 
            border-radius:50px; 
            height:40px; 
            width:180px;
            font-size:16px; 
            letter-spacing:1px; 
            font-family:san-serif;
            box-shadow:0px 2px 4px #aaa;
            margin-top:30px; 
        }

        .mainDiv div:nth-child(even) button{
            position:relative; left:113%; 
            transform:translate(-50%);
            border-radius:50px; 
        }

        .mainDiv div:nth-child(odd) button{
            position:relative; left:-13%; 
            transform:translate(-50%);
            border-radius:50px; 
        }

        .mainDiv::before
        {
            content: '';
            position:absolute; 
            top:100px; 
            left:50%; 
            width:2px; 
            height:100%; 
            background-color:#ccc;
            transform:translate(-50%);
        }


    </style>
</head>
<body>
    <div class="mainDiv">
        <div class="head1">
            <h3>What is Lorem Ipsum?</h3>
            <p>Lorem Ipsum is simply dummy text of thp publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <img src='waterlines.jpg'/>
            <button>Januray 2018</button>
        </div>
        <div class="head1">
            <h3>What is Lorem Ipsum?</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting iandard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <img src='waterlines.jpg'/>
            
            <button>March 2018</button>
        </div>
        <div class="head1">
            <h3>What is Lorem Ipsum?</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting indusum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <img src='erosion.jpg'/>
            
            <button>February 2019</button>
        </div>
        <div class="head1">
            <h3>What is Lorem Ipsum?</h3>
            <p>Lorem Ipsum is simply dummy text oshing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <img src='waterlines.jpg'/>
          
            <button>May 2019</button>
        </div>
    </div>
</body>
</html> 