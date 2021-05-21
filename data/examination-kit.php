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
        <!-- Breadcrumb -->
        <div class="container">
            <nav class="breadcrumb" aria-label="breadcrumbs">
                <ul>
                    <li><a href="../index.php">หมวดหมู่สินค้า</a></li>
                    <li class="is-active"><a href="#">ชุดตรวจ หู ตา คอ จมูก หลอดลม</a></li>
                </ul>
            </nav>
        </div>
        <!-- Header Product-->
        <section id="product" class="section">
            <div class="container">
                <h1 class="title is-size-3 has-text-centered">ชุดตรวจ หู ตา คอ จมูก หลอดลม</h1>
                <!-- Products list -->
                <div class="columns is-multiline is-mobile products-group">
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/ชุดตรวจหูตาคอจมูก/ชุดตรวจตาหูคอจมูก-รุ่น-econom.jpg" alt="ชุดตรวจตาหูคอจมูก รุ่น econom" title="ชุดตรวจตาหูคอจมูก รุ่น econom">
                            <p class="is-size-4 has-text-weight-medium mt-4">ชุดตรวจตาหูคอจมูก รุ่น econom</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/ชุดตรวจหูตาคอจมูก/ชุดตรวจหูตาคอจมูก-Deluxe-XL-2.5V.jpg" alt="ชุดตรวจหูตาคอจมูก Deluxe XL 2.5V" title="ชุดตรวจตาหูคอจมูก รุ่น econom">
                            <p class="is-size-4 has-text-weight-medium mt-4">ชุดตรวจหูตาคอจมูก Deluxe XL 2.5V</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact and footer Section -->
        <?php include('elements/contact-footer.php') ?>
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