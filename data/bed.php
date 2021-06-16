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
                <div class="content">
                    <nav class="breadcrumb" aria-label="breadcrumbs">
                        <ul>
                            <li class="has-text-weight-light"><a href="../index.php">หมวดหมู่สินค้า</a></li>
                            <li class="is-active has-text-weight-light"><a href="#">เตียงผู้ป่วยไฟฟ้า มือหมุน/รถเข็นผู้ป่วย</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Header Product-->
        <section id="product" class="section">
            <div class="container">
                <h1 class="title is-size-5 has-text-weight-bold has-text-centered">เตียงผู้ป่วยไฟฟ้า มือหมุน/รถเข็นผู้ป่วย</h1>
                <!-- Products list -->
                <div class="columns is-multiline is-mobile products-group">
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/เตียง/เตียงมือหมุน.jpg" alt="เตียงผู้ป่วยแบบมือหมุน" title="เตียงผู้ป่วยแบบมือหมุน">
                            <p class="is-size-6 has-text-weight-light mt-4">เตียงผู้ป่วยแบบมือหมุน</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/เตียง/เตียงไฟฟ้า.jpg" alt="เตียงผู้ป่วยไฟฟ้า" title="เตียงผู้ป่วยไฟฟ้า">
                            <p class="is-size-6 has-text-weight-light mt-4">เตียงผู้ป่วยไฟฟ้า</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/เตียง/เตียงนอนผู้ป่วย-2-ไกร์.jpg" alt="เตียงผู้ป่วยแบบ 2 ไกร์" title="เตียงผู้ป่วยแบบ 2 ไกร์">
                            <p class="is-size-6 has-text-weight-light mt-4">เตียงผู้ป่วยแบบ 2 ไกร์</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/เตียง/เตียงนอนผู้ป่วย-3-ไกร์.jpg" alt="เตียงผู้ป่วยแบบ 3 ไกร์" title="เตียงผู้ป่วยแบบ 3 ไกร์">
                            <p class="is-size-6 has-text-weight-light mt-4">เตียงผู้ป่วยแบบ 3 ไกร์</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/เตียง/Manual-Wheelchair.jpg" alt="รถเข็นแบบมือหมุน" title="รถเข็นแบบมือหมุน">
                            <p class="is-size-6 has-text-weight-light mt-4">รถเข็นแบบมือหมุน</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/เตียง/Electric-Wheelchair.jpg" alt="รถเข็นไฟฟ้า" title="รถเข็นไฟฟ้า">
                            <p class="is-size-6 has-text-weight-light mt-4">รถเข็นไฟฟ้า</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/เตียง/Transport-wheelchair.jpg" alt="รถเข็นแบบ Transport wheelchair" title="รถเข็นแบบ Transport wheelchair">
                            <p class="is-size-6 has-text-weight-light mt-4">รถเข็นแบบ Transport wheelchair</p>
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