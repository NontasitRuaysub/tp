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
                        <li><a href="../index.php">หมวดหมู่สินค้า</a></li>
                        <li class="is-active"><a href="#">อุปกรณ์ชุดสายช่วยหายใจ</a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <!-- Header Product-->
        <section id="product" class="section">
            <div class="container">
                <h1 class="title is-size-4-touch is-size-2-desktop has-text-weight-bold has-text-centered">อุปกรณ์ชุดสายช่วยหายใจ</h1>
                <!-- Products list -->
                <div class="columns is-multiline is-mobile products-group">
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/อุปกรณ์ชุดสายช่วยหายใจ/Patient-Breathing-Circuit-01.jpg" alt="ชุดสายช่วยหายใจ" title="ชุดสายช่วยหายใจ">
                            <p class="is-size-5 has-text-weight-medium mt-4">ชุดสายช่วยหายใจ</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/อุปกรณ์ชุดสายช่วยหายใจ/Patient-Breathing-Circuit-02.jpg" alt="ชุดสายช่วยหายใจ" title="ชุดสายช่วยหายใจ">
                            <p class="is-size-5 has-text-weight-medium mt-4">ชุดสายช่วยหายใจ</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/อุปกรณ์ชุดสายช่วยหายใจ/Patient-Breathing-Circuit-03.jpg" alt="ชุดสายช่วยหายใจ" title="ชุดสายช่วยหายใจ">
                            <p class="is-size-5 has-text-weight-medium mt-4">ชุดสายช่วยหายใจ</p>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="content">
                            <img src="../images/product-groups/อุปกรณ์ชุดสายช่วยหายใจ/Patient-Breathing-Circuit-all.jpg" alt="ชุดสายช่วยหายใจ" title="ชุดสายช่วยหายใจ">
                            <p class="is-size-5 has-text-weight-medium mt-4">ชุดสายช่วยหายใจ</p>
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