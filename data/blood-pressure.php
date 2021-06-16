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
                            <li class="is-active has-text-weight-light"><a href="#">เครื่องวัดความดันโลหิต</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Header Product-->
        <section id="product" class="section">
            <div class="container">
                <h1 class="title is-size-5 has-text-weight-bold has-text-centered">เครื่องวัดความดันโลหิต</h1>
                <!-- Products list -->
                <div class="columns is-multiline is-mobile products-group">
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/blood-pressure-img/BP-A2BASIC.jpg" alt="เครื่องวัดความดันโลหิตแบบต้นแขน" title="เครื่องวัดความดันโลหิตแบบต้นแขน">
                            <p class="is-size-6 has-text-weight-light mt-3">เครื่องวัดความดันโลหิตแบบต้นแขน</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/blood-pressure-img/riester-precisa.jpg" alt="เครื่องวัดความดันโลหิตแบบกระเป๋า" title="เครื่องวัดความดันโลหิตแบบกระเป๋า">
                            <p class="is-size-6 has-text-weight-light mt-3">เครื่องวัดความดันโลหิตแบบกระเป๋า</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/blood-pressure-img/alpk2.jpg" alt="เครื่องวัดความดันโลหิตแบบตั้งโต๊ะ" title="เครื่องวัดความดันโลหิตแบบตั้งโต๊ะ">
                            <p class="is-size-6 has-text-weight-light mt-3">เครื่องวัดความดันโลหิตแบบตั้งโต๊ะ</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/blood-pressure-img/RBP-100.jpg" alt="เครื่องวัดความดันโลหิตแบบล้อเลื่อน" title="เครื่องวัดความดันโลหิตแบบล้อเลื่อน">
                            <p class="is-size-6 has-text-weight-light mt-3">เครื่องวัดความดันโลหิตแบบล้อเลื่อน</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/blood-pressure-img/HBP-9020.jpg" alt="เครื่องวัดความดันโลหิตแบบสอดแขน" title="เครื่องวัดความดันโลหิตแบบสอดแขน">
                            <p class="is-size-6 has-text-weight-light mt-3">เครื่องวัดความดันโลหิตแบบสอดแขน</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact and Footer -->
        <?php include('elements/contact-footer.php') ?>
    </main>

    <!-- Script -->
    <?php include('elements/script.php') ?>
</body>

</html>