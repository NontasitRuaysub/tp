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
        <section id="breadcrumb" class="section">
            <div class="container">
                <nav class="breadcrumb" aria-label="breadcrumbs">
                    <ul>
                        <li class="has-text-weight-light"><a href="../index.php">หมวดหมู่สินค้า</a></li>
                        <li class="is-active has-text-weight-light"><a href="#">ชุดตรวจ หู ตา คอ จมูก หลอดลม</a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <!-- Header Product-->
        <section id="product" class="section">
            <div class="container">
                <h1 class="title is-size-5 has-text-weight-bold has-text-centered">ชุดตรวจ หู ตา คอ จมูก หลอดลม</h1>
                <!-- Products list -->
                <div class="columns is-multiline is-mobile products-group">
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/ชุดตรวจหูตาคอจมูก/ชุดตรวจตาหูคอจมูก-รุ่น-econom.jpg" alt="ชุดตรวจตาหูคอจมูก รุ่น econom" title="ชุดตรวจตาหูคอจมูก รุ่น econom">
                            <p class="is-size-6 has-text-weight-light mt-4">ชุดตรวจตาหูคอจมูก รุ่น econom</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/ชุดตรวจหูตาคอจมูก/ชุดตรวจหูตาคอจมูก-Deluxe-XL-2.5V.jpg" alt="ชุดตรวจหูตาคอจมูก Deluxe XL 2.5V" title="ชุดตรวจตาหูคอจมูก รุ่น econom">
                            <p class="is-size-6 has-text-weight-light mt-4">ชุดตรวจหูตาคอจมูก Deluxe XL 2.5V</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact and footer Section -->
        <?php include('elements/contact-footer.php') ?>
    </main>

    <!-- Script -->
    <?php include('elements/script.php') ?>
</body>

</html>