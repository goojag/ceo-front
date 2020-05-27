<!Doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>CEO 2020</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="css/style.css?v=<?=time()?>">

</head>

<body>

    <header class="top">
        <div class="container">

            <a href="#" class="logo">
                <img src="images/logo.svg" alt="">
            </a>

            <nav class="menu-top">
                <ul>
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </nav>

            <div class="social-top">
                <a href=""><i class="line-icon"></i></a>
                <a href=""><i class="fb-icon"></i></a>
                <a href=""><i class="yt-icon"></i></a>
            </div>
        </div>
    </header>

    <section class="slide">
        <div class="container">
            <div class="slick">
                <div><img src="images/banner.jpg" alt=""></div>
                <div><img src="images/banner.jpg" alt=""></div>
                <div><img src="images/banner.jpg" alt=""></div>
            </div>
        </div>
    </section>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script>
        $(function(){
            $('.slick').slick({
                dots: true
            });
        });
    </script>
  
</body>

</html>