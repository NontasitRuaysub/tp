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
                            <li class="is-active has-text-weight-light"><a href="#">ผ้าพันแขน เครื่องวัดความดัน/ข้อต่อ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Header Product-->
        <section id="product" class="section">
            <div class="container">
                <h1 class="title is-size-5 has-text-weight-bold has-text-centered">ผ้าพันแขนสำหรับ เครื่องวัดความดัน/ข้อต่อ</h1>
                <!-- Products list -->
                <div class="columns is-multiline is-mobile products-group">
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/ผ้าพันแขนสำหรับวัดความดัน/ผ้าพันแขน-เครื่องวัดความดัน.jpg" alt="ผ้าพันแขน-เครื่องวัดความดัน" title="ผ้าพันแขน-เครื่องวัดความดัน">
                            <p class="is-size-6 has-text-weight-light mt-4">ผ้าพันแขน เครื่องวัดความดัน</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/ผ้าพันแขนสำหรับวัดความดัน/ข้อต่อ-เครื่องวัดความดัน.jpg" alt="ข้อต่อ-เครื่องวัดความดัน" title="ข้อต่อ-เครื่องวัดความดัน">
                            <p class="is-size-6 has-text-weight-light mt-4">ข้อต่อ เครื่องวัดความดัน</p>
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