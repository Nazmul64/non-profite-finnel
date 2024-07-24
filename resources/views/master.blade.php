<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>

        .main_container{
            background:rgb(138, 231, 115);
            overflow: hidden;

        }
         .main_container ul li{
            float: left;
            list-style: none;
         }
          .main_container ul li a{
            font-size:25px;
            overflow:hidden;
            margin:10px;
            text-align:center;
            display:inline-block
          }
          .logo{
            float:right;
          }
          .logo img{
            width:200px;
          }
        
    </style>
    <nav>
        <div class="main_container">
            <div class="logo">
                 <img src="images/logo.png">
            </div>
            <ul>
                <li><a href="{{ url('datashow') }}">Datashow</a></li>
                <li><a  href="{{ url('datainsert') }}">datainsert</a></li>
                <li><a>Services</a></li>
                <li><a>Contact</a></li>
            </ul>
        </div>
    </nav>
   @yield('main_content')


</body>
</html>
