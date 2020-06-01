<!Doctype html>

<html lang="en">
<head>
   
   <?php include('inc/head.php'); ?>

</head>

<body onLoad="menu(3)">

    <?php include('inc/top.php'); ?>


    <section class="news-list list wow bounceInUp">
        <div class="container">
            <ul class="row list-unstyled py-5">
                <?php for($i=1;$i<10;$i++) { ?>
                    <li class="card-news col-md-4 mb-4">
                        <a href="#">
                            <div class="thumb1"><img src="images/thumb-news.jpg" alt=""></div>
                            <div class="card-title">ทาวน์โฮมเปิดขายต่ำกว่า 2 ล้าน ใกล้นิคมอุตสาหกรรมอมตะนคร ชลบุรี</div>
                            <div class="card-date"><span>24/05/2020 12:00</span></div>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </section>

    <section class="article list wow bounceInUp">
        <div class="container">
            <h2 class="h-section">บทความแนะนำ</h2>

            <nav class="slide-arrows">
                <a class="prev"></a>
                <a class="next"></a>
            </nav>

            <div class="article-list ul">
                <?php for($i=1;$i<10;$i++) { ?>
                    <div class="li">
                        <a href="#">
                            <div class="thumb1"><img src="images/thumb-news.jpg" alt=""></div>
                            <div class="article-title">ทาวน์โฮมเปิดขายต่ำกว่า 2 ล้าน ใกล้นิคมอุตสาหกรรมอมตะนคร ชลบุรี</div>
                            <div class="article-date"><span>24/05/2020 12:00</span></div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>


    

    <section class="footer-banner wow bounceInUp mt-5">
        <div class="container">
            <ul>
                <li>
                    <a href=""><img src="images/300x300.jpg" alt=""></a>
                </li>
                <li>
                    <a href=""><img src="images/300x300.jpg" alt=""></a>
                </li>
                <li>
                    <a href=""><img src="images/300x300.jpg" alt=""></a>
                </li>
            </ul>
        </div>
    </section>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

    <script>
        $(function(){

            $('.article .ul').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                prevArrow: $('.article .prev'),
                nextArrow: $('.article .next'),
                centerMode: true,
                autoplay: true,
                responsive: [
                    {
                        breakpoint: 899,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
  
</body>

</html>