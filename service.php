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
                        <li class="is-active"><a href="#">บริการของเรา</a></li>
                    </ul>
                </nav>
            </div>
        </section>


        <!-- Service section -->
        <section id="company-service" class="section">
            <div class="container">
                <div class="columns is-multiline is-vcentered">
                    <div class="column is-6-tablet">
                        <div class="content">
                            <img src="images/service-img/sample-1.jpg" alt="บริการซ่อมอุปกรณ์ทางการแพทย์ทุกชนิด" title="บริการซ่อมอุปกรณ์ทางการแพทย์ทุกชนิด">
                        </div>
                    </div>
                    <div class="column is-6-tablet">
                        <div class="content">
                            <h1 class="title is-size-4-mobile is-size-4-tablet has-text-weight-bold">บริการซ่อมอุปกรณ์ทางการแพทย์ทุกชนิด</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <div class="column is-6-tablet">
                        <div class="content">
                            <h1 class="title is-size-4-mobile is-size-4-tablet has-text-weight-bold">บริการสอบเทียบเครื่องมือแพทย์</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <div class="column is-6-tablet">
                        <div class="content">
                            <img src="images/service-img/sample-2.jpg" alt="บริการสอบเทียบเครื่องมือแพทย์" title="บริการสอบเทียบเครื่องมือแพทย์">
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