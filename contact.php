<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('elements/head.php') ?>
</head>

<body>
    <header>
        <?php include('elements/head-nav.php') ?>
    </header>
    <main>
        <!-- breadcrumb -->
        <section id="breadcrumb" class="section">
            <div class="container">
                <nav class="breadcrumb" aria-label="breadcrumbs">
                    <ul>
                        <li><a href="index.php">หน้าแรก</a></li>
                        <li class="is-active"><a href="#">ติดต่อเรา</a></li>
                    </ul>
                </nav>
            </div>
        </section>


        <!-- Contact section -->
        <section id="contact" class="section">
            <div class="container">
                <h1 class="title is-5-mobile is-size-3-desktop has-text-centered">บริษัท ทีแอนด์พี โปรเทค สำนักงานใหญ่</h1>
                <!-- Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1937.2610095320988!2d100.51026029836837!3d13.80766314269144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b9454050385%3A0xad784da2e70ff2c7!2s411!5e0!3m2!1sth!2sth!4v1621581240520!5m2!1sth!2sth" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <div class="columns is-multiline is-mobile contact-detail">
                    <div class="column is-12-mobile is-6-tablet">
                        <div class="content">
                            <h6 class="title is-size-5">บริษัท ทีแอนด์พี โปรเทค จำกัด</h6>
                            <p class="is-size-5">ที่อยู่ 411/14 ถนนจรัญสนิทวงศ์ 83 แขวงบางอ้อ เขตบางพลัด กรุงเทพฯ 10700</p>
                            <p class="is-size-5">โทร : 063-526-9923</p>
                            <p class="is-size-5">089-165-8886</p>
                            <p class="is-size-5">อีเมล์ : tpprotech18@gmail.com</p>
                        </div>
                    </div>
                    <div class="column is-12-mobile is-6-tablet contact-line">
                        <p class="is-size-5">หรือ แสกน QR code เพื่อติดต่อเราทางไลน์</p>
                        <img class="mt-3" src="images/contact-img/line-qr-code.jpg" alt="@tpprotech18" title="@tpprotech18">
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Banner + Footer -->
        <?php include('elements-for-contact/contact-footer.php') ?>
    </main>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>
    <!-- Jquey CDN JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <!-- Owl Carousel CDN JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- JS File -->
    <script src="js/app.js" type="text/javascript"></script>
</body>

</html>