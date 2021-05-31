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
                        <li class="is-active has-text-weight-light"><a href="#">อุปกรณ์เวชภัณฑ์</a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <!-- Header Product-->
        <section id="product" class="section">
            <div class="container">
                <h1 class="title is-size-5 has-text-weight-bold has-text-centered">อุปกรณ์เวชภัณฑ์</h1>
                <!-- Products list -->
                <div class="columns is-multiline is-mobile products-group">
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/อุปกรณ์เวชภัณฑ์/หน้ากากอนามัย.jpg" alt="หน้ากากอนามัย" title="หน้ากากอนามัย">
                            <p class="is-size-6 has-text-weight-light mt-4">หน้ากากอนามัย</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/อุปกรณ์เวชภัณฑ์/ถุงมือทางการแพทย์.jpg" alt="ถุงมือทางการแพทย์" title="ถุงมือทางการแพทย์">
                            <p class="is-size-6 has-text-weight-light mt-4">ถุงมือทางการแพทย์</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/อุปกรณ์เวชภัณฑ์/ผ้าก๊อต.jpg" alt="ผ้าก๊อต/ผ้าพันแผล" title="ผ้าก๊อต/ผ้าพันแผล">
                            <p class="is-size-6 has-text-weight-light mt-4">ผ้าก๊อต/ผ้าพันแผล</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/อุปกรณ์เวชภัณฑ์/เข็มฉีดยาพลาสติก.jpg" alt="เข็มฉีดยาพลาสติก" title="เข็มฉีดยาพลาสติก">
                            <p class="is-size-6 has-text-weight-light mt-4">เข็มฉีดยาพลาสติก</p>
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