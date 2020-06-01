<!Doctype html>

<html lang="en">
<head>
   
   <?php include('inc/head.php'); ?>

</head>

<body onLoad="menu(4)">

    <?php include('inc/top.php'); ?>

    <section class="g-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3751.751319381254!2d99.83081400000002!3d19.89272!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDUzJzMzLjgiTiA5OcKwNDknNTEuMCJF!5e0!3m2!1sen!2sus!4v1591024114622!5m2!1sen!2sus" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>


    <div class="container">
        <section class="contact-box">
            <div class="contact-addr">
                <div class="info-h">
                    <img src="images/icons/map.svg" alt="">
                    <h2>สถานที่ติดต่อ</h2>
                </div>

                <div class="p">
                    เลขที่ 303/2 หมู่ 26 ซอยสุภาคำ ถนนพหลโยธิน (สายใน) <br>
                    ตำบลรอบเวียงอำเภอเมืองเชียงราย <br>
                    จังหวัดเชียงราย 57000
                </div>

                <div class="p">
                    <i class="icon-mail"></i>
                    <span>อีเมล์ :      <a href="mailto:md@ceo.co.th">md@ceo.co.th</a> หรือ
                    <a href="mailto:mdchariti@hotmail.com">mdchariti@hotmail.com</a></span>
                </div>

                <div class="p">
                    <i class="icon-tel"></i>
                    <span>โทรศัพท์:   <a href="tel:0955293456">095-529-3456</a></span>
                </div>
            </div>

            <div class="contact-frm">
                <form action="">
                    <p>
                        <input type="text" placeholder="ชื่อของคุณ">
                    </p>
                    <p>
                        <input type="text" placeholder="อีเมล์ของคุณ">
                    </p>
                    <p>
                        <input type="text" placeholder="หัวข้อเรื่อง">
                    </p>
                    <p>
                        <textarea placeholder="ข้อความ"></textarea>
                    </p>

                    <p>
                        <input type="text" placeholder="2 + 2 =" class="txt-s">
                        <button class="btn1">ส่งเมล์</button>
                    </p>
                </form>
            </div>
        </section>
    </div>
</body>

</html>